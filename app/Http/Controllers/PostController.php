<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following->pluck('user_id');
        //$posts=Post::wherein('user_id',$users)->orderBy('created_at','DESC')->get();
        $posts=Post::whereIn('user_id',$users)->with('user')->latest()->paginate(5);

        $user=Profile::find(auth()->user()->id);
        $status=Profile::where('user_id','>',1)->where('user_id','<>',2)->where('user_id','<>',10)->get();
        $sug=Profile::where('user_id','>',4)->where('user_id','<>',11)->get();
        return view('posts.index',compact('posts','user','status','sug'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store()
    {
        $data=request()->validate([
            'caption'=>'required',
            'description'=>'required',
            'image'=>['required','image'],
        ]);

        //dd(request('image')->store('uploads','public'));
        //\App\Post()::create($data);
        //way $id = Auth::id();
        //Auth()->user()->posts->create($data);
       // \auth()->user()->posts->create($data);

        //way
        $imagePath=request('image')->store('uploads','public');
        $image=Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        $post=new post();
        $post->user_id=Auth::id();
        $post->tittle=$data['caption'];
        $post->description=$data['description'];
        $post->image=$imagePath;
        $post->save();

        return redirect('/profile/'.Auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        //$comment=CommentController::show($post);
        //$comment = Comment::where('post_id','=',$post->id)->get();
        //$user=User::where('id','=',$comment->user_id)->get();
        return view('posts.show',compact('post'));
    }

    public function search(Request $request)
    {
        $qry= $request->jj;
        return $users=DB::table('users')
            ->join('profiles', function($join)
            {
                $join->on('users.id', '=', 'profiles.id');
            })->select('users.*','profiles.*')->where('username','like','%'.$qry.'%')->get();
    }
}
