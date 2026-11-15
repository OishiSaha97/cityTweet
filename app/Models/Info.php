<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Info extends Model
{
    use HasFactory;

    private static $info, $image, $imageName, $directory, $imageUrl;


    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/profile-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    
    public static function newInfo($request)
    {
        self::$info = new Info();
        self::$info->user_id = $request->user_id;
        self::$info->bio = $request->bio;
        self::$info->school_name = $request->school_name;
        self::$info->college_name = $request->college_name;
        self::$info->university_name = $request->university_name;
        self::$info->master_phd = $request->master_phd;
        self::$info->Interested_field = $request->interested_field;
        self::$info->blood_group = $request->blood_group;
        self::$info->work_field = $request->work_field;
        self::$info->position = $request->position;
        self::$info->joining_time = $request->joining_time;
        self::$info->course = $request->course;
        self::$info->project =$request->project;
        self::$info->thesis = $request->thesis;
        self::$info->bod = $request->bod;
        self::$info->image = self::imageUpload($request);
        self::$info->save();

        
    
    }


    public static function updateInfo($request, $id)
    {
        self::$info = Info::find($id);
        self::$info->user_id = $request->userId;
        self::$info->bio = $request->bio;
        self::$info->school_name = $request->school_name;
        self::$info->college_name = $request->college_name;
        self::$info->university_name = $request->university_name;
        self::$info->master_phd = $request->master_phd;
        self::$info->Interested_field = $request->interested_field;
        self::$info->blood_group = $request->blood_group;
        self::$info->work_field = $request->work_field;
        self::$info->position = $request->position;
        self::$info->joining_time = $request->joining_time;
        self::$info->course = $request->course;
        self::$info->project =$request->project;
        self::$info->thesis = $request->thesis;
        self::$info->bod = $request->bod;
        if($request->file('image')){
            if(file_exists(self::$info->image)){
                unlink(self::$info->image);
            }
            self::$info->image = self::imageUpload($request);
        }
        self::$info->save();
    
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    

}
