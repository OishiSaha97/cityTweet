@extends('master')

@section('title')

Project Details

@endsection

@section('content')

<div class="col-lg-6">
    <div class="central-meta">
        
        <div class="about">

            <div class="container bootstrap snippets bootdey">
                <div class="panel-body inf-content">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <strong>Project Details Show</strong><br>
                            <div class="table">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>        
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                Project Name                                          
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            DCC CSE TEACHER STUDENT ALUMNI (CITY TWEET)
                                        </td>
                                    </tr>
                                            
                                    <tr>        
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                Batch                                               
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            20th
                                        </td>
                                    </tr>
            
                                    <tr>        
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                Group                                               
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            48
                                        </td>
                                    </tr>

                                    <tr>        
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                Based On                                               
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            Web Application
                                        </td>
                                    </tr>

            
                                    <tr>        
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                                Supervisior Name                                               
                                            </strong>
                                        </td>
                                        <td class="text-primary">   
                                            Anupam Halder
                                        </td>
                                    </tr>
                                   
                                                                       
                                </tbody>
                            </table>
                            
                            <div class="">
                                {{-- <iframe src="{{asset('/') }}/assets/user/file/projectbook.pdf" width="900" height="700">Project Book</iframe> --}}
                                 
                                    <a href="assets/user/files/projectbook.pdf" target="_blank" class="btn btn-info" target="_blank">Project Book</a> 
                                 

                                 <a href="assets/user/files/projectproposal.pdf" target="_blank" class="btn btn-info">Project Proposal</a>
                            </div>  
                            

                            </div>
                        </div>
                    </div>
                </div>
                </div>  




        </div>

    </div>

</div>


  





@endsection