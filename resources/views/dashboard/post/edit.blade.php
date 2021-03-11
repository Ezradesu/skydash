@extends('template-dashboard.home')
@section('judul', 'Edit Post')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Post</h4>
                                    <form class="forms-sample" action="/dashboard/post/{{$post->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-3 col-form-label">Nama Post</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{$post->judul}}" id="judul" placeholder="Judul post">
                                                @error('judul')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category_id" class="col-sm-3 col-form-label">Kategory</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100 @error('category_id') is-invalid @enderror" name="category_id">
                                                    @foreach($categories as $result)
                                                    <option value="{{ $result->id }}"
                                                    @if($result->id == $post->category_id)
                                                        selected
                                                    @endif
                                                        >{{  $result->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category_id" class="col-sm-3 col-form-label">Tag</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-multiple w-100" multiple="multiple" name="tags[]">
                                                    @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}"
                                                    @foreach($post->tags as $value)
                                                        @if($tag->id == $value->id)
                                                        selected
                                                        @endif
                                                    @endforeach       	
                                                        >{{ $tag->name }}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="content" class="col-sm-3 col-form-label">Content</label>
                                            <div class="col-sm-9">
                                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!">{{$post->content}}</textarea>
                                                @error('content')
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
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection