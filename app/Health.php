<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    public function record() {
        return $this->belongsTo(Record::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function getAverage($variable) {
        switch ($variable) {
            case 'weight':
                return $this->getAverageWeight();
            case 'height':
                return $this->getAverageHeight();
            case 'blood presure':
                return $this->getAveragePresure();
            default:
                return '';
        }
    }

    protected function getAverageWeight() {
        return '99';
    }

    protected function getAverageHeight() {
        return '150';
    }
    
    protected function getAveragePresure() {
        return '80/120';
    }
}
