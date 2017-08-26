<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['user_id','firstname','lastname','middlename','region',
    'address','phonenumber1','phonenumber2',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
