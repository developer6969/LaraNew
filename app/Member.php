<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function appointment() {
        return $this->hasMany(Appointment::class);
    }

    public function health() {
        return $this->hasMany(Health::class);
    }

    public function getNewPatientId() {
        $memberCount = count($this->pluck('id')->values()->all());
        $serial = "AMAV" . (1000 + $memberCount);
        return $serial;
    }

    public function getAgeFromDob($dateOfBirth) {
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        return $diff->format('%y');
    }
}
