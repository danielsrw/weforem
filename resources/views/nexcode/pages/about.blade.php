@extends('layouts.nexcode')

@section('title', 'About')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/nexcode/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{ route('nexcode.home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>About us <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url({{ asset('assets/nexcode/images/bg_3.jpg') }});">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading subheading-with-line">
                                <small class="pr-2 bg-white">A bit about us</small>
                            </span>
                            <h2 class="mb-4">We are the best digital marketing firm</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>
                            NEXCODE is a family run web design and IT services company founded by KAJUGA Daniels. We pride ourselves on delivering a high quality, affordable service in a friendly, professional and personable manner.
                        </p>
                        <p>
                            Run from a virtual office, everything about NEXCODE has been optimised to reduce our business costs so that we can pass the savings onto you. That’s why we offer FREE hosting with all of our website builds and unlimited email addresses to use with your domain. So if you’re paying monthly or yearly for hosting and are not happy with what you are getting for your money, we can help you.
                        </p>
                        <p>
                            Our philosophy is simple; to deliver good customer service. We strongly believe in doing this with each and every one of our clients. <a href="{{ route('nexcode.about') }}">Read some of our 5 star reviews here.</a>
                        </p>
                        <p>
                            Our diverse team come from a range of different backgrounds and can expertly tend to a large amount of IT services from <a href="">website design & development</a>, <a href="">search engine optimisation (SEO)</a>, <a href="">pay per click advertising (PPC)</a> and <a href="">graphic design</a> to broken computers and <a href="">IT software problems</a>. Our graphic design team work with you to design logos, graphics and video advertisements for your business from the drafting stages right through to completion.
                        </p>
                        <p>
                            We understand that every project and every client has unique requirements and budgets, and we treat them as such. We deliver a highly bespoke service at an incredibly reasonable cost, time and time again.
                        </p>
                        <p>
                            Take a look at some of the work we’ve already done for our very happy clients here. Don’t believe us? <a href="{{ route('about.projects') }}"></a>
                        </p>
                        <p>
                            We look forward to working with you.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-md-4 ftco-animate">
                    <h3 class="h4">Mission</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-md-4 ftco-animate">
                    <h3 class="h4">Vission</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-md-4 ftco-animate">
                    <h3 class="h4">Mosaic</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
        </div>
    </section>

	@include('nexcode.partials.counter')

    @include('nexcode.partials.testimony')

@endsection