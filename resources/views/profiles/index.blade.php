@extends('layouts.app')

@section('content')
<div class="container pr-5 pl-5">
    <div class="row" >
        <div class="col-lg-3 p-4">
            <img src="/storage/{{ $user->profile->image }}" class="rounded-circle " width="150px" height="150px">
        </div>
        <div class="col-lg-9 pt-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4 mr-3 mt-2">{{ $user->username}}</div>
                    @if($user->username=="m.abomayas")
                        <img src="/img/correct.png" class="mr-5" width="20px" height="20px">
                    @endif
                    @cannot('update',$user->profile)
                    <follow-button  user_id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        <a href="#" class="pl-4 text-dark " style="font-size: 20px;text-decoration: none;">
                            <img src="/img/dot3.png" width="24" height="24" data-toggle="modal" data-target="#eexampleModalCenter">
                        </a>
                    @endcannot
                    @can('update',$user->profile)
                        <div class="d-flex align-items-baseline">
                           <a href="/profile/{{$user->id}}/edit" class="btn" style="border: 1px solid #dbdbdb;font-weight: bold">Edit profile</a>
                           <a href="#" class="pl-4"><img src="/img/setting.png" width="24" height="24" data-toggle="modal" data-target="#exampleModalCenter"></a>
                       </div>
                    @endcan
                </div>


                @can('update',$user->profile)
                <a href="/p/create" class="btn btn-primary">Add Post</a>
                @endcan

            </div>

            <div class="d-flex ">
                <div class="pr-5"><strong>{{$postCount}}</strong> posts</div>
                <div class="pr-5"><strong>{{$followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->tittle}}</div>
            <div> {!! nl2br(e($user->profile->description))!!}</div>
            <div><a href="http://{{ $user->profile->url}}" target="_blank">{{ $user->profile->url}}</a></div>

        </div>
    </div>
    <br/>

    <div >
        <hr/>
        <div class="justify-content-start" align="center" style="margin: -16px">
            <button class="btn pt-3 pb-1 font-weight-lighter" style="border-top: 1px solid black;border-radius: 0px;" >
                <i class="fa fa-calendar">&nbsp;</i> POSTS
            </button>
            <button class="btn pt-3 pb-1 font-weight-lighter">
                 <i class="fa fa-tags">&nbsp;</i>TAGGED
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-3" style="width: 90%;border-radius: 25px;">
                <!--<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
                <div class="modal-body p-0">
                    <ul class="p-0 pl-0" style="list-style-type:none;text-align: center;">
                        <a href="#" class="text-decoration-none text-dark">
                            <li style="height: 30px">Change password</li>
                        </a>
                        <hr class="pb-0"/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >Nametag</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >App and Website</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >Notifications</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >Privacy and Security</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >Login Activity</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >Emails from Instagram</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark">
                            <li >Report a problem</li>
                        </a>
                        <hr/>
                        <a class="text-decoration-none text-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <li >Log Out</li>
                            <!--/////////////////////////////////////// -->
                        </a>
                        <form id="logout-form" data-dismiss="modal" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <hr/>
                        <a href="#" data-dismiss="modal" class="text-decoration-none text-dark">
                            <li >Cancel</li>

                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--two Model-->
    <!-- Modal -->
    <div class="modal fade" id="eexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-3" style="width: 90%;border-radius: 25px;">
                <div class="modal-body p-0">
                    <ul class="p-0 pl-0" style="list-style-type:none;text-align: center;">
                        <a href="#" class="text-decoration-none text-dark font-weight-bold">
                            <li style="height: 30px;color: #ed4956">Block this user</li>
                        </a>
                        <hr class="pb-0"/>
                        <a href="#" class="text-decoration-none text-dark font-weight-bold">
                            <li style="color: #ed4956">Restrict</li>
                        </a>
                        <hr/>
                        <a href="#" class="text-decoration-none text-dark font-weight-bold">
                            <li style="color: #ed4956">Report User</li>
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


    <!--two row-->
    <div class="row pt-4 ">
        @foreach($user->posts as $post)
        <div class="col-md-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img  src="/storage/{{$post->image}}" sizes="293px" style="object-fit:cover;" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
