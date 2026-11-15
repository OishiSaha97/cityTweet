<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    use HasFactory;

    // public array $casts=[
    //     "accepted_at"=>"timestamp"
    // ];

    // public array $appends=[
    //     "is_accepted"
    // ];

    public function isAccepted():Attribute{
        return Attribute::get(fn()=>!is_null($this->accepted_at));
    }

    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }

    public function receiver(){
        return $this->belongsTo(User::class,'receiver_id');
    }
}
