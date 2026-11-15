@extends('master')

@section('title')

Page

@endsection

@section('content')

<!-- sidebar -->
                        <div class="col-lg-8">
                            <div class="central-meta">
                                <div class="groups">
                                    <span></i>Own Pages</span>
                                </div>
                                <ul class="liked-pages">
                                    @foreach ($pages as $page)
                                    <li>
                                       
                                        <figure>
                                        <div class="panel text-center">
                                            <div class="panel-body">
                                              <img alt="Avatar"  src="{{asset($page->image)}}">
                                              <h4 class="mar-no mt-4">{{$page->name}}</h4>
                                              {{-- <p>Project manager</p> --}}
                                            </div>
                                            <div class="pad-all">
                                              <p class="text-muted">
                                                {{$page->topic_name}}
                                              </p>
                                              <div class="pad-btm">
                                                {{-- <button class="btn btn-primary">Follow</button> --}}
                                                <button class="btn btn-success">View</button>
                                              </div>
                                            </div>
                                        </figure>
                                    </li>
                                    @endforeach
                                  
                                </ul>

                                <div class="groups">
                                    <span></i> Liked Pages</span>
                                </div>
                                <ul class="liked-pages">
                                   
                                        <li>
                                             <figure>
                                            <div class="panel text-center">
                                                <div class="panel-body">
                                                  <img alt="Avatar"  src="{{asset('/')}}/assets/user/images/resources/data.jpg" style="height:200px">
                                                  <h4 class="mar-no mt-4">Web Design</h4>
                                                  {{-- <p>Project manager</p> --}}
                                                </div>
                                                <div class="pad-all">
                                                  <p class="text-muted">
                                                    Web Developer
                                                  </p>
                                                  <div class="pad-btm">
                                                    <button class="btn btn-primary">Follow</button>
                                                    <button class="btn btn-success">View</button>
                                                  </div>
                                                </div>
                                            </figure>
                                        </li>

                                        <li>
                                            <figure>
                                           <div class="panel text-center">
                                               <div class="panel-body">
                                                 <img alt="Avatar"  src="{{asset('/')}}/assets/user/images/resources/back-end-development.jpg" style="height:200px">
                                                 <h4 class="mar-no mt-4">Web Design</h4>
                                                 {{-- <p>Project manager</p> --}}
                                               </div>
                                               <div class="pad-all">
                                                 <p class="text-muted">
                                                   Web Developer
                                                 </p>
                                                 <div class="pad-btm">
                                                   <button class="btn btn-primary">Follow</button>
                                                   <button class="btn btn-success">View</button>
                                                 </div>
                                               </div>
                                           </figure>
                                       </li>

                                       <li>
                                        <figure>
                                          <div class="panel text-center">
                                            <div class="panel-body">
                                              <img alt="Avatar"  src="{{asset('/')}}/assets/user/images/resources/ui-ux.jpg" style="height:200px">
                                              <h4 class="mar-no mt-4">Web Design</h4>
                                              {{-- <p>Project manager</p> --}}
                                            </div>
                                            <div class="pad-all">
                                              <p class="text-muted">
                                                Web Developer
                                              </p>
                                              <div class="pad-btm">
                                                <button class="btn btn-primary">Follow</button>
                                                <button class="btn btn-success">View</button>
                                              </div>
                                            </div>
                                          </div>
                                        </figure>
                                      </li>

                                   <li>
                                    <figure>
                                      <div class="panel text-center">
                                          <div class="panel-body">
                                            <img alt="Avatar"  src="{{asset('/')}}/assets/user/images/resources/network-system.jpg" style="height:200px">
                                            <h4 class="mar-no mt-4">Web Design</h4>
                                            {{-- <p>Project manager</p> --}}
                                          </div>
                                          <div class="pad-all">
                                            <p class="text-muted">
                                              Web Developer
                                            </p>
                                            <div class="pad-btm">
                                              <button class="btn btn-primary">Follow</button>
                                              <button class="btn btn-success">View</button>
                                            </div>
                                          </div>
                                      </div>
                                   </figure>
                               </li>


                               <li>
                                <figure>
                               <div class="panel text-center">
                                   <div class="panel-body">
                                     <img alt="Avatar"  src="{{asset('/')}}/assets/user/images/resources/voip-technology.jpg" style="height:200px">
                                     <h4 class="mar-no mt-4">Web Design</h4>
                                     {{-- <p>Project manager</p> --}}
                                   </div>
                                   <div class="pad-all">
                                     <p class="text-muted">
                                       Web Developer
                                     </p>
                                     <div class="pad-btm">
                                       <button class="btn btn-primary">Follow</button>
                                       <button class="btn btn-success">View</button>
                                     </div>
                                   </div>
                               </figure>
                           </li>

                           <li>
                            <figure>
                           <div class="panel text-center">
                               <div class="panel-body">
                                 <img alt="Avatar"  src="{{asset('/')}}/assets/user/images/resources/Flutter.jpg" style="height:200px">
                                 <h4 class="mar-no mt-4">Web Design</h4>
                                 {{-- <p>Project manager</p> --}}
                               </div>
                               <div class="pad-all">
                                 <p class="text-muted">
                                   Web Developer
                                 </p>
                                 <div class="pad-btm">
                                   <button class="btn btn-primary">Follow</button>
                                   <button class="btn btn-success">View</button>
                                 </div>
                               </div>
                           </figure>
                       </li>
                              

                                </ul>
                               
                            </div><!-- photos -->
                        </div><!-- centerl meta -->
                        



@endsection