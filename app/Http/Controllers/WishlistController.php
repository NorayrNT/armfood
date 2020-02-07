<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App;
use Auth;

class WishlistController extends Controller
{
    public function index() {
        $wish_prods = '';
        if(Auth::check()) {
            $wishlist = App\Wishlist::where('user_id',Auth::id())->get('product_id');
            $wish_prods = App\Product::whereIn('id',$wishlist)->paginate(10);
        }
        return view('wishlist')->with(compact('wish_prods'));
    }

    public function addWish($id = null) {        
        if(is_null($id) || !Auth::check()) {
            return 'register';
        } else {
            $wish = new App\Wishlist;
            $exists = $wish::where('product_id',$id)->get('id');
            if(count($exists) > 0) {
                $wish->destroy($exists[0]->id);
                return 'deleted';
            }else {
                $user =  App\User::find(Auth::id());
                $user->wishlists()->create([
                    'product_id' => $id, 
                ]);
            };
            return;
        }
    }
}
