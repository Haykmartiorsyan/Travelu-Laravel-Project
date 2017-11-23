<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    public function reviews() {
        return $this->hasMany(review::class);
    }

    public function gallery() {
        return $this->hasMany(gallery::class);
    }

    public function itinerary() {
        return $this->hasMany(itinerary::class);
    }
}
