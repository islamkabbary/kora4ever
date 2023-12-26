<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;

    public function teamOne()
    {
        return $this->hasOne(Team::class, 'id', 'team1');
    }

    /**
     * Get the leauge associated with the CreateMatch
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamTwo()
    {
        return $this->hasOne(Team::class, 'id', 'team2');
    }

    /**
     * Get the league that owns the CreateMatch
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leauge()
    {
        return $this->belongsTo(Championship::class, 'championship_id', 'id');
    }
}
