<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Models\NewsHasTag;
use App\Helpers\FileHelper;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateNewsComponent extends Component
{
    use WithFileUploads, LivewireAlert;

    public $title, $body, $image, $video_url, $tag_id = [], $news_id, $leauge_id, $team_id;
    protected $listeners = ['add'];

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'tag_id' => 'required',
        'team_id' => 'required',
        'leauge_id' => 'required',
        'image' => 'required|image|max:1024',
    ];

    public function render()
    {
        return view('livewire.create-news-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $this->validate();
        if ($this->news_id) {
            try {
                $news = News::find($this->news_id);
                $news->title = $this->title;
                $news->body = $this->body;
                $news->team_id = $this->team_id;
                $news->leauge_id = $this->leauge_id;
                $news->created_by = Auth::user()->id;
                $news->save();
                if ($this->tag_id) {
                    foreach ($this->tag_id as $tag) {
                        NewsHasTag::create([
                            'news_id' => $news->id,
                            'tag_id' => $tag
                        ]);
                    }
                }
                if ($this->video_url) {
                    $news->media()->create(['url' => $this->video_url, 'type' => "video"]);
                } else {
                    if(!is_string($this->image)){
                        $img = $this->image->store('news', 'public');
                        $news->media()->create(['url' => $img]);
                    }
                }
            } catch (\Throwable $th) {
                Log::info("CreateNewsComponent" . $th->getMessage());
            }
            $this->clear();
            $this->alert('success', "successfully updated");
        } else {
            try {
                $news = new News;
                $news->title = $this->title;
                $news->body = $this->body;
                $news->team_id = $this->team_id;
                $news->leauge_id = $this->leauge_id;
                $news->created_by = Auth::user()->id;
                $news->save();
                if ($this->tag_id) {
                    foreach ($this->tag_id as $tag) {
                        NewsHasTag::create([
                            'news_id' => $news->id,
                            'tag_id' => $tag
                        ]);
                    }
                }
                if ($this->video_url) {
                    $news->media()->create(['url' => $this->video_url, 'type' => "video"]);
                } else {
                    if(!is_string($this->image)){
                        $img = $this->image->store('news', 'public');
                        $news->media()->create(['url' => $img]);
                    }
                }
                $this->clear();
                $this->alert('success', "successfully added");
            } catch (\Throwable $th) {
                Log::info("CreateNewsComponent" . $th->getMessage());
            }
        }
    }

    public function clear()
    {
        $this->title = null;
        $this->body = null;
        $this->image = null;
        $this->leauge_id = null;
        $this->team_id = null;
        $this->video_url = null;
        $this->tag_id = null;
    }

    function edit($news_id)
    {
        $news = News::find($news_id);
        $this->news_id = $news->id;
        $this->title = $news->title;
        $this->video_url = $news->video_url;
        $this->image = $news->media->pop()->url;
        $this->tag_id = $news->tags->pluck('id')->toArray();
        $this->team_id = $news->team->pluck('id')->toArray();
        $this->leauge_id = $news->leauge->pluck('id')->toArray();
        $this->dispatchBrowserEvent('setBody', ["body" => $news->body]);
    }


    function delete($news_id)
    {
        $news = News::find($news_id);
        $news->media()->delete();
        $news->delete();
    }
}
