<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('main');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function main(Post $post)
    {
       // $arr['posts']=Post::all();       
       $arr['randposts'] = Post::inRandomOrder()->take(3)->get();
       $arr['recentposts'] = Post::orderBy('created_at', 'desc')->take(8)->get();
        return view('welcome')->with($arr);
    }


    public function index()
    {
        return view('frontend.home');
    }
    public function profile()
    {
        $user=Auth::user();
        return view('frontend.profile',compact('user'));
    }
}
