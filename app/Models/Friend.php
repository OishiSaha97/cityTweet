<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Friend extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongTo(User::class);
    }
    
    public function info()
    {
        return $this->belongTo(Info::class);
    }

    public function firstUser(){
        return $this->belongsTo(User::class,'first_user_id');
    }

    public function secondUser(){
        return $this->belongsTo(User::class,'second_user_id');
    }
}
