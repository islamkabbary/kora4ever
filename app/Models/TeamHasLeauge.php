<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamHasLeauge extends Model
{
    use HasFactory;
    protected $table = 'team_has_leauges';
    protected $fillable = ['team_id', 'leauge_id','played','won','drawn','lost','gf','ga','gd','points','next'];
    protected $casts = [
        'team_id' => 'integer',
        'leauge_id' => 'integer',
    ];
}
