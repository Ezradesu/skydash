@extends('template-dashboard.home')
@section('judul', 'Tambah Post')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Post</h4>
                                    <form class="forms-sample" action="/dashboard/post" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-3 col-form-label">Nama Post</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{old('judul')}}" id="judul" placeholder="Judul post">
                                                @error('judul')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category_id" class="col-sm-3 col-form-label">Kategory</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100 @error('category_id') is-invalid @enderror" name="category_id">
                                                    <option value="" holder>Pilih category</option>
                                                    @forelse($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @empty
                                                    <option value="" holder>Tidak ada data!</option>
                                                    @endforelse
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
                                                    @forelse ($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                    @empty
                                                    <option value="" holder>Tidak ada pilihan</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="content" class="col-sm-3 col-form-label">Content</label>
                                            <div class="col-sm-9">
                                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!"></textarea>
                                                {{-- @include('ckeditor') --}}
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
                                        <a href="/dashboard/post" class="btn btn-light">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section('ckeditor')
<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection