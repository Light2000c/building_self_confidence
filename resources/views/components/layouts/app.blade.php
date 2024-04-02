<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @livewireStyles

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- css --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireStyles

</head>

<body>


    <div id="app">
        <div>
            <div class="d-flex justify-content-end bg-primary">
                <div class="mt-2 mb-2 me-2">
                    @if (Auth::user())
                        <a href="{{ route('dashboard') }}" class="text-white m-2" style="text-decoration: none"><i
                                class="bi bi-person-fill me-1"></i>{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('dashboard') }}" class="text-white m-2" style="text-decoration: none"><i
                                class="bi bi-person-fill me-1"></i>Account</a>
                    @endif
                    <a href="{{ route('login') }}" class="text-white m-2" style="text-decoration: none">Login</a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-sm-4">
            <div class="container">
                <a class="navbar-brand" style="font-size: bolder;" href="{{ url('/') }}">
                    BRAND
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="{{ request()->is('home') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="{{ request()->is('skills-and-strategies') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('skills') }}">Skills & Strategies</a>
                        </li>
                        <li class="{{ request()->is('activities-and-excercises') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('activities') }}">Activities & Exercises</a>
                        </li>
                        <li class="{{ request()->is('community-and-peer-support') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('community') }}">Community & Peer Support</a>
                        </li>
                           {{-- <li class="{{ request()->is('supports-and-services') ? 'nav-item active' : 'nav-item' }}"><a
                                class="nav-link" href="{{ route('support') }}">Resources: Supports & Services</a> </li> --}}
                                <li  class="{{ request()->is('supports-and-services') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
                                    <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Resources
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('support') }}">Supports & Services</a></li>
                                    </ul>
                                </li>
                        <li
                            class="{{ request()->is('inpspiration-goals-and-impact') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('inspiration') }}">Inspiration, Goals, & Impact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        {{ $slot }}


        <div class="bg-dark mt-5">
            <div class="bg-light p-2">
                <div class="d-flex justify-content-end mt-3 mb-3 me-3">
                    <span><a href=""><i class="bi bi-instagram m-2"></i></a></span>
                    <span><a href=""><i class="bi bi-facebook m-2"></i></a></span>
                    <span><a href=""><i class="bi bi-twitter m-2"></i></a></span>
                </div>
            </div>
            <div class="p-3">
                <div class="row mt-5">
                    <div class="col-sm-12 col-lg-4 mb-4">
                        <a class="navbar-brand text-white" style="font-size: bolder;" href="{{ url('/') }}">
                            BRAND
                        </a>
                        <div class="mt-3">
                            <p class="text-white text-light ">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Veniam sed
                                incidunt saepe sint nisi voluptas nihil labore fugit quod quos perferendis minima illo
                                veritatis obcaecati laborum ex. Quia quod sed assumenda!
                            </p>
                            <p class=""><a href="" class="text-light" style="text-decoration: none;"><i
                                        class="bi bi-envelope-at me-2 text-primary"></i>
                                    example@gmail.com</a></p>
                            <p class=""><a href="" class="text-light" style="text-decoration: none;"><i
                                        class="bi bi-phone-fill me-2 text-primary"></i>
                                    +2348131658436</a></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-4">
                        <div class="text-white text-start text-lg-center">
                            <h5>Quick Links</h5>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Skills & Strategies</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Activities & Exercise</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Community & Peer Support</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Support & Services</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Inspiration, Goals & Impact</a></p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 mb-4">
                        <div class="text-white text-start text-lg-center">
                            <h5>Navigate</h5>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Home</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Login</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Register</a></p>
                            <p class="text-light"><a href="" class="text-white"
                                    style="text-decoration: none;">Account</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light p-2">
                <div class="d-flex justify-content-end mt-3 mb-3 me-3">

                </div>
            </div>
        </div>



    </div>

    @livewireScripts

    {{-- Bootstrap cdn script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            delay: 300,
            duration: 2000,
            easing: 'ease',
            once: false,
            mirror: true,
        });
    </script>
</body>

</html>