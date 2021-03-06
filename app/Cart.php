<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id','cost','quantity','size',];

 
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }

    public function products()
    {
    	return $this->belongsTo('App\Product','product_id');
    }

    public function shipping_addresses()
    {
    	return $this->hasOne('App\ShippingAddress');
    }

    public function product_orders()
    {
        return $this->hasOne('App\ProductOrder');
    }
}
