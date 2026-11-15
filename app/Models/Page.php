<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


    private static $page, $image, $imageName, $directory, $imageUrl;


    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/pageprofile-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    
    public static function newPage($request)
    {
        self::$page = new Page();
        self::$page->user_id = $request->user_id;
        self::$page->name = $request->name;
        self::$page->topic_name = $request->topic_name;
        self::$page->about = $request->about;
        self::$page->image = self::imageUpload($request);
        self::$page->save();
    
    }
}
