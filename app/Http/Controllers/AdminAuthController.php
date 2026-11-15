<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.home.index');
    }

    

    
}
