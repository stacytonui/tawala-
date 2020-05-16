<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function City()
    {
        $this->belongsTo(City::class);
    }
}
