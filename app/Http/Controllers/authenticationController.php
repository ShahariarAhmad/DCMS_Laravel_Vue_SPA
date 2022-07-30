<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Password;

class authenticationController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $request->session()->regenerate();

            // return redirect()->intended('/articles/all-articles');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'age' => $request->age,
            'height' => $request->height,
        

            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // Auth::login($user, true);
        Auth::loginUsingId($user->id,true);
    }


    function sendResetLink(Request $request){
         Password::sendResetLink(
            $request->only('email')
        );
    }
}
