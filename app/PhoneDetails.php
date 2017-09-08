<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneDetails extends Model
{
    protected $fillable = ['product_id','brand_name','size','languages','cellular','color','rom','releasedate','descriptions','model',];

   public function products()
   {
   	return $this->belongsTo('App\Product');
   } 
}
