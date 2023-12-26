<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Championship extends Model
{
    use HasFactory,SoftDeletes;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_has_leauges')->withPivot('Played', 'won', 'drawn', 'lost', 'gf', 'ga', 'gd', 'points', 'next');
    }

    public function matches()
    {
        return $this->hasMany(Matche::class, 'championship_id', 'id');
    }
}
