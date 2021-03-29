<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    //
    public function add_post()
    {
        return view('dashboard.add-post');
    }
    public function create_post(Request $request)
    {
         $image=$request->file('img');
         $imgName=time().'.'.$image->extension();
         $image->move(public_path('images'),$imgName);
         $title=$request->title;
         $description=$request->description;

        $post=new Post();
           $post->post_title=$title;
           $post->post_description=$description;
           $post->post_img=$imgName;
           $post->post_author='1';
           $post->save();
           return back()->with('post_msg','post created!');

    }


    // all post
    public function all_post()
    {
        $post=new Post();
            $news=$post->all();
            return view('index',compact('news'));
    }
    public function posts(){
        $post=new Post();
        $news=$post->all();
        return view('dashboard.allpost',compact('news'));
    }
    public function remove_post($id){
        Post::where('id',$id)->delete();
        return back();
    }

}
