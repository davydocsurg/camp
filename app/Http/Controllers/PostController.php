<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
Use App\Post;
use App\Category;
use DB;
Use Auth;

class PostController extends Controller
{
    public function post(){
        $categories = Category::all();
        return view('camp_posts/post', ['categories' => $categories]);
    }

    public function addPost(Request $request){
        $this->validate($request,[
            'post_title' => 'required',
            'post_body' => 'required',
            'post_image' => 'required',
            'category_id' => 'required',
        ]);

        $posts = new Post;
        $posts->user_id = Auth::user()->id;
        $posts->post_title = $request->post_title;
        $posts->post_body = $request->post_body;
        $posts->category_id = $request->category_id;
        if($request->hasFile('post_image')){
            $file = $request->file('post_image');
            $file->move(public_path(). '/images/', $file->getClientOriginalName());
            $url = URL::to("/"). '/images/'. $file->
            getClientOriginalName();
        }
        $posts->post_image = $url;
        $posts->save();
        return redirect('/home')->with('status', "You've added to posts successfully!");

    }

    public function view($post_id){
        $posts = Post::where('id', '=',$post_id)->get();
        $categories = Category::all();
        return view('camp_posts/view', ['posts' => $posts, 'categories' => $categories]);
    }
}
