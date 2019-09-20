<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function member() {
        return $this->hasOne(Member::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
    
}
