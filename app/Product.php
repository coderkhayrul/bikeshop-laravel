<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    // protected $fillable =
    // [
    //     'productname', 'productcontent', 'productprice', 'slug', 'wheelsize', 'color','modelnumber','category_id', 'wattage', 'image', 'slug'
    // ];

    public function category()
    {
        return $this->belongsTo('TCG\Voyager\Models\Category');
    }

}
