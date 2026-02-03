<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'email' => ['required', 'string', 'email','max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);

        if(!Auth::attempt($attributes)){
            return back()
            ->withErrors(['password' => 'The provided credentials do not match our records.'])
            ->withInput($request->only('email'));
        }

        $request->session()->regenerate();
        return redirect()->intended('/')->with('success', 'Logged in successfully.');
    }

  public function destroy(Request $request){
         Auth::logout();
+        $request->session()->invalidate();
+        $request->session()->regenerateToken();
         return redirect('/');
     }
}
