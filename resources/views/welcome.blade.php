<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica Home</title>
    <link rel="stylesheet" href="{{asset('edica/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('edica/assets/vendors/font-awesome/css/all.min.css')}}">
    <link href="{{asset('edica/assets/vendors/aos/aos.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('edica/assets/css/style.css')}}">
    <script src="{{asset('edica/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('edica/assets/js/loader.js')}}"></script>
    <style>
        #topBtn {
            position: fixed;
            bottom: 85px;
            right: 25.3px;
            font-size: 22px;
            width: 50px;
            background-color: #03a84e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="edica-loader"></div>
    <header class="edica-header edica-landing-header">
        <div class="container">
            @include('template-blog.navbar')
            <div class="edica-landing-header-content">
                <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">.01</li>
                        <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">.02</li>
                        <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">.03</li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1>{{$post_banner->judul}}</h1>
                                    <p>{!! Str::limit($post_banner->content, 120) !!}</p>
                                    <div class="carousel-content-btns">
                                        <a href="/about" class="btn btn-success"> <i class="fas fa-paperclip mr-2"></i> About Us</a>
                                        <a href="/blog/{{$post_banner->slug}}" class="btn btn-secondary"> <i class="fas fa-file-alt mr-2"></i>See Post</a>
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper">
                                    <img src="{{asset('edica/assets/images/Slider_1.png')}}" alt="carousel-img" class="img-fluid"
                                        width="350px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="edica-landing-section-subtitle-alt">ABOUT US</h4>
                        <h2 class="edica-landing-section-title">{{$user}}+ customer using Our website.</h2>
                        <p>Edica Digital is the world leader in online news and information and seeks to inform, engage and empower the world. Staffed 24 hours, seven days a week by a dedicated team in Edica bureaus around the world, Edica's digital platforms deliver news from almost {{$author}} journalists in every corner of the globe.</p>
                        <ul class="landing-about-list">
                            <li>We are truth-seekers and storytellers.</li>
                            <li>We are journalists, designers and technologists, united by a mission to inform, engage and empower the world.</li>
                            <li>We bear witness to history as it unfolds and explain not just what happened, but why, and what it means to you.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('edica/assets/images/phone-copy.png')}}" width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        @include('template-blog.services')
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle-alt">LATEST BLOG POST</h4>
                <h2 class="edica-landing-section-title">Check our website latest blog post <br> for more
                    update.</h2>
                <div class="row">
                    @foreach($latest_posts as $latest_post)
                    <div class="col-md-4 landing-blog-post">
                        <img src="{{asset($latest_post->gambar)}}" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">{{$latest_post->category->name}} | {{$latest_post->created_at->format('d/m/Y')}}</p>
                        <h4 class="blog-post-title">{{$latest_post->judul}}</h4>
                        <a href="/blog/{{$latest_post->slug}}" class="blog-post-link">Learn more</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-1 mb-4 mb-md-0">
                            <p class="post-category">My Previous Project</p>
                            <h2 class="post-title">Check my previous project about table service app</h2>
                            <a href="https://tugas-akhir-warung-kita.000webhostapp.com/" class="post-link">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-2">
                            <p class="post-category">My Current Project</p>
                            <h2 class="post-title">Check my current project about download service</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    </main>
    @include('template-blog.footer')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/604809631c1c2a130d66ce20/1f0cm9bbv';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
    </script>
    <!--End of Tawk.to Script-->
     <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 40){
                    $('#topBtn').fadeIn();
                } else {
                    $('#topBtn').fadeOut();
                }
            });

            $("#topBtn").click(function(){
                $('html, body').animate({scrollTop : 0}, 800);
            });
        });
    </script>
    {{-- End of back to top button --}}
    <script src="{{asset('edica/assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('edica/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('edica/assets/vendors/aos/aos.js')}}"></script>
    <script src="{{asset('edica/assets/js/main.js')}}"></script>
    <script>
        AOS.init({
            duration: 2000
        });
    </script>
</body>

</html>