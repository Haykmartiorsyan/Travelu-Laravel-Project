<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itinerary extends Model
{
    public function tours() {
        return $this->belongsTo(tour::class);
    }
}
