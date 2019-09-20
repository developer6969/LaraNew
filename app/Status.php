<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function appointment() {
        return $this->hasOne(Appointment::class);
    }
}
