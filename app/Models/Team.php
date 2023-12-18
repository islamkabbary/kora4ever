<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function leauges()
    {
        return $this->belongsToMany(Leauge::class, 'team_has_leauges');
    }
}
