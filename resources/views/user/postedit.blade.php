@extends('master')


@section('content')
    

<div class="col-lg-9">
    <div class="central-meta">
        <div class="editing-info">
            <h5 class="f-title"><i class="ti-info-alt"></i> Edit Post</h5>

            <form class="needs-validation" method="POST" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                    {{-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <label for="validationCustom13"></label>
                        <input type="text" class="form-control" value="{{$brand->name}}" name="name" id="validationCustom13" required>
                        
                    </div> --}}
                    <div class="form-row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                            <label for="validationCustom13">Description </label>
                            <textarea type="text" class="form-control" name="detail" placeholder="Brand Description" cols="30" rows="15" required>{{$post->detail}}</textarea>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                            <label for="validationCustom13">Profile Image</label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="validationCustom13">
                            <img src="{{asset($post->image)}}" alt="" srcset="" height="300px" width="300px">
                            
                        </div>
                    </div>
                </div>
                   
                <button class="btn btn-primary" type="submit">Save</button>
            </form>





          
        </div>
    </div>	
</div> 



@endsection