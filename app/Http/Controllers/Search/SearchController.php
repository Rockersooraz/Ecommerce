<?php

namespace App\Http\Controllers\Search;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
      public function search(Request $request)
    {
    	$column = $request->query('column');
    	$value = $request->query('value');

        $Posts= Post::where($column,'LIKE','%'.$value.'%')->get();
        return view('search-result',compact('Posts'));
    }

     public function detail($id ,Request $request )
     {

       $arr['post']= Post::find($id);
        $arr['categories']=Category::all();
        $arr['randposts'] = Post::inRandomOrder()->take(2)->get();
        return view('frontend.detail')->with($arr);

    }


}
