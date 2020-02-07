<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Armenia;
use App\Bag;
use App\Wishlist;
use App\User;
use Auth;

class HeaderComposer
{
   
    protected $armenia;

    public function __construct(Armenia $armenia)
    {        
        $this->armenia = $armenia;
    }

    public function compose(View $view)
    {
        $armenia = $this->armenia::get();
        $bags = collect();
        $wishes = collect();
        if(Auth::check()) {
            $user = new User;
            $bag = $user::find(Auth::id())->bags;
            $wish = $user::find(Auth::id())->wishlists;
            foreach($bag as $item) {
                $bags->push($item->product_id);
            }
            foreach($wish as $item) {
                $wishes->push($item->product_id);
            }
        } 
        $view->with(['armenia' => $armenia, 'bags' => $bags,'wishes' => $wishes]);
    }
}