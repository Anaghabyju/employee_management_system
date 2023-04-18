<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout.index');
    }
    public function register()
    {
        return view('registration');
    }
    public function showlogin()
    {
        return view('showlogin');
    }
     public function login(Request $request)
     {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('admin_index');
        }
        return back()->withErrors([
            'email' => 'invalid email or password'
        ]);
     }
       public function admin_index()
       {
        return view('admin_index');
       }


    public function hrindex()
    {
        return view('hr_index');
    }
}
