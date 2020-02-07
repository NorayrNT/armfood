<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function pages() {
        return $this->belongsTo('App\Page','pade_id');
    }
}
