<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       protected $fillable = ['name','body','image','cost','manufacturer','subcategoryname','categoryname',];

    public function subcategories()
    {
    	return $this->belongsTo('App\Subcategory');
    }

    public function dimensions()
    {
    	return $this->hasMany('App\Dimension');
    }

    public function products_photos()
    {
    	return $this->hasMany('App\ProductsPhoto');
    }

    public function myprod()
    {
        return $this->belongsTo('App\Cart','product_id');
    }
}


