@extends('template-dashboard.home')
@section('judul', 'Ubah Category')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Ubah Category</h4>
                                    <form class="forms-sample" action="/dashboard/category/{{$category->id}}" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Nama Category</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}" id="name" placeholder="Nama category">
                                                @error('name')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <a href="/dashboard/category" class="btn btn-light">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection