<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function schedule() {
        return $this->hasMany(Schedule::class);
    }

    public function appointment() {
        return $this->hasManyThrough(Appointment::class, Schedule::class);
    }
}
