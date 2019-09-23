<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $guarded = []; 

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
    
}
