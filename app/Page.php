<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    // Relationships
    public function ads(){
        return $this->hasMany('App\Ad','page_id');
    }
}
