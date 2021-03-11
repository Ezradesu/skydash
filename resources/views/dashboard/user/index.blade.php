@extends('template-dashboard.home')
@section('judul', 'Halaman User')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List User</h4>
                                    <a href="/dashboard/user/create" class="btn btn-info btn-icon-text mb-4">
                                        <i class="ti-write btn-icon-prepend"></i>
                                        Tambah User
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($users as $result => $user)
                                                <tr>
                                                    <th>{{$result + $users->firstitem()}}</th>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->role}}</td>
                                                    <td>
                                                        <form action="/dashboard/user/{{$user->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/dashboard/user/{{$user->id}}/edit">Ubah</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="5">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>        
                                        </table>
                                        {{$users->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection