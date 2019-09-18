<?php

namespace App\Models\Concerns;

use Illuminate\Support\Str;

trait UsesUuid
{
    /**
     * In our boot method, we are listening for the creating Eloquent event.
     * This even is fired just before the record is actually stored in the 
     * database. We hook into this event, and use the uuid() method provided 
     * by the Str class in Laravel.
     */
    protected static function bootUsesUuid()
    {
        static::creating(function ($model) {
            if (! $model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
    

    /**     
     * This method is used by Eloquent to now if the
     * IDs on this table are auto-incrementing or not. 
     * Remember we are using UUIDs so we set auto incrementing to false.
     * i.e. Disabling auto-increment to avoid serialization effect
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * It just specifies that the IDs on the table should be stored as strings.
     * i.e. return type of uuid coloum is string
     */
    public function getKeyType()
    {
        return 'string';
    }
}