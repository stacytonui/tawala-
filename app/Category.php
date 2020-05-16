<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function SubCategories()
    {
        return $this -> hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\SubCategory' ,
            'category_id', // Foreign key on subcategories table...
            'subcategory_id', // Foreign key on products table...
            'id', // Local key on categories table...
            'id');
    }
}
