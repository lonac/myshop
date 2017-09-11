<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = ['user_id','cart_id','company','reference',];

    public function carts()
    {
    	return $this->belongsTo('App\Cart');
    }

    public function address()
    {
    	return $this->belongsTo('App\ShippingAddress','shipping_addresses_id');
    }


}
