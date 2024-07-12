<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function admin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $welcomeMessage = 'Welcome '. Auth::user()->first_name. ' !';
            session()->flash('success', $welcomeMessage);
            return redirect()->route('admin.dashboard');
        }
        else {
            session()->flash('error','Invalid Username or Password !');
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        session()->flash('success','Logout Successfully !');
        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
