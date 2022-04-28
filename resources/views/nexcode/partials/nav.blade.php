<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/nexcode/images/logo.png') }}" style="width: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('nexcode.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('nexcode.about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('nexcode.projects') }}" class="nav-link">Project</a></li>
                <li class="nav-item"><a href="{{ route('nexcode.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ route('nexcode.team') }}" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="{{ route('nexcode.blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('nexcode.contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
