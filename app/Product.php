<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function SubCategory()
    {
        return $this -> belongsTo(SubCategory::class);
    }
}
