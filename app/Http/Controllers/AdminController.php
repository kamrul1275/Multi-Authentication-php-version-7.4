<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function adminLoginForm()
    {
        return view('admin.layouts.login');
    }




    public function adminLogin(Request $request)
    {
        $validated = $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

   if ( Auth::guard('admin')->attempt(['email'=>$request->email, 'password' =>$request->password])){

    return redirect('/admin/dashboard');

   }


        Session::flash('Message', 'Invalid Email or password');
        return redirect()->back();
    }




    public function AdminDashboard()
    {
        return view('admin.layouts.master');
    }


public function AdminLogout()
{
   Auth::guard('admin')->logout();

   return redirect('admin');
}


}
