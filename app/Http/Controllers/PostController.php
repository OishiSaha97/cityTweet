<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.aboutpage',[
            $userId= Auth::id(),
            'infos' => Info::where('user_id', Auth::user()->id)->first(),
            'posts' => Post::where('user_id', Auth::user()->id)->get(),
            'posts' => Post::OrderBy('id','desc')->get()
            //'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.home',[
            
            'userId' => auth()->id(),
        
            //dd($userId)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Post::newPost($request);
           
        //dd($ruserId);
        return back()->with('message','Post added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $id;
        return view('user.postedit',[
            'post' => Post::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Post::updatePost($request,$id);
        return redirect('/post')->with('message','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $id)
    {
        Post::deletePost($id);
        return redirect('/post')->with('message','Post Deleted Successfully');
    }
}
