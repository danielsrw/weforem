<section class="ftco-section ftco-client">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-2">
            <div class="col-md-4 heading-section ftco-animate">
                <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Clients</small></span>
                <h2 class="mb-4">Our Clients</h2>
            </div>
            <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                <div class="pl-md-4 border-line">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-client owl-carousel">
                    @foreach ($clients as $client)
                        <div class="item">
                            <a href="{{ $client['link'] }}" class="client text-center p-5">
                                <img src="/storage/{{ $client->image }}" alt="{{ $client['name'] }}" style='width: 140px;'>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
