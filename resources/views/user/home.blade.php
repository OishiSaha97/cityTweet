@extends('master')

@section('title')

Home

@endsection

@section('content')




{{-- <i class="fa-light fa-ellipsis"></i> --}}
                            <!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="new-postbox">
                                        <figure>
                                            <img src="{{asset($infos->image)}}" alt="">
                                        </figure>
                                      
                                        <div class="newpst-input">
                                            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">	
                                                    <input type="hidden" id="input" required="required" name="user_id" value="{{Auth::user()->id}}"/>
                                                </div>

                                                <div class="form-group">
                                                    
                                                    {{-- <input type="text" id="input" required="required" name="bio" id="bio"/>
                                                    <label class="control-label" for="bio">Bio</label><i class="mtrl-select"></i> --}}
                                                    <label class="text" for="detail"></label>
                                                    <textarea rows="2" name="detail" id="detail" required="required" placeholder="Write Something"></textarea>

                                                  </div>
                                                <div class="attachments">
                                                    <ul>
                                                        
                                                        <li>
                                                            <i class="ti-image"></i>
                                                            <label class="fileContainer" for="image">
                                                            <input type="file" active="image/*"  name="image" id="image" style="width: 40px">
                                                            </label>
                                                            {{-- <label class="file"  for="image">
                                                            <br><br><input type="file" active="image/*"  required="required" name="image" id="image"/>
                                                            </label> --}}
                                                        </li>
                                                        
                                                        <li>
                                                            <i class="ti-file"></i>
                                                            <label class="fileContainer">
                                                            <input type="file" name="file" id="file">
                                                        </label>

                                                        </li>
                                                        <li>
                                                            <button type="submit">Post</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- add post new box -->
                                <div class="loadMore">

                                    @foreach ($posts as $post)
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{asset($infos->image)}}" alt="">
                                                </figure>
                                                
                                                <div class="friend-name">
                                                    <ins><a href="" title="">{{Auth::user()->name}}</a></ins>
                                                    <p>{{$post->created_at}}</p> 
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
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('/')}}/assets/user/images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="{{asset('/')}}/assets/user/images/resources/blockchain.jpg" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                                                        <span>1 month ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="{{asset('/')}}/assets/user/images/resources/comet-3.jpg" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                                        <span>16 days ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('/')}}/assets/user/images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Donald Trump</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('/')}}/assets/user/images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless" title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/nearly1.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="time-line.html" title="">Sara Grey</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <iframe src="https://player.vimeo.com/video/15232052" height="315" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip" title="views">
                                                            <i class="fa fa-eye"></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                            <i class="fa fa-comments-o"></i>
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
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                                                            semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('/')}}/assets/user/images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('/')}}/assets/user/images/resources/comet-2.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('/')}}/assets/user/images/resources/comet-2.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless" title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Your page</h4>
                                        <div class="your-page">
                                            <figure>
                                                <a href="#" title=""><img src="{{asset('/')}}/assets/user/images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a href="#" title="" class="underline">My page</a>
                                                <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
                                                <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                                            </div>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
                                                    <li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active fade show " id="link1">
                                                        <span><i class="ti-heart"></i>884</span>
                                                        <a href="#" title="weekly-likes">35 new likes this week</a>
                                                        <div class="users-thumb-list">
                                                            <a href="#" title="Anderw" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-1.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="frank" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-2.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sara" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-3.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Amy" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-4.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Ema" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-5.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sophie" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-6.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Maria" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="link2">
                                                        <span><i class="ti-eye"></i>440</span>
                                                        <a href="#" title="weekly-likes">440 new views this week</a>
                                                        <div class="users-thumb-list">
                                                            <a href="#" title="Anderw" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-1.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="frank" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-2.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sara" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-3.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Amy" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-4.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Ema" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-5.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sophie" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-6.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Maria" data-toggle="tooltip">
                                                                <img src="{{asset('/')}}/assets/user/images/resources/userlist-7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- page like widget -->
                                    <div class="widget">
                                        <div class="banner medium-opacity bluesh">
                                            <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
                                            <div class="baner-top">
                                                <span><img alt="" src="images/book-icon.png"></span>
                                                <i class="fa fa-ellipsis-h"></i>
                                            </div>
                                            <div class="banermeta">
                                                <p>
                                                    create your own favourit page.
                                                </p>
                                                <span>like them all</span>
                                                <a data-ripple="" title="" href="#">start now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget friend-list stick-widget">
                                        <h4 class="widget-title">Friends</h4>
                                        <div id="searchDir"></div>
                                        <ul id="people-list" class="friendz-list">
                                            <li>
                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar.jpg" alt="">
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">bucky barnes</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d7c9ced4c5d2d3cfccc4c5d2e0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar2.jpg" alt="">
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Sarah Loren</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d6d5c6dad1c7f4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar3.jpg" alt="">
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">jason borne</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d777c6e72737f5d7a707c7471337e7270">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar4.jpg" alt="">
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Cameron diaz</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bed4dfcdd1d0dcfed9d3dfd7d290ddd1d3">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar5.jpg" alt="">
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">daniel warber</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="553f34263a3b37153238343c397b363a38">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar6.jpg" alt="">
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">andrew</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5933382a36373b193e34383035773a3634">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar7.jpg" alt="">
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">amy watson</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5933382a36373b193e34383035773a3634">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar5.jpg" alt="">
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">daniel warber</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbb1baa8b4b5b99bbcb6bab2b7f5b8b4b6">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{asset('/')}}/assets/user/images/resources/friend-avatar2.jpg" alt="">
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Sarah Loren</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2644475448435566414b474f4a0845494b">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="chat-box">
                                            <div class="chat-head">
                                                <span class="status f-online"></span>
                                                <h6>Bucky Barnes</h6>
                                                <div class="more">
                                                    <span><i class="ti-more-alt"></i></span>
                                                    <span class="close-mesage"><i class="ti-close"></i></span>
                                                </div>
                                            </div>
                                            <div class="chat-list">
                                                <ul>
                                                    <li class="me">
                                                        <div class="chat-thumb"><img src="{{asset('/')}}/assets/user/images/resources/chatlist1.jpg" alt=""></div>
                                                        <div class="notification-event">
                                                            <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                            <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                        </div>
                                                    </li>
                                                    <li class="you">
                                                        <div class="chat-thumb"><img src="{{asset('/')}}/assets/user/images/resources/chatlist2.jpg" alt=""></div>
                                                        <div class="notification-event">
                                                            <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                            <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                        </div>
                                                    </li>
                                                    <li class="me">
                                                        <div class="chat-thumb"><img src="{{asset('/')}}/assets/user/images/resources/chatlist1.jpg" alt=""></div>
                                                        <div class="notification-event">
                                                            <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                            <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <form class="text-box">
                                                    <textarea placeholder="Post enter to post..."></textarea>
                                                    <div class="add-smiles">
                                                        <span title="add icon" class="em em-expressionless"></span>
                                                    </div>
                                                    <div class="smiles-bunch">
                                                        <i class="em em---1"></i>
                                                        <i class="em em-smiley"></i>
                                                        <i class="em em-anguished"></i>
                                                        <i class="em em-laughing"></i>
                                                        <i class="em em-angry"></i>
                                                        <i class="em em-astonished"></i>
                                                        <i class="em em-blush"></i>
                                                        <i class="em em-disappointed"></i>
                                                        <i class="em em-worried"></i>
                                                        <i class="em em-kissing_heart"></i>
                                                        <i class="em em-rage"></i>
                                                        <i class="em em-stuck_out_tongue"></i>
                                                    </div>
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- friends list sidebar -->
                                </aside>
                            </div>
                            <!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection