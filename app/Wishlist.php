<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public  $timestamps = false;

    protected $guarded = ['id'];

    // Relations
    public function users() {
        return $this->belongsTo('App\User','user_id');
    }

    public function products() {
        return $this->belongsTo('App\Product','product_id');
    }
}
