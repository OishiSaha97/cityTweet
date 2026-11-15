<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>@yield('title')</title>
   @include('user.include.style')

</head>

<body>


    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
            </span>
                <span class="mh-text">
                <a href="{{route('home')}}" title=""><b>CityTweet</b></a>
            </span>
                <span class="mh-btns-right">
                <a class="fa fa-sliders" href="#shoppingbag"></a>
            </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><a href="{{route('home')}}" title="">Home</a></li>
                    <li><a href="{{route('info.index')}}" title="">about</a></li>
                    <li><a href="{{route('friendpage')}}" title="">friends</a></li>
                    <li><a href="{{route('grouppage')}}" title="">groups</a></li>
                    <li><a href="{{route('page')}}" title="">pages</a></li>
                    <li><a href="{{route('friend-requests.index')}}">New Friends</a></li>
                </ul>
            </nav>
           
        </div>
        <!-- responsive header -->
    
        <div class="topbar stick">
            <div class="logo">
                <a title="" href="{{route('home')}}" class="text-center"><b>CityTweet</b></a>
            </div>
    
            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <a href="{{route('home')}}" title="">Home</a>
                    </li>
                    <li><a href="{{route('info.index')}}" title="">about</a></li>
                    <li><a href="{{route('page')}}" title="">pages</a></li>
                    <li><a href="{{route('friendpage')}}" title="">friends</a></li>
                    <li><a href="{{route('friend-requests.index')}}">Suggested Friends</a></li>
                    <li><a href="{{route('friend-requests.received-requests')}}">Friend Requests</a></li>
                </ul>
                
                <ul class="setting-area">
                    <li>
                        <a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
                        <div class="searched">
                            <form method="post" class="form-search">
                                <input type="text" placeholder="Search Friend">
                                <button data-ripple><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </li>
                   
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{asset('/')}}/assets/user/images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{asset('/')}}/assets/user/images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{asset('/')}}/assets/user/images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{asset('/')}}/assets/user/images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{asset('/')}}/assets/user/images/resources/thumb-4.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{asset('/')}}/assets/user/images/resources/thumb-5.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="messages.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}} {{Auth::user()->lname}}</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="" id="logout">{{Auth::user()->role_id}}</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span>Log Out</span>
                                    
                                  </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                {{-- <a class="dropdown-item" href="{{route('logout')}}" id="logout">Logout</a> --}}
                            </li>
                    </ul>
                </li>

                
                </ul>
            </div>
        </div>
        <!-- topbar -->

        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Advanced Settings</h4>
                                            <ul class="naves">
                                                {{-- <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="newsfeed.html" title="">create Groups</a>
                                                </li> --}}

                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="{{route('createpage.create')}}" title="">create Pages</a>
                                                </li>
                                                
                                                {{-- <li>
                                                    <i class="ti-mouse-alt"></i>
                                                    <a href="{{route('info.edit',$infos->id)}}" title="">Edit Info</a>
                                                </li>  --}}
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="{{route('bloodpage')}}" title="">Blood Group List</a>
                                                </li> 
                                                
                                               
                                                <li>
                                                    <i class="ti-image"></i>
                                                    <a href="{{route('info.create')}}" title="">Add profile basics</a>
                                                </li>
                                                
                                                {{-- <li>
                                                    <i class="ti-comments-smiley"></i>
                                                    <a href="messages.html" title="">Messages</a>
                                                </li> --}}
                                                {{-- <li>
                                                    <i class="ti-bell"></i>
                                                    <a href="notifications.html" title="">Notifications</a>
                                                </li> --}}
                                                
                                            </ul>
                                        </div>

                                        <div class="widget">
                                            <h4 class="widget-title">Eductaional Part</h4>
                                            <ul class="naves">
                                                

                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="{{route('createpage.create')}}" title="">Academic Notice</a>
                                                </li>
                                                
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="{{route('semesterlist')}}" title="">Semester List</a>
                                                </li> 
                                                
                                               
                                                <li>
                                                    <i class="ti-image"></i>
                                                    <a href="{{route('project.demo')}}" title="">Project Demo</a>
                                                </li>
                                                
                                                <li>
                                                    <i class="ti-comments-smiley"></i>
                                                    <a href="{{route('projectlist')}}" title="">Project List</a>
                                                </li>
                                                
                                                
                                            </ul>
                                        </div>
                                        <!-- Shortcuts -->
                                        
                                        <!-- recent activites -->
                                        
                                        <!-- who's following -->
                                    </aside>
                                </div>





















