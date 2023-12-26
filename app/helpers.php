<?php

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

if (!function_exists('get_connected_database')) {
    function get_connected_database()
    {
        return \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
    }
}

if (!function_exists('get_enum_values')) {
    function get_enum_values($table, $field)
    {
        $type = DB::select("SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'")[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }
}

if (!function_exists('is_dark')) {
    function is_dark()
    {
        if (auth()->user())
            if (auth()->user()->theme)
                return auth()->user()->theme;

        if (Cookie::get('user_theme'))
            return Cookie::get('user_theme');

        return false;
    }
}

if (!function_exists('arabic_w2e')) {
    function arabic_w2e($str)
    {
        $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        return str_replace($arabic_western, $arabic_eastern, $str);
    }
}
if (!function_exists('randColor')) {
    function randColor()
    {
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
        return $color;
    }
}

if (!function_exists('storeFile')) {
    function storeFile($folder, $url)
    {
        if (!empty($url))
            return  Storage::disk('public')->putFile($folder, $url);
        else return null;
    }
}

if (!function_exists('get_translate')) {
    function get_translate($value, $from, $to)
    {
        $json = json_decode(file_get_contents("https://translate.googleapis.com/translate_a/single?client=gtx&sl=" . $from . "&tl=" . $to . "&dt=t&q=" . urlencode($value)));
        if (!empty($json[0][0][0]))
            return $json[0][0][0];
    }
}

if (!function_exists('is_tenants_route')) {
    function is_tenants_route()
    {
        return in_array(
            \Route::current()->getName(),
            array("show_all_tenants", "modules.index", "show_all_packages", "show_all_subscriptions")
        );
    }
}

if (!function_exists('is_current_route')) {
    function is_current_route($nameRoute)
    {
        // dd($nameRoute);
        return in_array(\Route::current()->getName(), $nameRoute);
    }
}

if (!function_exists('get_setting')) {
    function get_setting($key, $company_id = null, $prifix)
    {
        if ($company_id) {
            return Setting::where('company_id', $company_id)->where('prifix', $prifix)->whereHas('type', function ($q) use ($key) {
                $q->where('name->en', 'like', '%' . $key . '%');
            })->first();
        } else {
            // Log::info(Setting::where('company_id', $company_id)->where('prifix', $prifix)->get());
            return Setting::where('prifix', $prifix)->whereHas('type', function ($q) use ($key) {
                $q->where('name->en', 'like', '%' . $key . '%');
            })->first();
        }
    }
}

if (!function_exists('getAllConstants')) {
    function getAllConstants($model)
    {
        $oClass = new ReflectionClass($model);
        $constants = $oClass->getConstants();
        unset($constants['CREATED_AT'], $constants['UPDATED_AT']);
        return $constants;
    }
}



if (!function_exists('uploadFile')) {
    function uploadFile($sub_folder, $url, $type, $name = null, $doc = null)
    {
        if (!empty($url)) {
            $folder_date = public_path() . "storage/" . "media/" . request()->getHost() . "/" . date("Y-m-d");

            if (!file_exists($folder_date)) {
                mkdir($folder_date, 0777, true);
            };

            if (!file_exists($folder_date . "/" . $sub_folder)) {
                mkdir($folder_date . "/" . $sub_folder, 0777, true);
            };

            if ($type == "created") {

                if ($name) {
                    $file_name = "media/" . request()->getHost() . "/" . date("Y-m-d") . "/" . str_replace("." . pathinfo($name, PATHINFO_EXTENSION), "-" . date('His') . "." . pathinfo($name, PATHINFO_EXTENSION), $name);
                    // $file_name = date("Y-m-d")."/".date('His').$name;
                    $file = file_put_contents(public_path() .  "storage/" .  $file_name, $url);
                }
            } else {
                $folder = "media/" . request()->getHost() . "/" . date("Y-m-d") . "/" . $sub_folder;
                $file = Storage::disk('public')->putFile($folder, $url);
                if (!$doc) {
                    if ($name) {
                        $file_name = "media/" . request()->getHost() . "/" . date("Y-m-d") . "/" . str_replace("." . pathinfo($name, PATHINFO_EXTENSION), "-" . date('His') . "." . pathinfo($name, PATHINFO_EXTENSION), $name);
                        // $file_name = date("Y-m-d")."/".date('His').$name;
                    } else {
                        $file_name = str_replace("." . pathinfo($file, PATHINFO_EXTENSION), "-" . date('His') . "." . pathinfo($file, PATHINFO_EXTENSION), $file);
                        // $file_name = date('His').$file;
                    }
                    Storage::disk('public')->move($file, $file_name);
                } else {
                    $file_name = $name;
                    Storage::disk('public')->move($file, "media/" . request()->getHost() . "/" . $file_name);
                }
            }
            return $file_name;
        }
    }

    if (!function_exists('getImage')) {
        function getImage($urlDatabase)
        {
            return env('APP_ERP_URL') . 'storage/' . $urlDatabase;
        }
    }
}
