<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="/img/bsea-logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/card.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Khmer Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chenla&family=Koulen&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('home',app()->getLocale()) }}" class="navbar-brand p-0">
                    <img src="/img/bsea-logo.png" width="50" height="50" class="d-inline-block align-middle" alt="brand logo">
                    <h1 class="d-inline-block align-middle m-0 brand-title">BSEA Cambodia</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home',app()->getLocale()) }}" class="nav-item nav-link">{{__('msg.home')}}</a>
                        <a href="{{ route('about',app()->getLocale()) }}" class="nav-item nav-link">{{__('msg.about')}}</a>
                        <a href="{{ route('contact',app()->getLocale()) }}" class="nav-item nav-link">{{__('msg.contact')}}</a>
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('msg.login') }}</a>
                                </li>
                            @endif
                        @else
                            @if(Auth::user()->isAdmin==1)    
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminhome') }}">{{ __('msg.dashbaord') }}</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('msg.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle lang" data-bs-toggle="dropdown">{{__('msg.lang')}}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route(Route::currentRouteName(),'kh') }}" class="dropdown-item lang-kh">ភាសាខ្មែរ</a>
                                <a href="{{ route(Route::currentRouteName(),'en') }}" class="dropdown-item lang-en">English</a>
                                <a href="{{ route(Route::currentRouteName(),'ch') }}" class="dropdown-item lang-cn">中文</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        @yield('heading')
     
        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-white mb-4">Get In Touch</h5>
                            <a class="text-white" href="https://goo.gl/maps/TYmLWon48gfHAK9f9"><i class="fa fa-map-marker-alt me-3"></i>#84,#86,#88 st.Betong, Borey The Varina Sen Sok, Krang Thnong, Sen Sok, Phnom Penh, Cambodia</a>
                            <br><a class="text-white"><i class="fa fa-phone-alt me-3"></i>+855 69 668 788</a>
                            <br><a class="text-white"><i class="fa fa-envelope me-3"></i>info@bseacambodia.org</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <script src="/js/activePage.js"></script>
    <script src="/js/script.js" defer></script>

</body>
</html>