<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function record() {
        return $this->hasMany(Record::class);
    }
}
