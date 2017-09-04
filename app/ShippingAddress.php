<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = ['user_id','cart_id','firstname','lastname','middlename','region',
    'address','phonenumber1','phonenumber2',];

    public function carts()
    {
    	return $this->belongsTo('App\Cart');
    }
}
