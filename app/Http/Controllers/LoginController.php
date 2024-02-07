<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function show(Request $request){
        if(Auth::check()){
            return redirect(route('movies.index'));
        }
        $formFields=$request->only(['email','password']);
        if(Auth::attempt($formFields)){
            return redirect()->intended(route('movies.index'));
        }
        return redirect(route('login'))->withErrors([
            'error'=>'User not found!'
        ]);
    }
}
