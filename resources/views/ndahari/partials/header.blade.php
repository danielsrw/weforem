<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('ndahari.home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/ndahari/img/logo.png') }}" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('ndahari.home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="">About</a></li>
                <li><a class="nav-link scrollto" href="">Gallery</a></li>
                <li><a class="nav-link scrollto" href="">Contact</a></li>
                <li><a class="getstarted scrollto" href="#donate">Donate Now</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>