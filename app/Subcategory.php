<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable =['name','category_id',];

    public function categories()
    {
    	return $this->belongsTo('App\Category');
    }

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
