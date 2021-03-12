@extends('template-blog.home')
@section('content')
    <main class="blog-post">
        @foreach($data as $post)
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->judul}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written by {{$post->user->name}}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset($post->gambar)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!!$post->content!!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                        <div class="row">
                            @foreach($related as $rekomen)
                                @if($rekomen->category->id == $post->category->id)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{asset($rekomen->gambar)}}" alt="related post" class="post-thumbnail">
                                    <p class="post-category">{{$rekomen->category->name}}</p>
                                    <h5 class="post-title"><a href="/blog/{{$rekomen->slug}}" style="text-decoration: none !important; color:#000 !important;">{{$rekomen->judul}}</a></h5>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                    </section>
                </div>
            </div>
        </div>
        @endforeach
    </main>
@endsection