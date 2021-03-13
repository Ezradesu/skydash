@extends('template-dashboard.home')
@section('judul', 'Halaman Post Yang Dihapus')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Post Trashed</h4>
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
                                                        <form action="/dashboard/post/kill/{{$post->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/dashboard/post/restore/{{$post->id}}">Restore</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="7">Tidak ada data</td>
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