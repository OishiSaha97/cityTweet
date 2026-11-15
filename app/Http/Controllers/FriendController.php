<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function addFriend($id)
    {
        Friend::where('id',$id)->update([
            'is_friend' => 1
        ]);
        return redirect()->back();
    }

    public function unFriend($id)
    {
        Friend::where('id',$id)->update([
            'is_friend' => 0
        ]);
        return redirect()->back();
    }
}
