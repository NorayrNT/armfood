<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;

class AccountController extends Controller
{
    
    public function  __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $orders = '';
        $user = '';
        if(Auth::check()) {
            $user = App\User::find(Auth::check());
            $orders = $user->orders()->paginate(5);
        }
        return view('account')->with(compact('user','orders'));    
    }

    public function changeName(Request $request) {
        if($request) {
            if(Auth::check()) {
                $user = App\User::find(Auth::id());
                $request->validate([
                    'name' => 'string|max:255|min:3',
                ]);
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
                session(['result' => 'изменения успешно сделаны.']);
                return redirect()->back();
            }
            session(['result' => 'что-то пошло не так, попробуйте снова.']);
            return redirect()->back();
        }
    }

    public function changePass(Request $request) {
        if($request) {
            $user = App\User::find(Auth::id());
            if($user->email === $request->email && $request->new_pass === $request->conf_pass) {
                $request->validate([
                    'new_pass' => 'required|string|min:8',
                ]);
                $user->update([
                    'password' => bcrypt($request->new_pass),
                ]);
                session(['result' => 'ваш пароль был успешно изменен.']);
                return redirect()->back();    

            } else {
                session(['result' => 'что-то пошло не так, попробуйте снова.']);
                return redirect()->back();
            }
            dd($request->all());
        }
    }
}
