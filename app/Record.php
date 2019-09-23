<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function health() {
        return $this->hasMany(Health::class);
    }
}
