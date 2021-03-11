@extends('template-dashboard.home')
@section('judul', 'Halaman Category')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Category</h4>
                                    <a href="/dashboard/category/create" class="btn btn-info btn-icon-text mb-4">
                                        <i class="ti-write btn-icon-prepend"></i>
                                        Tambah Category
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
                                                @forelse ($categories as $result => $category)
                                                <tr>
                                                    <th>{{$result + $categories->firstitem()}}</th>
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->slug}}</td>
                                                    <td>
                                                        <form action="/dashboard/category/{{$category->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/dashboard/category/{{$category->id}}/edit">Ubah</a>
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
                                        {{$categories->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection