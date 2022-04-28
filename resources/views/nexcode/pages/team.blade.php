@extends('layouts.nexcode')

@section('title', 'Team')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/nexcode/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Team</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{ route('nexcode.home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Team <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

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