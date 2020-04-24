<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
Use App\Post;
use App\Category;
use App\Comment;
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

    public function edit($post_id){
        $categories = Category::all();
        $posts = Post::find($post_id);
        $category = Category::find($posts->category_id);
        return view('camp_posts.edit', ['categories' => $categories, 'posts' => $posts, 'category' => $category,]);
    }

    public function editPost(Request $request, $post_id){
        $this->validate($request, [
            'post_title' => 'required',
            'post_body' => 'required',
            'post_image' => 'required',
            'category_id' => 'required'
        ]);
        $posts = new Post;
        $posts->post_title = $request->post_title;
        $posts->user_id = Auth::user()->id;
        $posts->post_body = $request->post_body;
        $posts->category_id = $request->category_id;
        if($request->hasfile('post_image')){
            $file = $request->file('post_image');
            $file->move(public_path(). '/images/',  $file->getClientOriginalName());
            $url = URL::to("/"). '/images/'. $file->getClientOriginalName();
        }
        $posts->post_image = $url;
        $data = array(
            'post_title' => $posts->post_title,
            'user_id' => $posts->user_id,
            'post_image' => $posts->post_image,
            'category_id' => $posts->category_id,
            'post_body' => $posts->post_body
        );
        Post::where('id', $post_id)
            ->update($data);
        $posts->update($data);
        return redirect('/home')->with('status', 'Post Updated Successfully');
    }
    public function deletePost(Request $request, $post_id)
    {
        Post::where('id', $post_id)
            ->delete();
        return redirect('/home')->with('status', 'Post discarded successfully');
    }

    public function category($cat_id){
        $categories = Category::all();
        $posts = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('posts.*', 'categories.*')
                ->where(['categories.id' => $cat_id])
                ->get();
    
    
     return view('postcategories/categoriesposts', ['categories' => $categories, 'posts' => $posts ]);
    }

    // public function comment(Request $request, $post_id){
    //     $this->validate($request, [
    //         'comment' => 'required',
    //      ]);
    //      $user_id = Auth::user()->id;
    //      $comments = new Comment;
    //      $comments->user_id = Auth::user()->id;
    //      $comments->post_id = $post_id;
    //      $comments->comments = $request->comment;
    //      $comments->save();
    //      return redirect("/view/{$post_id}")->with('status', 'Comment Added sucessfully');
    // }

    public function search(Request $request){
        // $user_id = Auth::user()->id;
        // $search = Input::get('search');    
        $keyword = $request->search;
        $posts = Post::where('post_title', 'LIKE', '%'.$keyword.'%')
        ->orWhere('post_body','LIKE','%'.$keyword.'%')->get();
        return view("/search ",["keyword" => $keyword, "posts" => $posts]);
    }
}
