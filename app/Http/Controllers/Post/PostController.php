<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index(Post $post)
    {
        $post=Post::all();
        return view('admin.product.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['categories']=Category::all();
        return view('admin.product.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Post $post)
    {
        $this->validate($request,
           [ 'filename' => 'required', 
           'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' ]); 
          if($request->hasfile('filename'))
           { 
               // $images = implode(',', $request->file('filename'));
                // print_r($images); $images = array();
                 foreach($request->file('filename') as $image) 
                 { 
                     $name= $image->getClientOriginalExtension();
                     $new_name = rand(012345,9999999).'.'.$name;
                     $image->move(public_path().'/images/posts', $new_name); 
                     $data = $new_name;
                     $images[] = $new_name;
                 } 
                     // $final_img = implode(',', $images);
                     $final_img = json_encode($images);  
                     $post = new post;
                     $post->filename=$final_img;
                     $post->title=$request->title;
                     $post->price=$request->price;
                     $post->location=$request->location;
                     $post->description=$request->description;
                     $post->category=$request->category;
                     $post->save();
                     return redirect()->route('post.index');
             }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $arr['post'] = Post::where('id',$id)->first();
         $arr['category']= Category::all();
        return view('admin.product.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,
        [ 'filename' => 'required', 
        'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' ]); 
       if($request->hasfile('filename'))
        { 
            // $images = implode(',', $request->file('filename'));
             // print_r($images); $images = array();
              foreach($request->file('filename') as $image) 
              { 
                  $name= $image->getClientOriginalExtension();
                  $new_name = rand(012345,9999999).'.'.$name;
                  $image->move(public_path().'/images/posts', $new_name); 
                  $data = $new_name;
                  $images[] = $new_name;
              } 
                   
                    $final_img = json_encode($images);  
                     $post->filename=$final_img;
                }
                     $post->title=$request->title;
                     $post->price=$request->price;
                     $post->location=$request->location;
                     $post->description=$request->description;
                     $post->category=$request->category;
                     $post->save();
                  return redirect()->route('post.index');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->back();
    }
}
