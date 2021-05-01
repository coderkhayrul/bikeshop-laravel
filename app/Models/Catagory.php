<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Catagory extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'parent_id', 'order', 'name', 'slug', 'modelnumber', 'color','category_id','wattage', 'image', 'slug'
    ];

    public function Products()
    {
        return $this->hasMany('App\Product');
    }

}
