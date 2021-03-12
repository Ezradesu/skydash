@extends('template-blog.home')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">About Us</h1>
                    <section class="edica-about-intro py-5">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
                                <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">Quick & Easy Process <span>with best features</span></h2>
                            </div>
                            <div class="col-md-6 intro-content" data-aos="fade-left" data-aos-delay="150">
                                <p><span class="first-letter">E</span>dica Digital is the world leader in online news and information and seeks to inform, engage and empower the world. Staffed 24 hours, seven days a week by a dedicated team in Edica bureaus around the world, Edica's digital platforms deliver news from almost 2 journalists in every corner of the globe.</p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                                <img src="{{asset('edica/assets/images/about-vision.png')}}" alt="vision" class="img-fluid">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h2 class="vision-title" data-aos="fade-left">Our Vision</h2>
                                <p class="vision-text" data-aos="fade-left">Our products and platforms take you to the farthest corners of the world, and they bring the world to you, delivering content and services that enrich your lives, your families and your communities.</p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-goal py-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h2 class="goal-title">Our Goal</h2>
                                <p class="goal-text">Edica News Digital is a collection of innovative and powerful news brands that deliver compelling, diverse and visually engaging stories on your platform of choice. Edica News Digital features world-class</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <img src="{{asset('edica/assets/images/about-goal.png')}}" alt="goal" class="img-fluid">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-up">Frequently Asked Queries</h2>
                        <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">These are some kind of popular questions</p>
                        <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                            <div class="card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-header" role="tab" id="edicaAboutFaq2">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent2" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Do i have to login to see the blog post?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq2">
                                    <div class="card-body">
                                        No, you don't have to login to see the blog post
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-header" role="tab" id="edicaAboutFaq3">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent3" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            How do i contact the developer?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq3">
                                    <div class="card-body">
                                        You can contact me through email or my instagram page
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
@endsection