<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function Dashboard(){
        return view('index');
    }


    public function SignUpPage(){
        return view('auth.singup');
    }

     public function LoginPage(){
        return view('auth.login');
    }

    public function UserDashboard(){
        return view('user.user_dashboard');
    }
}
