<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $fillable = ['size',];

    public function products()
    {
    	return $this->belongsTo('App\Product');
    }
}
