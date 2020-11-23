@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-7 offset-lg-1" style="padding-left: 0px;padding-right: 0px;">
                @foreach($posts as $post)
                        <div class="card mb-5">
                            <div class="card-body pb-0 pt-2">
                                <h6 class="card-title d-flex align-items-center justify-content-between">
                                    <div class="pr-2">
                                        <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100 "
                                             style="max-width: 35px;border:1.7px solid #ff2e2e">
                                        <a href="/profile/{{$post->user->id}}" class="pl-2 text-decoration-none">
                                            <span class="text-dark" style="font-weight: bold">{{$post->user->username}}</span>
                                        </a>
                                    </div>

                                    <a href="#" class="text-dark text-decoration-none" data-toggle="modal" data-target="#exampleModalCenter">•••</a>
                                </h6>
                            </div>
                            <a href="/profile/{{$post->user->id}}">
                                <img class="card-img-top w-100" src="/storage/{{$post->image}}" width="250" height="400" alt="Card image cap" />
                            </a>
                            <div class="d-flex pl-3 pt-3">
                               <a href="#" class="text-decoration-none" >
                                   <img src="/img/heart.png" class="w-100 pl-2"
                                        style="max-width: 35px;">
                               </a>
                                <a href="#" class="text-decoration-none" >
                                    <img src="/img/comments.png" class="w-100 pl-2"
                                         style="max-width: 35px;">
                                </a>
                                <a href="#" class="text-decoration-none" >
                                    <img src="/img/plane.png" class="w-100 pl-2"
                                        style="max-width: 35px;">
                                </a>
                            </div>
                            <a href="#" class="pl-4 pt-1 text-dark text-decoration-none font-weight-bold font-weight-light" >12.343 likes</a>
                            <p class="card-text pl-3 pb-4 pt-2">
                                <span class="font-weight-bold ">
                                    {{$post->user->username}}
                                 </span>{{$post->description}}
                            </p>
                            <hr/>
                            <div class="d-flex align-items-center justify-content-between" style="margin-top: -15px;">
                                <input id="add_post" type="text" class="p-4 mt-0" style="outline:none;width: 100%;height: 100%;border: none;" placeholder="Add a comments">
                                <a href="#" class="text-decoration-none pr-3 focus">Post</a>
                            </div>
                        </div>
                @endforeach
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pt-3" style="width: 90%;border-radius: 25px;">
                        <div class="modal-body p-0">
                            <ul class="p-0 pl-0" style="list-style-type:none;text-align: center;">
                                <a href="#" class="text-decoration-none text-dark font-weight-bold">
                                    <li style="height: 30px;color: #ed4956">Report Inappropriate</li>
                                </a>
                                <hr class="pb-0"/>
                                <a href="#" class="text-decoration-none text-dark font-weight-bold">
                                    <li style="color: #ed4956">Unfollow</li>
                                </a>
                                <hr/>
                                <a href="/" class="text-decoration-none text-dark">
                                    <li >Go to post</li>
                                </a>
                                <hr/>
                                <a href="#" class="text-decoration-none text-dark ">
                                    <li >Share</li>
                                </a>
                                <hr/>
                                <a href="#" class="text-decoration-none text-dark ">
                                    <li >Copy link</li>
                                </a>
                                <hr/>
                                <a href="#" class="text-decoration-none text-dark ">
                                    <li >Embed</li>
                                </a>
                                <hr/>
                                <a href="#" data-dismiss="modal" class="text-decoration-none text-dark">
                                    <li >Cancel</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!--two column-->
                <div class="col-md-4 pl-4 pt-1">
                    <div class="">
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="/storage/{{ $user->image }}" class="rounded-circle w-100 "
                                     style="max-width: 50px;">
                            </div>
                            <div class="pt-3">
                                <p style="line-height: 1.4rem">
                                            <span>
                                            <a href="/profile/{{ Auth::user()->id }}" style="text-decoration: none">
                                                <span class="text-dark" style="font-weight: bold">{{ Auth::user()->username }}</span>
                                            </a><br/>
                                            </span>
                                    <span style="color:#8e8e8e;font-size: 12px;">{{ Auth::user()->profile->tittle }}</span>
                                </p>
                            </div>
                        </div>

                        <!--New row-->

                        <div class="card mt-3 mb-3" style="width: 90%;height: 300px;">
                            <div class="d-flex align-content-between ">
                                <label class="pt-2 pl-3" style="font-weight: bold;color: #8e8e8e">Stories</label>
                                <h6 class="card-title pt-2 offset-6">
                                    <a href="/" style="text-decoration: none;">
                                        <span class="text-dark" style="font-weight: bold;">watch all</span>
                                    </a>

                                </h6>
                            </div>
                            <div style="overflow: scroll;overflow-x: hidden;">
                                @foreach($status as $state)
                                    <div class="d-flex align-items-center pl-3">
                                        <div class="pr-3">
                                            <img src="/storage/{{ $state->image }}" class="rounded-circle w-100 "
                                                 style="max-width: 50px;">
                                        </div>
                                        <div class="pt-1">
                                            <p style="line-height: 1.4rem">
                                                <span>
                                                <a href="/profile/{{ $state->id }}" style="text-decoration: none">
                                                    <span class="text-dark" style="font-weight: bold">{{ $state->tittle}}</span>
                                                </a><br/>
                                                </span>
                                                <span style="color:#8e8e8e;font-size: 12px;">{{ $state->created_at }}</span>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!--New row-->

                        <div class="card mt-3 mb-3" style="width: 90%;height: 250px;">
                    <div class="d-flex align-content-between ">
                        <label class="pt-2 pl-3" style="font-weight: bold;color: #8e8e8e;">Suggestions For You</label>
                        <h6 class="card-title pt-2 offset-3">
                            <a href="/" style="text-decoration: none;">
                                <span class="text-dark" style="font-weight: bold;">See all</span>
                            </a>

                        </h6>
                    </div>
                     <div style="overflow: auto;overflow-x: hidden;">
                        @foreach($sug as $sug)
                                 <div class="d-flex align-items-center pl-3 pt-2">
                                    <div class="pr-3">
                                        <img src="/storage/{{ $sug->image }}" class="rounded-circle w-100 "
                                             style="max-width: 50px;">
                                    </div>
                                    <div class="pt-3 d-flex justify-content-center align-items-baseline">
                                        <p style="line-height: 1.4rem">
                                            <a href="/profile/{{ $sug->id }}" style="text-decoration: none">
                                                <span class="text-dark" style="font-weight: bold">{{ $sug->tittle}}</span>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </p>
                                        <a href="/profile/{{$sug->id}}" class="font-weight-bold text-decoration-none">
                                            . Follow
                                        </a>
                                    </div>
                                 </div>
                        @endforeach
                    </div>
                </div>
                    </div>
                 </div>
            </div><!--End row-->

            <div class="row pt-3">
                <div class="col-md-12 d-flex justify-content-center">
                    {{ $posts->links()}}
                </div>
            </div>

    </div>
@endsection
