<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $post, $image, $imageName, $directory, $imageUrl;


    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/post-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    
    public static function newPost($request)
    {
        self::$post = new Post();
        self::$post->user_id = $request->user_id;
        self::$post->detail = $request->detail;
        self::$post->image = self::imageUpload($request);
        self::$post->save();
    
    }

    public static function updatePost($request,$id)
    {
        self::$post = Post::find($id);
        self::$post->detail = $request->detail;
        if ($request->file('image')){
            if (file_exists(self::$post->image)){
                unlink(self::$post->image);
            }
            self::$post->image = self::imageUpload($request);
        } 
        
       
        self::$post->save();
    }

    public static function deletePost($id)
    {
        self::$post = Post::find($id);
        if(file_exists(self::$post->image)){
            unlink(self::$post->image);
        }
        
        self::$post->delete();
    }
}
