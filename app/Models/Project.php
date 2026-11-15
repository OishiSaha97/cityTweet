<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['based_on', 'proposal_copy', 'proposal_book', 'proposal_presentation'];

    public static function newProject($request)
    {
        $project = new Project();
        $files = [
            'proposal_copy',
            'proposal_book',
            'proposal_presentation',
        ];

        foreach ($files as $fileField) {
            if ($request->hasFile($fileField)) {
                $file = $request->file($fileField);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $directory = 'uploads/projects_file/';
                $file->move($directory,$fileName);
                // $file->storeAs('projects', $fileName, 'public');

                // Save file information to database
                $project->$fileField = $fileName;
            }
        }
        $project->based_on = $request->based_on;
        $project->save();
        return $project;
    }

    // public static function updateProject($request, $project)
    // {
    //     $project = Project::find($project->id);

    //     $files = [
    //         'proposal_copy',
    //         'proposal_book',
    //         'proposal_presentation',
    //     ];

    //     foreach ($files as $fileField) {
    //         if ($request->file('file')){
    //             if (file_exists($project->file)){
    //                 unlink($project->file);
    //             }
    //             $project->file = $request;
    //         }
    //     }
        
    //         $project->based_on = $request->based_on;
    //         $project->save();
    // }

    public static function updateProject($request, $project)
    {
        // Assuming $project is already an instance of the Project model
    
        // Update based_on if it's provided in the request
        if ($request->has('based_on')) {
            $project->based_on = $request->input('based_on');
        }
    
        // Update proposal_copy if a new file is uploaded
        if ($request->hasFile('proposal_copy')) {
            if ($project->proposal_copy && file_exists(public_path('uploads/projects_file/' . $project->proposal_copy))) {
                unlink(public_path('uploads/projects_file/' . $project->proposal_copy));
            }
            
            $newFile = $request->file('proposal_copy');
            $fileName = time() . '_' . $newFile->getClientOriginalName();
            $directory = 'uploads/projects_file/';
            $newFile->move($directory, $fileName);
    
            $project->proposal_copy = $fileName;
        }
        
    
        // Update proposal_book if a new file is uploaded
        if ($request->hasFile('proposal_book')) {
            if ($project->proposal_book && file_exists(public_path('uploads/projects_file/' . $project->proposal_book))) {
                unlink(public_path('uploads/projects_file/' . $project->proposal_book));
            }
            
            $newFile = $request->file('proposal_book');
            $fileName = time() . '_' . $newFile->getClientOriginalName();
            $directory = 'uploads/projects_file/';
            $newFile->move($directory, $fileName);
    
            $project->proposal_book = $fileName;
        }
    
        // Update proposal_presentation if a new file is uploaded
        if ($request->hasFile('proposal_presentation')) {
            if ($project->proposal_presentation && file_exists(public_path('uploads/projects_file/' . $project->proposal_presentation))) {
                unlink(public_path('uploads/projects_file/' . $project->proposal_presentation));
            }
            
            $newFile = $request->file('proposal_presentation');
            $fileName = time() . '_' . $newFile->getClientOriginalName();
            $directory = 'uploads/projects_file/';
            $newFile->move($directory, $fileName);
    
            $project->proposal_presentation = $fileName;
        }
        
        
    
        // Save the updated project
        $project->save();
    }

}

   
