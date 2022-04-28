@extends('layouts.ndahari')

@section('title', 'Home')

@section('content')

	<section id="hero" class="hero d-flex align-items-center">

	    <div class="container">
	      	<div class="row">
		        <div class="col-lg-6 d-flex flex-column justify-content-center">
		          	<h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
		          	<h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
		          	<div data-aos="fade-up" data-aos-delay="600">
			            <div class="text-center text-lg-start">
			              	<a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
				                <span>Get Started</span>
				                <i class="bi bi-arrow-right"></i>
			              	</a>
			            </div>
		          	</div>
		        </div>
		        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
		          	<img src="{{ asset('assets/ndahari/img/hero-bg.jpg') }}" class="img-fluid" alt="">
		        </div>
	      	</div>
	    </div>
  	</section>

  	<main id="main">
  		<section id="about" class="about">
	      	<div class="container" data-aos="fade-up">
		        <div class="row gx-0">
		          	<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
			            <div class="content">
			              	<h3>Who We Are</h3>
			              	<p>
			                	Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
			              	</p>
			              	<div class="text-center text-lg-start">
				                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
				                  	<span>Read More</span>
				                  	<i class="bi bi-arrow-right"></i>
				                </a>
			              	</div>
			            </div>
		          	</div>
		          	<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
		            	<img src="{{ asset('assets/ndahari/img/about.jpg') }}" class="img-fluid" alt="">
		          	</div>
		        </div>
	      	</div>
	    </section>

	    <section id="values" class="values">
	      	<div class="container" data-aos="fade-up">
		        <header class="section-header">
		          	<h2>Our Values</h2>
		        </header>
		        <div class="row">
		          	<div class="col-lg-4">
			            <div class="box" data-aos="fade-up" data-aos-delay="200">
			              	<img src="assets/ndahari/img/values-1.png" class="img-fluid" alt="">
			              	<h3>Ad cupiditate sed est odio</h3>
			              	<p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
			            </div>
		          	</div>
		          	<div class="col-lg-4 mt-4 mt-lg-0">
			            <div class="box" data-aos="fade-up" data-aos-delay="400">
			              	<img src="assets/ndahari/img/values-2.png" class="img-fluid" alt="">
			              	<h3>Voluptatem voluptatum alias</h3>
			              	<p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
			            </div>
		          	</div>
		          	<div class="col-lg-4 mt-4 mt-lg-0">
			            <div class="box" data-aos="fade-up" data-aos-delay="600">
			              	<img src="assets/ndahari/img/values-3.png" class="img-fluid" alt="">
			              	<h3>Fugit cupiditate alias nobis.</h3>
			              	<p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
			            </div>
		          	</div>
		        </div>
	      	</div>
	    </section>

	    <section id="services" class="services">
	      	<div class="container" data-aos="fade-up">
		        <header class="section-header">
			        <h2>Services</h2>
		        </header>
		        <div class="row gy-4">
		          	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
			            <div class="service-box blue">
			              	<i class="ri-discuss-line icon"></i>
			              	<h3>Nesciunt Mete</h3>
			              	<p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
			              	<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
			            </div>
		          	</div>

		          	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
			            <div class="service-box orange">
			              	<i class="ri-discuss-line icon"></i>
			              	<h3>Eosle Commodi</h3>
			              	<p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
			              	<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
			            </div>
		          	</div>

		          	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
			            <div class="service-box green">
			              	<i class="ri-discuss-line icon"></i>
			              	<h3>Ledo Markt</h3>
			              	<p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
			              	<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
			            </div>
		          	</div>

		          	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
			            <div class="service-box red">
			              	<i class="ri-discuss-line icon"></i>
			              	<h3>Asperiores Commodi</h3>
			              	<p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
			              	<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
			            </div>
		          	</div>

		          	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
			            <div class="service-box purple">
			              	<i class="ri-discuss-line icon"></i>
			              	<h3>Velit Doloremque.</h3>
			              	<p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
			              	<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
			            </div>
		          	</div>

		          	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
			            <div class="service-box pink">
			              	<i class="ri-discuss-line icon"></i>
			              	<h3>Dolori Architecto</h3>
			              	<p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
			              	<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
			            </div>
		          	</div>
		        </div>
	      	</div>
	    </section>

	    <section id="faq" class="faq">
	      	<div class="container" data-aos="fade-up">
		        <header class="section-header">
		          	<h2>F.A.Q</h2>
		          	<p>Frequently Asked Questions</p>
		        </header>

		        <div class="row">
		          	<div class="col-lg-6">
			            <div class="accordion accordion-flush" id="faqlist1">
			              	<div class="accordion-item">
				                <h2 class="accordion-header">
				                  	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
				                    	Non consectetur a erat nam at lectus urna duis?
				                  	</button>
				                </h2>
				                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
				                  	<div class="accordion-body">
				                    	Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
				                  	</div>
				                </div>
			              	</div>

			              	<div class="accordion-item">
				                <h2 class="accordion-header">
				                  	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
				                    	Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
				                  	</button>
				                </h2>
				                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
				                  	<div class="accordion-body">
				                    	Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
				                  	</div>
				                </div>
			              	</div>

			              	<div class="accordion-item">
				                <h2 class="accordion-header">
				                  	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
				                    	Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
				                  	</button>
				                </h2>
				                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
				                  	<div class="accordion-body">
				                    	Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
				                  	</div>
				                </div>
			              	</div>
			            </div>
		          	</div>
		          	<div class="col-lg-6">
			            <div class="accordion accordion-flush" id="faqlist1">
			              	<div class="accordion-item">
				                <h2 class="accordion-header">
				                  	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
				                    	Non consectetur a erat nam at lectus urna duis?
				                  	</button>
				                </h2>
				                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
				                  	<div class="accordion-body">
				                    	Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
				                  	</div>
				                </div>
			              	</div>

			              	<div class="accordion-item">
				                <h2 class="accordion-header">
				                  	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
				                    	Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
				                  	</button>
				                </h2>
				                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
				                  	<div class="accordion-body">
				                    	Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
				                  	</div>
				                </div>
			              	</div>

			              	<div class="accordion-item">
				                <h2 class="accordion-header">
				                  	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
				                    	Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
				                  	</button>
				                </h2>
				                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
				                  	<div class="accordion-body">
				                    	Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
				                  	</div>
				                </div>
			              	</div>
			            </div>
		          	</div>
		        </div>
	      	</div>
	    </section>

	    <section id="clients" class="clients">
	      	<div class="container" data-aos="fade-up">
		        <header class="section-header">
		          	<h2>Our Clients</h2>
		        </header>
		        <div class="clients-slider swiper">
		          	<div class="swiper-wrapper align-items-center">
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
			            <div class="swiper-slide"><img src="{{ asset('assets/ndahari/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
		          	</div>
		          	<div class="swiper-pagination"></div>
		        </div>
	      	</div>
	    </section>
  	</main>

@endsection