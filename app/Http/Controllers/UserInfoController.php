<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Auth;

class UserInfoController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!auth()->user()->info()->exists()){
            return to_route("info.create");
        }
        return view('user.aboutpage',[
            $userId= Auth::id(),
            //dd($userId)
            // 'posts' => Post::all(),
            'posts' => Post::where('user_id', Auth::user()->id)->get(),
            'posts' => Post::OrderBy('id','desc')->get(),
            'infos' => Info::where('user_id', Auth::user()->id)->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('user.basicinfo',[   
            'userId' => auth()->id(),
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        Info::newInfo($request);
        return view('user.aboutpage')->with('message','Information added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view('user.editbasicinfo',[
            $userId = Auth::id(),
            // dd($userId)
            'info' => Info::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Info ::updateInfo($request, $id);
        return redirect('/info')->with('message','Info Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
