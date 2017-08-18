<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       protected $fillable = ['name','body','cost','manufacturer','subcategory_id',];

    public function subcategories()
    {
    	return $this->belongsTo('App\Subcategory');
    }

    public function dimensions()
    {
    	return $this->hasMany('App\Dimension');
    }
}


