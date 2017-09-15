<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductState extends Model
{
    protected $fillable = ['product_id','state',];

    public function products()
    {
    	return $this->belongsTo('App\Product');
    }
}
