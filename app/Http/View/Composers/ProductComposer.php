<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Product;
use App\Wishlist;
use App\Bag;
use Auth;

class ProductComposer
{
   
    protected $products;

    public function __construct(Product $product)
    {        
        $this->products = $product;
    }

    public function compose(View $view)
    {
        $products = $this->products::get();
        $view->with(['products' => $products]);
    }
}