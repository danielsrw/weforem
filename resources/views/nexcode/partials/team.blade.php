<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Expert Team</small></span>
                <h2 class="mb-4">Our Architect Team</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            @foreach ($team as $member)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url('/storage/{{ $member['image'] }}');"></div>
                        <div class="text px-4 pt-4">
                            <h3>{{ $member['name'] }}</h3>
                            <span class="position mb-2">{{ $member['title'] }}</span>
                            <div class="faded">
                                <p>{{ $member['desc'] }}</p>
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="{{ $member['twitter'] }}"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="{{ $member['facebook'] }}"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="{{ $member['linkedin'] }}"><span class="icon-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="{{ $member['google'] }}"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="{{ $member['instagram'] }}"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
