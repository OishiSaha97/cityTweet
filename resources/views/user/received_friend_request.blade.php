@extends("master")

@section('content')

<div class="col-lg-8">
    <div class="central-meta">
        @if (session()->get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session()->get('message')}}!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <div class="card">
                <h2 class="card-header">
                Friend Requests
                </h2>
                <div class="card-body">
                    <ul class="nearby-contct">
                        @foreach ($items as $item)
                            <li>
                                <div class="nearly-pepls">
                                    <figure>
                                        <a href="time-line.html" title=""><img
                                                src="{{ asset('assets/user/images/resources/friend-avatar9.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <div class="pepl-info">
                                        <h4><a href="#" title="">{{$item->sender->name}}</a></h4>
                                        <span>{{$item->role_id}}</span> 
                                        {{-- <a class="btn btn-primary btn-sm add-butn" href="{{route('friend-requests.send',['receiver'=>$item->id])}}">
                                            Add Friend
                                        </a> --}}
                                        <a class="btn btn-primary btn-sm add-butn" href="{{route('friend-requests.accept',['friendRequest'=>$item->id])}}">
                                            Accept
                                        </a>
                                        {{-- <a href="#" title="" class="add-butn" data-ripple="">add friend</a> --}}
                                    </div>
                                </div>
                            </li>  
                        @endforeach
                    </ul>
                </div>
                <div>
                    {{$items->links()}}
                </div>
            </div>
    </div>
</div> 


{{-- <div>
    <ul>
        @foreach ($items as $item)
            <li>
                {{$item->sender->name}}
                <a class="btn btn-primary btn-sm" href="{{route('friend-requests.accept',['friendRequest'=>$item->id])}}">
                    Accept
                </a>
            </li>
        @endforeach
    </ul>

</div> --}}

@endsection