<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       protected $fillable = ['title','body','cost','manufacturer','category','size','subcategory',];

    public function categories()
    {
    	return $this->hasOne('App\Category');
    }

    public function dimensions()
    {
    	return $this->hasMany('App\Dimension');
    }
}


