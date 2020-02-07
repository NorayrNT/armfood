<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Type;
use App\Product;

class ShopController extends Controller
{
    public function index(Request $request, $id = null) {
        $type = new Type; 
        $prod = new Product;        
        $product = '';
        
        if($id) {
            $price = $request->first_price;
            $product = $prod::when($price, function ($query,$price)use($id,$type,$request) {
               return  $type::find($id)->products()->whereBetween('price',[$request->first_price,$request->second_price])->paginate(12);
            },function()use($id,$type) {
                return $type::find($id)->products()->paginate(12);                
            });
        } else if($request->first_price) {
                $product = $prod::whereBetween('price',[$request->first_price,$request->second_price])->paginate(12);
        } else {
            $product = $prod::paginate(12);
        }
        
        return view('shop')->with(compact('type','product'));
    }
}
