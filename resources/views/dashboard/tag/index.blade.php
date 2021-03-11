@extends('template-dashboard.home')
@section('judul', 'Halaman Tag')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Tag</h4>
                                    <a href="/dashboard/tag/create" class="btn btn-info btn-icon-text mb-4">
                                        <i class="ti-write btn-icon-prepend"></i>
                                        Tambah Tag
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($tags as $result => $tag)
                                                <tr>
                                                    <th>{{$result + $tags->firstitem()}}</th>
                                                    <td>{{$tag->name}}</td>
                                                    <td>{{$tag->slug}}</td>
                                                    <td>
                                                        <form action="/dashboard/tag/{{$tag->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/dashboard/tag/{{$tag->id}}/edit">Ubah</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="4">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>        
                                        </table>
                                        {{$tags->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection