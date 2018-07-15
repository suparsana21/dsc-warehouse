<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'description'
    ];


    public function category() {
        return $this->belongsTo('App\ProductCategory','category_id');
    }
}
