<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Models\NewsHasTag;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CreateNewsComponent extends Component
{
    use WithFileUploads, LivewireAlert;

    public $title, $body, $image, $video_url, $tag_id = [], $news_id, $championship_id, $team_id, $show_as_main_news, $show_from_the_five_main_news, $show_in_most_read;
    protected $listeners = ['add'];

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'tag_id' => 'required',
        'team_id' => 'required',
        'championship_id' => 'required',
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
                $news->body = $this->body;
                $news->title = $this->title;
                $news->team_id = $this->team_id;
                $news->championship_id = $this->championship_id;
                $news->created_by = Auth::user()->id;
                $news->show_as_main_news = $this->show_as_main_news ? true : false;
                $news->show_in_most_read = $this->show_in_most_read ? true : false;
                $news->show_from_the_five_main_news = $this->show_from_the_five_main_news ? true : false;
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
                    if (!is_string($this->image)) {
                        $img = $this->image->store('news', 'public');
                        $news->media()->delete();
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
                $news->championship_id = $this->championship_id;
                $news->show_as_main_news = $this->show_as_main_news ? true : false;
                $news->show_in_most_read = $this->show_in_most_read ? true : false;
                $news->show_from_the_five_main_news = $this->show_from_the_five_main_news ? true : false;
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
                    if (!is_string($this->image)) {
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
        $this->championship_id = null;
        $this->team_id = null;
        $this->video_url = null;
        // $this->tag_id = null;
        $this->dispatchBrowserEvent('reset');
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
        $this->championship_id = $news->leauge->pluck('id')->toArray();
        $this->dispatchBrowserEvent('setBody', ["body" => $news->body]);
    }


    function delete($news_id)
    {
        $news = News::find($news_id);
        if ($news->media) {
            $news->media()->delete();
        }
        if ($news->tags) {
            $news->tags()->delete();
        }
        $news->delete();
        $this->alert('success', "successfully deleted");
    }
}
