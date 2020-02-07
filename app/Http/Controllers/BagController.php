<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class BagController extends Controller
{
   public function __construct() {
       // add middleware
   }
   
    public function index() {
        $bag_prods = '';
        if(Auth::check()) {
            $bag = App\Bag::where('user_id',Auth::id())->get('product_id');
            $bag_prods = App\Product::whereIn('id',$bag)->paginate(10);
        }
        return view('bag')->with(compact('bag_prods'));
    }

    public function addBag($id = null) {
        if(is_null($id) || !Auth::check()) {
            return 'register';
        } else {
            $prod_id = App\Bag::where('product_id',$id)->get('id');
            if(count($prod_id) > 0) {
                return 'exists';
            }else {
                $user = App\User::find(Auth::id());
                $user->bags()->create([
                    'product_id' => $id,
                ]);
                return ;
            }
        }
    }

    public function bagDel($id = null) {        
        if(is_null($id) || !Auth::check()) {
            return 'register';
        } else { 
            $bag = new App\Bag;
            $bag_id = $bag::where('product_id',$id)->get('id');
            $bag::destroy($bag_id[0]->id);
            
            return 'deleted';
        }
    }
}
