<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
       $posts=Post::all();
       return view('posts.index',['posts'=>$posts]);
   }

   function details($id)
   {
       $post=Post::findOrFail($id);
       return view('posts.details',['post'=>$post]);
   }

   public function create()
   {
       $categories=Category::all();
       return view('posts.create',['categories'=>$categories]);
   }
   public function store(Request $req)
   {
       $post=new Post();
       $post->title=$req->title;
       $post->description=$req->description;
       $post->category_id=$req->category_id;
       if($req->hasFile('avatar'))
       {
           $path=$req->avatar->store('images');
           $post->photo=$path;
       }
       $post->save();
       return redirect('posts/list');
   }


   function edit($id)
   {
       $post=Post::findOrFail($id);
       $categories=Category::all();
       return view('posts.edit',['post'=>$post,'categories'=>$categories]);
   }

   
   public function update(Request $req,$id)
   {
       $post=Post::find($id);
       $post->title=$req->title;
       $post->description=$req->description;
       $post->category_id=$req->category_id;
       $post->save();
       return redirect('posts/list');
   }

   function destroy($id)
   {
       Post::findOrFail($id)->delete();
       return redirect('posts/list');
   }



   function home(){
    $posts=Post::all();
    return view('home',['posts'=>$posts]);
   }

}
