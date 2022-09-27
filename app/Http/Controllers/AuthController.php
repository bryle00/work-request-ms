<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middlewar\Authenticate;
use Illuminate\Console\View\Components\Alert;

use function PHPSTORM_META\type;

class AuthController extends Controller
{
    public function signupAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'type' => 'CAO'
        ]);
    return redirect('/user/login');
    }


    public function signupRequestorAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'type' => 'Requestor'

        ]);
    return redirect('/admin/dashboard');
    }

    public function signupStaffAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'type' => 'Workstaff'
        ]);
    return redirect('/admin/dashboard');
    }


    public function adminLoginAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials))
        {
            $request -> session()->regenerate();
            if (auth()->user()->type == 'CAO')
            {
                return redirect()->intended('/admin/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function requestorLoginAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials))
        {
            $request -> session()->regenerate();
            if(auth()->user()->type == 'Requestor')
            {
            return redirect()->intended('/requestor/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function staffLoginAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials))
        {
            $request -> session()->regenerate();
            if(auth()->user()->type == 'Workstaff')
            {
            return redirect()->intended('/staff/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
