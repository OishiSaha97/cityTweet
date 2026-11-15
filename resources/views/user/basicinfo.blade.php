@extends('master')

@section('title')

Basic Info

@endsection

@section('content')


    

<!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-info-alt"></i> Add Basic Information</h5>

                                    <form action="{{route('info.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">	
                                           
                                            <input type="hidden" id="input" required="required" name="user_id" value="{{Auth::user()->id}}"/>
                                            
                                            {{-- <input type="hidden" id="input" required="required" name="user_id" value="{{$user->id}}"/> --}}
                                            
                                          </div>
                                        <div class="form-group">	
                                          <input type="text" id="input" required="required" name="bio" id="bio"/>
                                          <label class="control-label" for="bio">Bio</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                          <input type="text" required="required" name="school_name" id="school_name"/>
                                          <label class="control-label" for="school_name">School Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                          <input type="text" required="required" name="college_name" id="college_name"/>
                                          <label class="control-label" for="college_name">College Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                            <input type="text" required="required" name="university_name" id="university_name"/>
                                            <label class="control-label" for="university_name">University Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                            <input type="text" required="required" name="master_phd" id="master_phd"/>
                                            <label class="control-label" for="master_phd">Master or PHD</label><i class="mtrl-select"></i>
                                          </div>
                                        <div class="form-group">	
                                          <input type="text" required="required"name="interested_field" id="interested_field"/>
                                          <label class="control-label" for="interested_field">Interested Field</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                            <input type="text" required="required" name="work_field" id="work_field"/>
                                            <label class="control-label" for="work_field">Working Field</label><i class="mtrl-select"></i>
                                          </div>
                                          <div class="form-group">	
                                            <input type="text" required="required" name="blood_group" id="blood_group"/>
                                            <label class="control-label" for="blood">Blood Group</label><i class="mtrl-select"></i>
                                          </div>
                                          <div class="form-group">	
                                            <input type="text" required="required" name="position" id="position"/>
                                            <label class="control-label" for="position">Position</label><i class="mtrl-select"></i>
                                          </div>
                                          <div class="form-group">	
                                            <input type="text" required="required" name="joining_time" id="joining_time"/>
                                            <label class="control-label" for="joining_time">Working Experience Time</label><i class="mtrl-select"></i>
                                          </div>
                                          <div class="form-group">	
                                            <input type="text" required="required" name="course" id="course"/>
                                            <label class="control-label" for="course">Any Course Completed</label><i class="mtrl-select"></i>
                                          </div>
                                          <div class="form-group">	
                                            <input type="text" required="required" name="project" id="project"/>
                                            <label class="control-label" for="project">Project</label><i class="mtrl-select"></i>
                                          </div>
                                          <div class="form-group">	
                                            <input type="text" required="required" name="thesis" id="thesis"/>
                                            <label class="control-label" for="thesis">Thesis</label><i class="mtrl-select"></i>
                                          </div>
                                        <div class="dob">
                                            <div class="form-group">
                                            <input type="date" id="birthday" name="bod" id="bod">
                                            <label class="control-label" for="bod">Date of birth</label><i class="mtrl-select"></i>
                                            </div>
                                        </div>
                                        <div class="form-group half">	
                                            <br><br><input type="file" active="image/*"  required="required" name="image" id="image"/>
                                            <label class="control-label"  for="image">Profile Picture</label><i class="mtrl-select"></i>
                                          </div>

                                         
                                        <div class="submit-btns">
                                            <button type="cancel" class="mtr-btn"><span>Cancel</span></button>
                                            <button type="submit" class="mtr-btn"><span>Save</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>	
                        </div><!-- centerl meta -->
                      

@endsection