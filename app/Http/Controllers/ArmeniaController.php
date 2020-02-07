<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armenia;

class ArmeniaController extends Controller
{
    public function index() {
        $arm = Armenia::get();
        return view('armenia')->with(compact('arm'));
    } 
}
