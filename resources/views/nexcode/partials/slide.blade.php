<section class="home-slider js-fullheight owl-carousel bg-white">
    @foreach ($slides as $slide)
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight" style="background-image:url('storage/{{ $slide['image'] }}');">
                        <h3 class="vr">{{ $slide['subtitle'] }}</h3>
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <h1 class="mb-4">{{ $slide['title'] }}</h1>
                            <p>{{ $slide['description'] }}</p>
                            <p><a href="{{ route('nexcode.projects') }}" class="btn btn-primary px-4 py-3 mt-3">View our works</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url({{ asset('assets/nexcode/images/bg_2.jpg') }});">
                    <h3 class="vr">Subtitle here...</h3>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <h1 class="mb-4">Title here...</h1>
                        <p>Lorem ipsum description here...</p>
                        <p><a href="" class="btn btn-primary px-4 py-3 mt-3">View our works</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>
