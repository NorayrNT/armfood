<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;
    
    // Relationships
    public function orders(){
        return $this->belongsTo('App\Order','order_id');
    }

    public function products() {
        return $this->belongsTo('App\OrderDetail','product_id');
    }
}
