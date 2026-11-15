<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Models\Friend;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    

    public function home()
    {
        if(!auth()->user()->info()->exists()){
            return to_route("info.create");
        }
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        $posts = Post::where('user_id', Auth::user()->id)->get();
        $posts = Post::OrderBy('id','desc')->get();
        //dd($infos);
         return view('user.home',compact('infos', 'posts'));
    }

    public function friendPage()
    {
        $my_friends = auth()->user()->friends;
        return view('user.friendpage',[
            'friends' => $my_friends
        ]);  
    }

    public function groupPage()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        //dd($infos);
         return view('user.grouppage',compact('infos'));
    }

    public function aboutPage()
    {
        if(!auth()->user()->info()->exists()){
            return to_route("info.create");
        }

        $infos = Info::where('user_id', Auth::user()->id)->first();
        $posts = Post::where('user_id', Auth::user()->id)->get();
        $posts = Post::OrderBy('id','desc')->get();
        //dd($posts);
        return view('user.aboutpage',compact('infos', 'posts'));
    }

    public function page()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        $pages = Page::where('user_id', Auth::user()->id)->get();
        //dd($infos);
        // $pages = Page::all();
        return view('user.page',compact('infos', 'pages'));
    }

    

    public function bloodPage()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        $infos_blood = Info::all();
        //dd($infos);
         return view('user.bloodgrouplist',compact('infos','infos_blood'));
    }

    // public function createPage()
    // {
    //     $infos =  Info::where('user_id', Auth::user()->id)->first();
    //     //dd($infos);
    //      return view('user.createpage',compact('infos'));
    // }

    public function semesterlist()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        //dd($infos);
         return view('user.semesterlist',compact('infos'));
    }

    public function projectlist()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        $infos_project = Info::all();
        //dd($infos);
         return view('user.projectlist',compact('infos','infos_project'));
    }

    public function addproject()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        //dd($infos);
         return view('user.addproject',compact('infos'));
    }

    public function projectdetails()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        //dd($infos);
         return view('user.projectdetails',compact('infos'));
    }

    public function firstsemedetails()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        //dd($infos);
         return view('user.firstsemedetails',compact('infos'));
         
    }

    public function projectDemo()
    {
        $infos =  Info::where('user_id', Auth::user()->id)->first();
        $projects = Project::all();
         return view('user.projectdemo',compact('infos','projects'),['content-type'=>'application/pdf']);
    }


}
