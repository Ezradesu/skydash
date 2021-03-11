@extends('template-dashboard.home')
@section('judul', 'Tambah User')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah User</h4>
                                    <form class="forms-sample" action="/dashboard/user" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Nama User</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="Nama user">
                                                @error('name')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">Email User</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="Email user">
                                                @error('email')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-sm-3 col-form-label">Role User</label>
                                            <div class="col-sm-9">
                                                <select name="role" class="js-example-basic-single w-100 @error('role') is-invalid @enderror">
                                                    <option value="Administrator">Administrator</option>
                                                    <option value="Author">Author</option>
                                                    <option value="Pengunjung">Pengunjung</option>
                                                </select>
                                                @error('role')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-3 col-form-label">Passwrod User</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" id="password" placeholder="Password user">
                                                @error('password')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection