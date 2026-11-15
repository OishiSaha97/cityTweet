@extends('admin.master')

@section('title')
   Project Add   
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Project Add</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project Add</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Project</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{session('message')}}</p>
                            <form class="needs-validation" method="POST" action="{{route('project.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Based On</label>
                                        <input type="text" class="form-control" name="based_on" id="validationCustom13" >
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Proposal Copy</label>
                                        <input type="file"  class="form-control" name="proposal_copy" id="validationCustom13" >
                                        <span class="text-danger">{{$errors->has('proposal_copy') ? $errors->first('proposal_copy') : ''}}</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Proposal Book</label>
                                        <input type="file"  class="form-control" name="proposal_book" id="validationCustom13" >
                                        <span class="text-danger">{{$errors->has('proposal_book') ? $errors->first('proposal_book') : ''}}</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Proposal Presentation</label>
                                        <input type="file"  class="form-control" name="proposal_presentation" id="validationCustom13" >
                                        <span class="text-danger">{{$errors->has('proposal_presentation') ? $errors->first('proposal_presentation') : ''}}</span>
                                    </div>
                                </div>   
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection