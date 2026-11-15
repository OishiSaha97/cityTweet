<?php

namespace App\Http\Controllers;
//use Auth;

use Illuminate\Support\Facades\Auth;

use App\Models\Info;
use App\Models\User;
use App\Models\Friend;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
       $infos =  Info::where('user_id', Auth::user()->id)->first();
        return view('user.dashboard',compact('infos'));
        
    }

}
