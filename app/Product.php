<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'id'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    //Relationships
    public function types(){
        return $this->belongsTo('App\Type','type_id');
    }

    public function details() {
        return $this->hasMany('App\OrderDetail','product_id');
    }

    public function bags() {
        return $this->hasMany('App\Bag','product_id');
    }
    
    public function wishlists() {
        return $this->hasMany('App\Wishlist','product_id');
    }

    // Set Images Attribute
    public function setImagesAttribute($images) {
        if(is_array($images)) {
            $this->attributes['images'] = json_encode($images);
        }
    }

    // Get Images Attribute
    public function getImagesAttribute($images) {
        if($images) {
            return json_decode($images,true);
        }
    }

}
