@extends('layouts.nexcode')

@section('title', 'Contact')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/nexcode/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{ route('nexcode.home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Contact us <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> Kigali, Muhima</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://250781862349">+ 250 781 862 349</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:nexcoderwa@gmail.com">nexcoderwa@gmail.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="http://weforem.org/nexcode/">weforem.org/nexcode</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container-wrap">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-5 order-md-last">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

@endsection