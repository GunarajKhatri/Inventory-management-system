<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function product(){
   	return $this->belongsTo(Product::class);
   }
}
