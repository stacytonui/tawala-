<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable = [
        'name','location','products','phone','land_size',
    ];
}
