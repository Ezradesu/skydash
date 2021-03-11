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
            'data' => Post::orderBy('created_at', 'desc')->take(8)->get(),
            'category_widget' => Category::all(),
        ];

        return view('welcome', $data);
    }
}
