<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AccountVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect(route('movies.index'));
        }
        return view('register');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'avatar' => 'required',
        ]);

        $user = User::create($validatedData);

        if ($user) {
            Auth::login($user);
            // Send verification email
            $verificationCode = rand(1000, 9999);
            Mail::to($user->email)->send(new AccountVerify($verificationCode));
            Session::put('verificationCode', $verificationCode);
            
            return redirect()->route('register.check');
        }
        
        return redirect()->route('register.index')->withErrors([
            'formError' => 'Error creating user.'
        ]);
    }

    public function check()
    {
        return view('verify');
    }

    public function verify(Request $request)
    {
        $storedVerificationCode = Session::get('verificationCode');
        $userVerificationCode = $request->input('password');

        if ($storedVerificationCode == $userVerificationCode) {
            return redirect()->route('login', ['verified' => true])->with('success', 'Successfully Verified!');
        } else {
            return redirect()->route('register.check')->withErrors([
                'formError' => 'Incorrect Password!'
            ]);
        }
    }
}
