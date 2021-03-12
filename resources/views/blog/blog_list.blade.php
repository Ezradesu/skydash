@extends('template-blog.home')
@section('content')
        <div class="blog">
            <div class="container">
                <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
                <section class="featured-posts-section">
                    <div class="row">
                        @foreach($latest_posts as $latest_post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset($latest_post->gambar)}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{$latest_post->category->name}} | {{$latest_post->created_at->format('d/m/Y')}}</p>
                            <a href="/blog/{{$latest_post->slug}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$latest_post->judul}}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
                <div class="row">
                    <div class="col-md-8">
                        <section>
                            <div class="row blog-post-row">
                                @foreach($data as $hasil)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{asset($hasil->gambar)}}" alt="blog post">
                                    </div>
                                    <p class="blog-post-category">{{$hasil->category->name}} | {{$hasil->created_at->format('d/m/Y')}}</p>
                                    <a href="/blog/{{$hasil->slug}}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{$hasil->judul}}</h6>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            {{$data->links()}}
                        </section>
                    </div>
                    <div class="col-md-4 sidebar" data-aos="fade-left">
                        <div class="widget widget-post-carousel">
                            <h5 class="widget-title">Post Lists</h5>
                            <div class="post-carousel">
                                <div id="carouselId" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselId" data-slide-to="1"></li>
                                        <li data-target="#carouselId" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        @foreach($latest_posts as $latest_post)
                                        <figure class="carousel-item @if($loop->first) active @endif">
                                            <img src="{{asset($latest_post->gambar)}}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="/blog/{{$latest_post->slug}}">{{$latest_post->judul}}</a>
                                            </figcaption>
                                        </figure>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-post-list">
                            <h5 class="widget-title">Categories</h5>
                            <div class="table responsive">  
                                <table class="table">
                                    <tfoot>
                                        @foreach($category_widget as $hasil)
                                        <tr>
											<th><a href="/blog/category/{{$hasil->slug}}" style="color: #000 !important; text-decoration: none !important;">{{$hasil->name}}</a></th>
											<td><span>{{$hasil->post->count()}}</span></td>
										</tr>
                                        @endforeach
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title">Categories</h5>
                            <img src="{{asset('edica/assets/images/blog_widget_categories.jpg')}}" alt="categories" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection