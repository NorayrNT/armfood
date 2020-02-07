<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    protected $hidden = ['created_at','updated_at'];

    protected $guarded = ['id'];

    // Relations
    public function users() {
        return $this->belongsTo('App\User','user_id');
    }

    public function products() {
        return $this->belongsTo('App\Product','product_id');
    }
}
