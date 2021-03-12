<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;

class BlogController extends Controller
{
    public function index() {
        // $latest_post = Post::orderBy('created_at', 'desc')->first();
        $data = [
            'post_banner' => Post::latest()->first(),
            'latest_posts' => Post::orderBy('created_at', 'desc')->take(3)->get(),
            'category_widget' => Category::all(),
            'user' => User::all()->count(),
            'author' => User::where('role', 'Author')->count(),
        ];
        return view('welcome', $data);
    }

    public function about(){
        return view('blog.about');
    }

    public function blog_list() {
        $category_widget = Category::all();
        $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    	$data = Posts::latest()->paginate(6);
    	return view('blog.list_post', compact('data','category_widget', 'latest_posts'));
    }

    public function blog_isi($slug) {
        $data = Post::where('slug', $slug)->get();
        $categories= Category::all();
        $related = Post::all();
    
        return view('blog.blog_isi', compact('data', 'related'));
    }

    public function list_category(Category $category) {
        $category_widget = Category::all();
        $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Post::latest()->paginate(4);
        $data = $category->post()->paginate(4);
        return view('blog.blog_list', compact('data','category_widget', 'latest_posts', 'posts'));
    }
}
