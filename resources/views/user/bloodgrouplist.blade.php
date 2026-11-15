@extends('master')

@section('title')

Blood Group 

@endsection

@section('content')



<div class="col-lg-8">
    <div class="central-meta">
        <div class="groups">
            <span><i class="fa fa-users"></i>Blood Group List</span>
        </div>
        <table  class="table table-striped" id="blood-table">
            <thead>
                <tr>
                    <th col-index="1">Name</th>
                    <th col-index="2">Blood Group
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </th>
                    <th col-index="3">Email Address</th>
                    <th col-index="4">Role_ID</th>
                    {{-- <th col-index="5">Last Donated Date</th> --}}
                </tr>
            </thead>
            <tbody>

                @foreach ($infos_blood as $item)
                <tr>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->blood_group}}</td>
                    <td>{{$item->user->email}}</td>
                    <td>{{$item->user->role_id}}
                </tr>
                @endforeach
                
                {{-- <tr>
                    <td>Jane Smith</td>
                    <td>O+</td>
                    <td>example2@gmail.com</td>
                    <td>9876543210</td>
                    <td>2023-07-10</td>
                </tr> --}}
                


            </tbody>
          </table>
    </div><!-- photos -->
</div><!-- centerl meta -->





@endsection
