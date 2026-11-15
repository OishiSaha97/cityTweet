@extends('master')

@section('title')

About Page

@endsection

@section('content')

    

{{-- 
<section>
    <div class="feature-photo">
        {{-- <figure><img src="{{asset('/')}}/assets/user/images/resources/timeline-1.jpg" alt=""></figure>
        
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
            <input type="file"/>
            </label>
        </form> --}}
        {{-- <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                   
                </div>
                <div class="col-lg-10 col-sm-9">
                    
                </div>
            </div>
        </div>
    </div>
</section><!-- top area --> --}} 
{{--     
<!-- sidebar --> --}}
                        <div class="col-lg-8">
                            <div class="central-meta">
                                
                                <div class="about">
                                    <div class="container bootstrap snippets bootdey">
                                        <div class="panel-body inf-content">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{asset($infos->image)}}" data-original-title="Usuario"> 
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <strong><h3>Information</h3></strong><br>
                                                    <div class="table-responsive">
                                                    <table class="table table-user-information">
                                                        <tbody>
                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                                        Bio                                               
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->bio}}   
                                                                </td>
                                                            </tr>
                                                            <tr>    
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-user  text-primary"></span>    
                                                                        School Name                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->school_name}}    
                                                                </td>
                                                            </tr>
                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                                                        College Name                                               
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->college_name}}  
                                                                </td>
                                                            </tr>
                                        
                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                                                        University Name                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->university_name}} 
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                                                        Master Or PHD                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->master_phd}}
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                                                        Interesting Field                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->interested_field}}
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                                                        Blood Group                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->blood_group}} 
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                                                        Working Field                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->work_field}} 
                                                                </td>
                                                            </tr>
                                        
                                        
                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                                        Position                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->position}}
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                                        Joining Time                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->joining_time}}
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                                        Course                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->course}}
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                                        Project                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->project}}
                                                                </td>
                                                            </tr>

                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                                                        Thesis                                                
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">
                                                                    {{$infos->thesis}}
                                                                </td>
                                                            </tr>


                                                            <tr>        
                                                                <td>
                                                                    <strong>
                                                                        <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                                                        Birth Of Date                                               
                                                                    </strong>
                                                                </td>
                                                                <td class="text-primary">   
                                                                    {{$infos->bod}}
                                                                </td>
                                                            </tr>
                                                           
                                                                                               
                                                        </tbody>
                                                    </table>

                                                    <button class="btn btn-info m-3"><a href="{{route('info.edit',$infos->id)}}">Update</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>                                        


                                    
                                        <div class="central-meta item ">
                                            <div class="user-post">
                                                @foreach ($posts as $post)

                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{asset($infos->image)}}" alt="">
                                                    </figure>
                                                    {{-- <div class="friend-name">
                                                        <ins><a href="" title="">{{Auth::user()->name}}</a></ins>
                                                        <p>{{$post->created_at}}</p>
                                                        
                                                    </div> --}}

                                                    <div class="friend-name">
                                                        <ins><a href="" title="">{{Auth::user()->name}}</a></ins>
                                                        <p>{{$post->created_at}}</p> 
                                                    </div>
                                                    <div class="form-row ">
                                                        <div class="text-right">
                                                            <button href="{{route('post.edit',$post->id)}}" type="submit" class="btn btn-info" >
                                                                <i class="ti-pencil"></i>
                                                            </button>
                                                        </div>
                                                        <div class="text-right">    
                                                            <form action="{{route('post.destroy',$post->id)}}" method="Post">
                                                                @csrf
                                                                @method('Delete')
                                                                <button type="submit" class="btn btn-info"  onclick="return confirm('Are you sure to delete !!')">
                                                                <i class="ti-trash"></i>
                                                            </button>
                                                            </form>
                                                        </div> 
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="description">
    
                                                            <p>
                                                                {{$post->detail}}
                                                            </p>
                                                        </div>

                                                        <img src="{{asset($post->image)}}" alt="">
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="ti-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                <i class="ti-comments"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div> 
                                                        
                                                    </div>
                                                </div>
                                                

                                                @endforeach
                                                
                                            </div>
                                        </div>
                                 
                                </div>
                            </div>	
                        </div>

                        
                        
                        
                        <!-- centerl meta -->
                        {{-- <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                        <h4 class="widget-title">Your page</h4>	
                                        <div class="your-page">
                                            <figure>
                                                <a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a class="underline" title="" href="#">My page</a>
                                                <span><i class="ti-comment"></i>Messages <em>9</em></span>
                                                <span><i class="ti-bell"></i>Notifications <em>2</em></span>
                                            </div>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
                                                     <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                  <div id="link1" class="tab-pane active fade show">
                                                    <span><i class="ti-heart"></i>884</span>
                                                      <a title="weekly-likes" href="#">35 new likes this week</a>
                                                      <div class="users-thumb-list">
                                                          <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                            <img alt="" src="images/resources/userlist-1.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                            <img alt="" src="images/resources/userlist-2.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                            <img alt="" src="images/resources/userlist-3.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                            <img alt="" src="images/resources/userlist-4.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                            <img alt="" src="images/resources/userlist-5.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                            <img alt="" src="images/resources/userlist-6.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                            <img alt="" src="images/resources/userlist-7.jpg">  
                                                        </a>  
                                                      </div>
                                                  </div>
                                                  <div id="link2" class="tab-pane fade">
                                                      <span><i class="ti-eye"></i>445</span>
                                                      <a title="weekly-likes" href="#">440 new views this week</a>
                                                      <div class="users-thumb-list">
                                                          <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                            <img alt="" src="images/resources/userlist-1.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                            <img alt="" src="images/resources/userlist-2.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                            <img alt="" src="images/resources/userlist-3.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                            <img alt="" src="images/resources/userlist-4.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                            <img alt="" src="images/resources/userlist-5.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                            <img alt="" src="images/resources/userlist-6.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                            <img alt="" src="images/resources/userlist-7.jpg">  
                                                        </a>  
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Who's follownig</h4>
                                    <ul class="followers">
                                        <li>
                                            <figure><img src="{{asset('/')}}/assets/user/images/resources/friend-avatar2.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="{{asset('/')}}/assets/user/images/resources/friend-avatar4.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="{{asset('/')}}/assets/user/images/resources/friend-avatar6.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="{{asset('/')}}/assets/user/images/resources/friend-avatar8.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="{{asset('/')}}/assets/user/images/resources/friend-avatar3.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Allen</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- who's following -->
                            </aside>
                        </div><!-- sidebar -->
                    </div>	
                </div>
            </div>
        </div>
    </div>	
</section> --}}









@endsection