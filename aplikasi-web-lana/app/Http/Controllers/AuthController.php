<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('user/login');
    }

    public function loginAction(Request $request)
    {

        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->Validated();

       if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);

       }

        $request->session()->regenerate();

        return redirect()->route('login')
    }
}
