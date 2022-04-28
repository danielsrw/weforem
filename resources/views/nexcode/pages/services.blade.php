@extends('layouts.nexcode')

@section('title', 'Services')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/nexcode/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Services</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{ route('nexcode.home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Services <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('nexcode.partials.services')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Projects</small></span>
                    <h2 class="mb-4">Done Projects</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @include('nexcode.partials.projects')
            </div>
        </div>
    </section>

@endsection