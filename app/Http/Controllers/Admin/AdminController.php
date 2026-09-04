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
        $stats = [
            'users' => \App\Models\User::count(),
            'students' => \App\Models\Student::count(),
            'blogs' => \App\Models\Blog::count(),
            'services' => \App\Models\Service::count(),
            'works' => \App\Models\Work::count(),
            'pricing' => \App\Models\Pricing::count(),
            'contacts' => \App\Models\contact::count(),
            'enquiries' => \App\Models\Enquiry::count(),
        ];

        $recentStudents = \App\Models\Student::latest()->take(5)->get();
        $recentWorks = \App\Models\Work::latest()->take(5)->get();
        $recentContacts = \App\Models\contact::latest()->take(5)->get();
        $recentEnquiries = \App\Models\Enquiry::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentStudents', 'recentWorks', 'recentContacts', 'recentEnquiries'));
    }
}
