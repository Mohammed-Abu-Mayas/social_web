@extends('layouts.app')

@section('content')
    <div class="container col-md-10 card mt-4">
       <div class="row">
           <div class="col-md-8" style="padding: 0px">
               <img src="/storage/{{$post->image}}" class="w-100" height="450">
           </div>
           <div class="col-md-4">
               <div >
                   <div class="d-flex align-items-center pb-3 pt-3 mb-3 " style="border-bottom: 1px solid #eee">
                        <div class="pr-3">
                            <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 35px ">
                        </div>
                        <div>
                            <div class="font-weight-bold ">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                                <a href="#" class="pl-3">
                                     . Follow
                                </a>
                            </div>
                        </div>
                    </div>
                   <p> <span class="font-weight-bold">
                           <a href="/profile/{{$post->user->id}}">
                               <span class="text-dark">{{$post->user->username}}  </span>
                           </a></span>{{$post->description}}
                   </p>
               </div>
               <div class="">
                   <div class="d-flex pt-3">
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

               </div>
               <br/>
               <div class="d-flex align-items-center" style="border-top: 1px solid #eee">
                   <input id="add_post" type="text" class="p-4 mt-0" style="width: 100%;height: 100%;border: none;" placeholder="Add a comments">
                   <a href="#" class="text-decoration-none pr-3 focus">Post</a>
               </div>
           </div>
       </div>
    </div>
@endsection
