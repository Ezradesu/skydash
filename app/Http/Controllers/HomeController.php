<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Tags;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        $this->middleware([
            'auth',
            'privilege:Administrator&Author',
        ]);

        $data = [
            'pengunjung' => User::where('role', 'Pengunjung')->count(),
            'author' => User::where('role', 'Author')->count(),
            'post' => Post::all()->count(),
            'category' => Category::all()->count(),
            'blog' => Post::all(),
        ];
        
        return view('dashboard.index', $data);
    }
}
