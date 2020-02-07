<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;

class IndexController extends Controller
{
    public function index() {
        $partners = App\Partner::get();
        return view('index')->with(compact('partners'));
    }

    public function resetPass(Request $request) {
        if($request->email) {
            $request->validate([
                'email' => 'required|email'
            ]);
            
            if(App\User::where('email',$request->email)->get()) {
                $user = App\User::where('email',$request->email)->first();
                if($user) {
                    $id = $user->id;
                    $str = "abcdefghidklmnop";
                    $pass = substr(str_shuffle($str),5);                    
                    $new = bcrypt($pass);
                    $user->password = $new;
                    $user->save();
                    $data = collect($pass);
                    Mail::to($request->email)->send(new ResetPassword($data));
                    return redirect(route('login'));                               
                }
                    return back()->with("fail","Such user doesn't exist. Try once more or connect to administration!");
            }
        }
    }
}
