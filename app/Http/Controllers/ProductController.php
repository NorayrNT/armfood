<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Term;

class ProductController extends Controller
{
    public function index($id) {
       $product = new Product;
       $prod = '';
       $related_prods = '';
        if($id) {
            $prod = $product::findOrFail($id);
        }
        $type_id = $product::select('type_id')->where('id',$id)->get();
        if($type_id) {
            $related_prods = $product::where('type_id',$type_id[0]->type_id)->get()->except($id);
        }
        $terms = Term::pluck('desc','section');
        
        return view('product')->with(compact('prod','related_prods','terms'));
    }
}
