<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sensive Blog - Home</title>
        <link rel="icon" href="{{ asset('site/img/Fevicon.png') }}" type="image/png">

        @section('Style')
        <link rel="stylesheet" href="{{ asset('site/vendors/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/owl-carousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/owl-carousel/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
        @show
    </head>
    <body>

        @section('Header-Menu')
        <!--================Header Menu Area =================-->

        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="{{ route('Home') }}">
                            <img src="{{ asset('site/img/logo.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav justify-content-end">
                                <li class="nav-item {{ Route::is('Home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('Home') }}">Home</a>
                                </li>
                                <li class="nav-item {{ Route::is('Blog') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('Blog') }}">Blog</a>
                                </li>
                                <li class="nav-item {{ Route::is('About') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('About') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!--================Header Menu Area =================-->
        @show

        @if( Route::is('Home') )
            <!--================Hero Banner start =================-->  
            @include('site.template.banner')
            <!--================Hero Banner end =================-->
        @endif

        <!--================Hero Banner start =================--> 
        @if( !Route::is('Home') )
            @section('Header-Banner')

            @show
        @endif
        <!--================Hero Banner end =================--> 

        <!--================ Start Content Area =================-->
        @section('Content')
            
        @show
        <!--================ End Content Area =================-->

        @section('Footer')
        <!--================ Start Footer Area =================-->

        <footer class="footer-area section-padding">
            <div class="container">
                <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Sensive Blog <i class="fa fa-heart" aria-hidden="true"></i></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </footer>

        <!--================ End Footer Area =================-->
        @show

        <script src="{{ asset('site/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('site/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('site/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('site/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('site/js/mail-script.js') }}"></script>
        <script src="{{ asset('site/js/main.js') }}"></script>
    </body>
</html>