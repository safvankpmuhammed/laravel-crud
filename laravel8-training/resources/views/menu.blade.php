    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        LARAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>