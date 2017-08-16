<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       protected $fillable = ['title','body',];

    public function categories()
    {
    	return $this->hasOne('App\Category');
    }

    public function dimensions()
    {
    	return $this->hasMany('App\Dimension');
    }
}


