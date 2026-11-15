@extends('admin.master')

@section('title')
   Project Manage  
@endsection

@section('content')
 <!--app-content open-->
 <div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Project Manage</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"></a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Peoject Manage</h3>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <p class="text-success">{{session('message')}}</p>
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No.</th>
                                <th class="wd-15p border-bottom-0"> Based on</th>
                                <th class="wd-15p border-bottom-0"> Proposal Copy</th>
                                <th class="wd-15p border-bottom-0"> Proposal Book</th>
                                <th class="wd-15p border-bottom-0"> Proposal Presentation</th>
                                <th class="wd-15p border-bottom-0">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$project->based_on}}</td>
                                <td>{{$project->proposal_copy}}</td>
                                <td>{{$project->proposal_book}}</td>
                                <td>{{$project->proposal_presentation}}</td>
                                
                                <td class="d-flex">
                                    <a href="{{route('project.edit',$project->id)}}" class="btn btn-primary">
                                        <i class="fa fa-edit"> Edit </i>
                                    </a>
                                    &nbsp;&nbsp;
                                    <form action="" method="Post">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete !!')">
                                        <i class="fa fa-trash"> Delete </i>
                                    </button>

                                    </form>
                                    
                                </td>
                                
                            </tr>
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection


{{-- //{{route('project.edit',$brand->id)}}
{{route('project.destroy',$brand->id)}}
@method('Delete') 
{{route('project.destroy',$brand->id)}}--}}