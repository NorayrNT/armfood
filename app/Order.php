<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['created_at','updated_at'];


    // Relationships
    public function users() {
        return $this->belongsTo('App\User','user_id');
    }

    public function details() {
        return $this->hasMany('App\OrderDetail','order_id');
    }

}
