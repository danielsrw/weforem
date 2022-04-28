@extends('layouts.nexcode')

@section('title', 'Projects')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/nexcode/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Project</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{ route('nexcode.home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Project <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
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
                            <span class="mr-2"><a href="#">Interior</a></span>
                            <span class="mr-2"><a href="#">Exterior</a></span>
                            <span class="mr-2"><a href="#">Landscape</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                @include('nexcode.partials.projects')
            </div>
            <div class="row no-gutters mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection