<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_has_tags');
    }

    public function leauge()
    {
        return $this->belongsTo(Championship::class, 'championship_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }

    public function media()
    {
        return $this->hasMany(MediaNews::class);
    }

    public function created_by_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function get_tag($all_tags_in_page, $tags_news)
    {
        if ($tags_news) {
            if (in_array($tags_news->first()->name, $all_tags_in_page)) {
                if($tags_news[1]){
                    return $tags_news[1]->name;
                }else{
                    return $tags_news->first()->name;
                }
            } else {
                return $tags_news->first()->name;
            }
        }
        // $news->tags ? (in_array($news->tags->first()->name,$tags) ? ($news->tags[1]->name ? $news->tags[1]->name : $news->tags->first()->name) :
        // $news->tags->first()->name) : $news->tags->first()->name in_array($tags_news->first()->name,$all_tags_in_page)
    }
}
