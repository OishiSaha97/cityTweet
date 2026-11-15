@extends('master')

@section('title')

Project List

@endsection


@section('content')

<div class="col-lg-9">
    <div class="central-meta">
        <div class="groups ">
            <span>Proeject List</span>
            {{-- <a href="{{route('addproject')}}" class="btn btn-info ml-5" >
                Add Own Academic Project Info  
            </a> --}}
        </div>
        <table  class="table table-striped table-hover mt-4" id="blood-table">
            <thead>
                <tr>
                    <th col-index="3">Name</th>
                   <th col-index="1">As a</th> 
                   <th col-index="3">Project Name</th>
               </tr>
            </thead>
            <tbody>
                @foreach ($infos_project as $item)
                <tr>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->user->role_id}}</td>
                    <td>{{$item->project}}</td>
                </tr>
                @endforeach
               

                {{-- <tr>
                    <td>ERP for Ready Made Garments (RMG) Industry</td>
                    <td>Batch 20</td>
                    <td>Group 38</td>
                    <th>
                        <a href="" class="btn btn-info">
                            Edit
                        </a>
                        <a href="{{route('projectdetails')}}" class="btn btn-info">
                            Details
                        </a>
                    </th>
                  </tr> --}}

                
               


            </tbody>
          </table>
    </div><!-- photos -->
</div>


@endsection