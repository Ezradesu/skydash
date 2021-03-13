@extends('template-dashboard.home')
@section('judul', 'Halaman Post')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Post</h4>
                                    <a href="/dashboard/author/post/create" class="btn btn-info btn-icon-text mb-4">
                                        <i class="ti-write btn-icon-prepend"></i>
                                        Tambah Post
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Slug</th>
                                                    <th>Category</th>
                                                    <th>Tag</th>
                                                    <th>Author</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($posts as $result => $post)
                                                <tr>
                                                    <th>{{$result + $posts->firstitem()}}</th>
                                                    <td>{{$post->judul}}</td>
                                                    <td>{{$post->slug}}</td>
                                                    <td>{{$post->category->name}}</td>
                                                    <td>
                                                        @foreach($post->tags as $tag)
                                                            <ul class="list-arrow">
                                                                <li>{{$tag->name}}</li>
                                                            </ul>
                                                        @endforeach
                                                    </td>
                                                    <td>{{$post->user->name}}</td>
                                                    <td><img src="{{ asset( $post->gambar ) }}" alt="" style="width: 100px !important;"></td>
                                                    <td>
                                                        <form action="/dashboard/author/post/{{$post->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="/blog/{{$post->slug}}">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/dashboard/author/post/{{$post->id}}/edit">Ubah</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="8">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>        
                                        </table>
                                        {{$posts->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection