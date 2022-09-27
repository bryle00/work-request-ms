<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middlewar\Authenticate;

class PageController extends Controller
{

    public function signup()
    {
        return view('signup');
    }


    public function signupStaff()
    {
        return view('signupStaff');
    }


    public function login()
    {
        return view('login');
    }


    public function adminDashboard()
    {
        return view('admin');
    }

    public function requestorDashboard()
    {
        return view('requestor');
    }

    public function staffDashboard()
    {
        return view('workstaff');
    }
}
