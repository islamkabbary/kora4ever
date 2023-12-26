<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TeamHasLeauge extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'team_has_leauges';
    protected $fillable = ['team_id', 'championship_id','played','won','drawn','lost','gf','ga','gd','points','next'];
    protected $casts = [
        'team_id' => 'integer',
        'championship_id' => 'integer',
    ];
}
