<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public function tours() {
        return $this->belongsTo(tour::class);
    }
}
