<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDimension extends Model
{
    protected $fillable =['product_id','category',];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
