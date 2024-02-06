<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'username'=>'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'avatar'=>'required',
        ]);


        // $existingUser = User::where('email', $request->input('email'))->first();


        // if ($existingUser) {
        //     // Handle case where user with the same email already exists
        //     return redirect(route('register'))->withErrors([
        //         'formError' => 'User with this email already exists.'
        //     ]);
        // }
        $user = User::create($validateData);
       
        // if ($user) {
        //     Auth::login($user);
        //     return redirect(route('user.private'));
        // }
         return route('register.verify');
    
    }
    public function check(){
        return view('verify');
    }

    public function verify(Request $request){
        dd($request);
    }
}
