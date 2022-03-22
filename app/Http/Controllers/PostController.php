<?php

namespace App\Http\Controllers;
use  App\Models\Post;
use  App\Models\User;
use  App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about(){
        return view('about', [
            "title" => "About"
        ]);
    }

    public function post(){
        return view('post', [
            'title' => 'post',
            'post' => Post::all()
        ]);
    }

    public function postId(Post $post){
        return view('detail', [
            'title'=> 'post detail',
            'post' => $post
        ]);
    }

    public function categoryDetail(Category $category){
        return view('categorydetail', [
            'title' => 'Category Detail',
            'post' => $category
        ]);
    }

    public function author(User $user){
        return view('author', [
            "title"=>"Author",
            "author"=>$user
        ]);
    }
}
