<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.adminlogin');
    }

    public function doLogin(Request $request)
    {


        $userInfo=$request->except('_token');

        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.dashboard')->with('message','Login Successfully..');
        } 
        return redirect()->back()->withErrors('Invalid user credentials');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logout Successfull.');
    }
}


 