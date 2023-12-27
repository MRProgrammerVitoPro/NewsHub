@extends('site.template.template')

@section('Header-Banner')
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner hero-banner--sm" style="background:url({{ asset('site/img/hero/hero.png') }}) left center no-repeat;">
                <div class="hero-banner__content">
                    <h1>Blog</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('Home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('Content')

    <!--================ Start Blog Post Area =================-->

    <section class="blog-post-area section-margin">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card1.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card2.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card3.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card4.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card4.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card4.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card4.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb-card4.png') }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-themify-favicon"></i>2 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="#">
                                        <h3>
                                            Fast cars and rickety bridges as 
                                            he grand tour returns
                                        </h3>
                                    </a>
                                    <p>
                                        Vel aliquam quis, nulla pede mi commodo no tristique nam 
                                        hac luctus torquent velit felis lone commodo pellentesque
                                    </p>
                                    <a class="button" href="#">
                                        Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <nav class="blog-pagination justify-content-center d-flex">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <i class="ti-angle-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <i class="ti-angle-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Start Blog Post Siddebar -->

                
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="single-sidebar-widget__title">Newsletter</h4>
                            <div class="form-group mt-30">
                                <div class="col-autos">
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                            </div>
                            <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                        </div>
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="single-sidebar-widget__title">Catgory</h4>
                            <ul class="cat-list mt-20">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Software</p>
                                        <p>(09)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>(12)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Shopping</p>
                                        <p>(02)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="single-sidebar-widget__title">Popular Post</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb1.png') }}" alt="">
                                        <ul class="thumb-info">
                                            <li>
                                                <a href="#">Adam Colinge</a>
                                            </li>
                                            <li>
                                                <a href="#">Dec 15</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="#">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                                 <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb2.png') }}" alt="">
                                        <ul class="thumb-info">
                                            <li>
                                                <a href="#">Adam Colinge</a>
                                            </li>
                                            <li>
                                                <a href="#">Dec 15</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="#">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb3.png') }}" alt="">
                                        <ul class="thumb-info">
                                            <li>
                                                <a href="#">Adam Colinge</a>
                                            </li>
                                            <li>
                                                <a href="#">Dec 15</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="#">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb1.png') }}" alt="">
                                        <ul class="thumb-info">
                                            <li>
                                                <a href="#">Adam Colinge</a>
                                            </li>
                                            <li>
                                                <a href="#">Dec 15</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="#">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="{{ asset('site/img/blog/thumb/thumb2.png') }}" alt="">
                                        <ul class="thumb-info">
                                            <li>
                                                <a href="#">Adam Colinge</a>
                                            </li>
                                            <li>
                                                <a href="#">Dec 15</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="#">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- End Blog Post Siddebar -->

            </div>
        </div>

    </section>

    <!--================ End Blog Post Area =================-->

@endsection
