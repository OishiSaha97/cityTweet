@extends('master')

@section('title')
    First Semester Details
@endsection

@section('content')
    <!-- sidebar -->
    <div class="col-lg-8">
        <div class="central-meta">
            <div class="career-page">
                <div class="carrer-title">
                    <h2> <span>Project Instructions & Demo </span></h2>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                    <div class="col-lg-6 col-sm-4">
                        <div class="open-position">
                            <h4><a href="{{asset('storage/uploads/projects_file/'.$project->based_on)}}" target="_blank" title="">Project Based On</a></h4>
                            <p>{{$project->based_on}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="open-position">
                            <h4><a href="{{asset('storage/uploads/projects_file/'.$project->proposal_copy)}}" title="">Project Proposal Demo</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="open-position">
                            <h4><a href="{{asset('storage/uploads/projects_file/'.$project->proposal_book)}}" title="">Project Book Demo</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="open-position">
                            <h4><a href="{{asset('storage/uploads/projects_file/'.$project->proposal_presentation)}}" title="">Project Silde Demo</a></h4>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>

            
        </div>
    </div><!-- centerl meta -->
@endsection
