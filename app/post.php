<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function comment() {
        return $this->hasMany(comment::class);
    }
}
