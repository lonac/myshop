<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMode extends Model
{
    protected $fillable = ['name','accountname','accountnumber',];
}
