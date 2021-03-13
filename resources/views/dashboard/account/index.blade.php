@extends('template-dashboard.home')
@section('judul', 'Detail User')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail User</h4>
                                     <div class="mt-5 py-5 d-flex justify-content-center">
                                        @if($user->gambar == null) 
                                            <img src="{{asset('skydash/images/faces/default.jpg')}}" alt="" class="img-fluid rounded" style="width: 500px !important;">
                                        @else
                                            <img src="/{{$user->gambar}}" alt="" class="img-fluid" class="img-fluid rounded" style="width: 500px !important;">
                                        @endif
                                    </div>
                                    <form class="forms-sample" action="/akun/{{$user->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Nama User</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" id="name" placeholder="Nama user">
                                                @error('name')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">Email User</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" id="email" placeholder="Email user" readonly>
                                                @error('email')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-sm-3 col-form-label">Role User</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="role" class="form-control @error('role') is-invalid @enderror" value="{{$user->role}}" id="role" placeholder="role user" readonly>
                                                @error('role')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                                @error('gambar')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <a href="/" class="btn btn-light">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection