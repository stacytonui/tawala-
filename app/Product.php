<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Product extends Model implements Searchable
{

    protected $fillable = ['name', 'price', 'imagePath'];

    public function getSearchResult(): SearchResult
    {
        $url = route('products.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }


    public function SubCategory()
    {
        return $this -> belongsTo(SubCategory::class);
    }
}
