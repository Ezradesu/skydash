<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function akun(){
        $user = User::where('id', Auth::id())->first();
        return view('dashboard.account.index', compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);

        $user = User::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('skydash/img/uploads/', $new_gambar);

            $upload_data = [
                'name' => $request->name,
                'gambar' => 'skydash/img/uploads/'.$new_gambar,
            ];
        }
        else{
            $upload_data = [
                'name' => $request->name,
            ];
        }
   
        $user->update($upload_data);

        if($user){
            Alert::success('Berhasil','Data akun berhasil diubah');
        }
        return redirect('/akun');
    }

    public function about(){
        return view('blog.about');
    }

    public function soon(){
        return view('blog.coming');
    }

    public function blog_list() {
        $category_widget = Category::all();
        $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    	$data = Post::latest()->paginate(6);
    	return view('blog.blog_list', compact('data','category_widget', 'latest_posts'));
    }

    public function blog_isi($slug) {
        $data = Post::where('slug', $slug)->get();
        $categories= Category::all();
        $related = Post::latest()->take(3)->get();
    
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
