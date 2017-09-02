<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id','cost','place','quantity','size',];

 
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function products()
    {
    	return $this->hasMany('App\Product','product_id');
    }

    public function shipping_addresses()
    {
    	return $this->hasOne('App\ShippingAddress');
    }
}
