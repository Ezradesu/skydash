@extends('template-blog.home')
@section('title', 'Edica Coming Soon')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Under construction</h1>
                    <section class="edica-coming-soon py-5 mb-5">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="comimg-soon-subtitle" data-aos="fade-up">The app is not ready yet</h6>
                                <h2 class="coming-soon-title" data-aos="fade-up" data-aos-delay="100">We are doing our best to coming soon</h2>
                            </div>
                            <div class="col-md-4" data-aos="fade-left">
                                <img src="{{asset('edica/assets/images/Under construction.png')}}" alt="coming soon" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>
@endsection