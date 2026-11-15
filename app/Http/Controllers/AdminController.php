<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private $admin;

    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function loginCheck(Request $request)
    {
       //return $request;
       $this->admin = Admin::where('email',$request->id)->first();
        //return $this;
       if($this->admin)
       //return $this;
       {

            if (password_verify($request->password,$this->admin->password))
            
            {
                //return $this;
                Session::put('name', $this->admin->name);
                return redirect('/dashboard');
            }
            return back()->with('message', 'Sorry ... Your Password is not valid');
       }

       
       return back()->with('message', 'Sorry ... Your email or password is not valid');
    }


    public function logout()
    {
        Session::forget('name');
       return redirect('/login');
    }


    public function newRegistration(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

            $this->admin = Admin::newAdmin($request);
            Session::put('name', $this->admin->name);
            return redirect('/dashboard');
           
    

       


    }

}
