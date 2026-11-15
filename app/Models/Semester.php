<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [ 'semester_name', 'name', 'file'];

    // public static function newSemester($request)
    // {
    //     $semester = new Semester();
    //     $files = [
    //         'filess',
    //     ];

    //     foreach ($files as $fileField) {
    //         if ($request->hasFile($fileField)) {
    //             $file = $request->file($fileField);
    //             $fileName = time() . '_' . $file->getClientOriginalName();
    //             $directory = 'uploads/semester_file/';
    //             $file->move($directory,$fileName);
    //             // $file->storeAs('projects', $fileName, 'public');

    //             // Save file information to database
    //             $semester->$fileField = $fileName;
    //         }
    //     }
    //     $semester->  $request->semester_name;
    //     $semester->  $request->name;
    //     $semester->save();
    //     return $semester;
    // }

    // public static function newSemester($request)
    // {
    //     $semester = new Semester();
    //     $semester->semester_name =  $request->semester_name;
    //     $fileNames = [];
    //     foreach($request->filess as $file){
    //         $fileName = time() . '.'.$file->getClientOriginalName();
    //         // $file->move(public_path('files'), $fileName);
    //         // $fileNames[] = 'files/'.$fileName;

    //         $directory = 'uploads/Semester_file/';
    //         $file->move($directory,$fileName);
    //         //$fileNames[] = $fileName;
    //         $fileNames[]->$file = $fileName;
    //     }

    //     $insertData = [];
    //     for($x = 0; $x < count($request->names); $x++){
    //         $insertData[] = [
    //             'name' => $request->names[$x],
    //             'file' => $fileNames[$x],
    //         ];
    //     }

    //     Semester::insert($insertData);

        
    //     $semester->save();
    //    // return $semester;

    // }

    public static function newSemester($request)
    {
        $semester = new Semester();
        
        
        $fileNames = []; // Create an array to store file names
        
        foreach ($request->filess as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $directory = 'uploads/Semester_file/';
            $file->move($directory, $fileName);
            $fileNames[] = $fileName; // Store the file name in the array
        }
        
        $semester->semester_name =  $request->semester_name;
       
        // Now create an array for inserting related records
        $insertData = [];
        
        for ($x = 0; $x < count($request->names); $x++) {
           
            $insertData[] = [
                // 'semester_id' => $semester->id, // Associate with the saved semester
                'semester_name' => $request->semester_name,
                'name' => $request->names[$x],
                'file' => $fileNames[$x],
            ];
        }
       

        
    
        // Use the related model to insert the records
        Semester::insert($insertData);

        //$semester->semester_name =  $request->semester_name;
        $semester->save(); // Save the semester to generate an ID
        return $semester;
    }
}
