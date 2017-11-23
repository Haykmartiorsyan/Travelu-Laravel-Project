<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    public function tours() {
        return $this->belongsTo(tour::class);
    }
}
