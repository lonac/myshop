<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = ['cart_id','company','reference',];

    public function carts()
    {
    	return $this->belongsTo('App\Cart');
    }
}
