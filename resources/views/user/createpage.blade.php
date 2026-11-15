@extends('master')

@section('title')

Create Page

@endsection

@section('content')

    

<div class="col-lg-6">
    <div class="central-meta">
        <div class="editing-info">
            <h5 class="f-title"><i class="ti-info-alt"></i> Create New Page</h5>

            <form action="{{route('createpage.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">	
                   
                    <input type="hidden" id="input" required="required" name="user_id" value="{{Auth::user()->id}}"/>
                    
                    {{-- <input type="hidden" id="input" required="required" name="user_id" value="{{$user->id}}"/> --}}
                    
                   </div>
                <div class="form-group">	
                  <input type="text" id="input" required="required" name="name" id="name"/>
                  <label class="control-label" for="name">Name</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">	
                  <input type="text" required="required" name="topic_name" id="topic_name"/>
                  <label class="control-label" for="topic_name">Topic Name</label><i class="mtrl-select"></i>
                </div>
             
                <div class="form-group">	
                  <textarea rows="4" name="about" id="about" required="required"></textarea>
                  <label class="control-label" for="about">About</label><i class="mtrl-select"></i>
                </div>
                  
                <div class="form-group half">	
                    <br><br><input type="file" active="image/*" required="required" name="image" id="image"/>
                    <label class="control-label"  for="image">Profile Picture</label><i class="mtrl-select"></i>
                </div>

               

                 
                <div class="submit-btns">
                    <button type="button" class="mtr-btn"><span>Cancel</span></button>
                    <button type="submit" class="mtr-btn"><span>Save</span></button>
                </div>
            </form>





            <form method="post">
                
                <h5 class="f-title ext-margin"><i class="fa fa-sliders"></i> More Settings</h5>
                <div class="page-viewers">
                    <div class="form-group half">	
                      <select>
                        <option value="country">Who can friend you?</option>
                          <option value="every">Every one</option>
                          <option value="no-one">No one</option>
                      </select>
                    </div>
                    <div class="form-group half">	
                      <select>
                        <option value="country">Who can view your posts?</option>
                          <option value="every">Every one</option>
                          <option value="no-one">Friends only</option>
                      </select>
                    </div>
                </div>
                <div class="onoff-options">
                
                
                    <div class="setting-row">
                        <span>Sub users</span>
                        <p>Enable this if you want people to follow you</p>
                        <input type="checkbox" id="switch01" /> 
                        <label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Enable follow me</span>
                        <p>Enable this if you want people to follow you</p>
                        <input type="checkbox" id="switch02" /> 
                        <label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Send me notifications</span>
                        <p>Send me notification emails my friends like, share or message me</p>
                        <input type="checkbox" id="switch03" /> 
                        <label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Text messages</span>
                        <p>Send me messages to my cell phone</p>
                        <input type="checkbox" id="switch04" /> 
                        <label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Enable tagging</span>
                        <p>Enable my friends to tag me on their posts</p>
                        <input type="checkbox" id="switch05" /> 
                        <label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Enable sound Notification</span>
                        <p>You'll hear notification sound when someone sends you a private message</p>
                        <input type="checkbox" id="switch06" checked=""/> 
                        <label for="switch06" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                
            </div>
                {{-- <div class="submit-btns">
                    <button type="button" class="mtr-btn"><span>Cancel</span></button>
                    <button type="button" class="mtr-btn"><span>Save</span></button>
                </div> --}}
            </form>
        </div>
    </div>	
</div> 



 {{-- <div class="col-lg-6">
    <div class="central-meta">
        <div class="editing-info">
           
            <form method="post">
                
                <h5 class="f-title ext-margin"><i class="fa fa-sliders"></i> More Settings</h5>
                <div class="page-viewers">
                    <div class="form-group half">	
                      <select>
                        <option value="country">Who can friend you?</option>
                          <option value="every">Every one</option>
                          <option value="no-one">No one</option>
                      </select>
                    </div>
                    <div class="form-group half">	
                      <select>
                        <option value="country">Who can view your posts?</option>
                          <option value="every">Every one</option>
                          <option value="no-one">Friends only</option>
                      </select>
                    </div>
                </div>
                <div class="onoff-options">
                
                
                    <div class="setting-row">
                        <span>Sub users</span>
                        <p>Enable this if you want people to follow you</p>
                        <input type="checkbox" id="switch01" /> 
                        <label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Enable follow me</span>
                        <p>Enable this if you want people to follow you</p>
                        <input type="checkbox" id="switch02" /> 
                        <label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Send me notifications</span>
                        <p>Send me notification emails my friends like, share or message me</p>
                        <input type="checkbox" id="switch03" /> 
                        <label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Text messages</span>
                        <p>Send me messages to my cell phone</p>
                        <input type="checkbox" id="switch04" /> 
                        <label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Enable tagging</span>
                        <p>Enable my friends to tag me on their posts</p>
                        <input type="checkbox" id="switch05" /> 
                        <label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Enable sound Notification</span>
                        <p>You'll hear notification sound when someone sends you a private message</p>
                        <input type="checkbox" id="switch06" checked=""/> 
                        <label for="switch06" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                
            </div>
                <div class="submit-btns">
                    <button type="button" class="mtr-btn"><span>Cancel</span></button>
                    <button type="button" class="mtr-btn"><span>Save</span></button>
                </div>
            </form>
        </div>
    </div>	
</div>  --}}




                        






@endsection