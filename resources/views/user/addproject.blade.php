@extends('master')

@section('title')

Add Own Project Details

@endsection

@section('content')

<div class="col-lg-6">
    <div class="central-meta">
        <div class="editing-info">
            <h5 class="f-title"><i class="ti-info-alt"></i> Add Own Project Details </h5>

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="form-group">	
                   
                    {{-- <input type="hidden" id="input" required="required" name="user_id" value="{{Auth::user()->id}}"/> --}}
                    
                    {{-- <input type="hidden" id="input" required="required" name="user_id" value="{{$user->id}}"/> --}}
                    
                   {{-- </div> --}} 
                <div class="form-group">	
                  <input type="text" id="input" required="required" name="name" id="name"/>
                  <label class="control-label" for="name">Project Name</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">	
                    <input type="text" id="input" required="required" name="name" id="name"/>
                    <label class="control-label" for="name">Batch</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">	
                    <input type="text" id="input" required="required" name="name" id="name"/>
                    <label class="control-label" for="name">Group</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">	
                  <input type="text" required="required" name="topic_name" id="topic_name"/>
                  <label class="control-label" for="topic_name">Based On</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">	
                    <input type="text" required="required" name="topic_name" id="topic_name"/>
                    <label class="control-label" for="topic_name">Supervisor Name</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">
                    <label for="formFile" class="form-label">Proposal Copy</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="form-group">
                    <label for="formFile" class="form-label">Book</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                  
               

               

                 
                <div class="submit-btns">
                    <button type="button" class="mtr-btn"><span>Cancel</span></button>
                    <button type="submit" class="mtr-btn"><span>Save</span></button>
                </div>
            </form>





           
        </div>
    </div>	
</div> 




@endsection