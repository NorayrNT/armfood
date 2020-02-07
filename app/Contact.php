<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   public $timestamps = false;

   public function getPhoneAttribute($phone) {
       if(strpos($phone,',')) {
           return $arr = explode(',',$phone);
       } else {
           return $phone;
       }
   }
}
