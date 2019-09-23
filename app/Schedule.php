<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'appointments_count'
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function clinic() {
        return $this->belongsTo(Clinic::class);
    }

    public function session() {
        return $this->belongsTo(Session::class);
    }

    public function day() {
        return $this->belongsTo(Day::class);
    }

    public function appointment() {
        return $this->hasMany(Appointment::class);
    }
}
