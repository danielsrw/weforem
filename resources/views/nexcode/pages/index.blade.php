@extends('layouts.nexcode')

@section('title', 'Home')

@section('content')

    @include('nexcode.partials.slide')

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url({{ asset('assets/nexcode/images/bg_3.jpg') }});">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading subheading-with-line"><small class="pr-2 bg-white">About</small></span>
                            <h2 class="mb-4">We are the best digital marketing firm in the town</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>
                            NEXCODE will be able to work with you to help you achieve your dream website. No longer will you need to fret over operating a slow site, or one filled with broken links. NEXCODE only produces top-tier work, and it will be at your direction.
                        </p>
                        <p>
                            Other companies claim that they make custom sites but do not actually give you what they want—they have their own ideas. NEXCODE genuinely cares about your input and will create what you are conjuring up in your imagination. Not only will your site be aesthetically pleasing, but it will be efficient and fast.
                        </p>
                        <p>
                            <a href="{{ route('nexcode.about') }}" class="btn-custom">
                                Learn More <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('nexcode.partials.counter')

    @include('nexcode.partials.services')

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Projects</small></span>
                    <h2 class="mb-4">Featured Projects</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="category mt-5">
                            <span class="active mr-2"><a href="#">All Work</a></span>
                            <span class="mr-2"><a href="#">Web Dev</a></span>
                            <span class="mr-2"><a href="#">Mobile Dev</a></span>
                            <span class="mr-2"><a href="#">Graphic Design</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                @include('nexcode.partials.projects')
            </div>
        </div>
    </section>

    @include('nexcode.partials.testimony')

    @include('nexcode.partials.team')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Blog</small></span>
                    <h2 class="mb-4">Recent Blog</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('nexcode.partials.blog')
            </div>
        </div>
    </section>

    @include('nexcode.partials.client')

@endsection