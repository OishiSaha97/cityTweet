<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Friend;
use Illuminate\Http\Request;
use App\Models\FriendRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class FriendRequestController extends Controller
{

    public function index(Request $request){
            $users = User::query()
                ->whereDoesntHave('friends')
                ->whereDoesntHave('friendRequests');

                // return $users->toRawSql();

        return view("user.friend_requests",[
            "title"=>"Send Friend Requests",
            "items"=>$users->paginate()
        ]);
    }


    public function friendRequestsReceived(Request $request){
        $friendRequests = FriendRequest::query()
            ->with(['sender','receiver'])
            ->whereNull('accepted_at')
            ->where('receiver_id','=',auth()->id())
            ->paginate();

        return view("user.received_friend_request",[
            "title"=>"Friend Requests Received",
            "type"=>"received",
            "items"=>$friendRequests
        ]);
    }

    public function friendRequestsSent(Request $request){
        $friendRequests = FriendRequest::query()
            ->whereNull('accepted_at')
            ->where('sender_id','=',auth()->id())
            ->paginate();

        return view("user.received_friend_requests",[
            "title"=>"Friend Requests Received",
            "type"=>"sent",
            "items"=>$friendRequests
        ]);
    }

    public function send(User $receiver){
        //check if already has a relationship
        $test = Friend::query()
            ->where(function(Builder $builder)use($receiver){
                $builder->where('first_user_id','=',auth()->id())
                ->where('second_user_id','=',$receiver->id);
            })
            ->orWhere(function(Builder $builder)use($receiver){
                $builder->where('first_user_id','=',$receiver->id)
                ->where('second_user_id','=',auth()->id());
            })
            ->exists();
        

        if(!$test){
            $fr = new FriendRequest();
            $fr->forceFill([
                'sender_id'=>auth()->id(),
                'receiver_id'=>$receiver->id
            ]);
            $fr->saveOrFail();
            return redirect()->back()->with("message","Successfully Requested");
        }

        return redirect()->back()->with("message","Unable to send Request");
    }

    public function accept(FriendRequest $friendRequest){
       
        if($friendRequest->is_accepted){
            return redirect()->back()->with("message","Already Accepted");
        }

        return DB::transaction(function() use($friendRequest){
            $friendRequest->accepted_at = now();
            $friendRequest->saveOrFail();

            $friend= new Friend();
            $friend->forceFill([
                "first_user_id"=>$friendRequest->sender_id,
                "second_user_id"=>$friendRequest->receiver_id,
                "accepted_at"=>now()
            ]);

            $friend->saveOrFail();

            return redirect()->back()->with("message","Successfully Accepted");
        });
    }
}
