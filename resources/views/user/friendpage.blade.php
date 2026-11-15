@extends('master')

@section('title')
    Friends Page
@endsection

@section('content')
    
    {{-- <div>
        @foreach ($friends as $item)
        <div>
            {{$item->secondUser?->name}}
        </div>
        
        @endforeach
    </div> --}}

    <div class="col-lg-8">
        <div class="central-meta">
                <div class="card">
                    <h2 class="card-header">
                    My Friends
                    </h2>
                    <div class="card-body">
                        <ul class="nearby-contct">
                            @foreach ($friends as $item)
                                <li>
                                    <div class="nearly-pepls">
                                        <figure>
                                            <a href="time-line.html" title=""><img
                                                    src="{{ asset('assets/user/images/resources/friend-avatar9.jpg') }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <div class="pepl-info">
                                            <h4><a href="#" title="">{{ $item->secondUser?->name }}</a></h4>
                                            <span>{{$item->secondUser?->role_id}}</span> 
                                        </div>
                                    </div>
                                </li>  
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    </div>

@endsection
