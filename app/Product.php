<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use TCG\Voyager\Models\Category;
use App\Review;

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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function review()
    {
        return $this->belongsTo('App\Review');
    }

}
