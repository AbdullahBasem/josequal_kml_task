<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function loginScreen()
    {
        return view('login');
    }

    public function signIn(Request $request)
    {
        $validated_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt(['email' => $validated_data['email'], 'password' => $validated_data['password']])) {
            return redirect('/');
        } else {
            return Redirect::back()->withErrors('message', 'Invalid email or password');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }


}
