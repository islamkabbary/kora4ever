<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class ,'news_has_tags');
    }

    public function leauge()
    {
        return $this->belongsTo(Championship::class,'championship_id','id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class,'team_id','id');
    }

    public function media()
    {
        return $this->hasMany(MediaNews::class);
    }

    public function created_by_user()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
}
