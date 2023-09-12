<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Borox</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="ShShuvo">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('/') }}website/assets/img/favicon/favicon.png" sizes="32x32">

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/owl.carousel.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" id="main_style" href="{{ asset('/') }}website/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/responsive.css">

</head>

<body class="body-bg">

    <!-- Loader -->
    <div id="bx-overlay">
        <span class="loader"> </span>
    </div>

    <!-- Header section -->
    <header class="bg bx-static">
        <div class="container">
            <div class="nav-sec padding-b-50">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('home')}}"><img
                                src="{{ asset('/') }}website/assets/img/logo/logo.png" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav" id="top-menu">
                                <li class="nav-item active">
                                    <a class="nav-link bx-nav" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#experience">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#process">Process</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#service">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <a class="custom-btn bx-btn m-r-5px" href="javascript:void(0)">Get a quote</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Home section -->
    @yield('home')

    <!-- Home section End -->


    <!-- Start About section -->
    @yield('about-us')

    <!-- End About section -->

    <!-- Start Experience & Education section -->
    @yield('portfolio')

    <!-- End Experience & Education Section -->

    <!-- Start About section -->
    @yield('process')

    <!-- End About section -->


    <!-- Start About section -->
    @yield('service')

    <!-- End About section -->

    <!-- Start Portfolio Section -->
    @yield('image')
    <!-- End Portfolio Section -->

     <!-- Start FAQ Section -->
     @yield('faq')
     <!-- End FAQ Section -->

    <!-- Start News Section -->
    {{-- <section id="news" class="bx-news-section bx-section padding-tb-80 bg-shape">
        <div class="container" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="row">
                <div class="title">
                    <p class="light-txt">blogs</p>
                    <h2>Latest<span class="primary-clr"> news</span></h2>
                </div>
            </div>
            <div class="bx-news-detail">
                <div class="row">
                    <div class="news-slider">
                        <div class="carousel-wrap">
                            <div class="owl-carousel news-carousel">
                                <div class="item">
                                    <div class="card" data-aos="fade-up" data-aos-duration="2000"
                                        data-aos-delay="400">
                                        <img src="assets/img/news/img-2.jpg" alt="">
                                        <div class="news-card-details">
                                            <p class="primary-clr">By Admin <span class="comments">- 04
                                                    Comments</span>
                                            </p>
                                            <h5>Lorem ipsum dolor sit amet.</h5>
                                            <div class="read-more-btn">Read More <a class="info"><i
                                                        class="fa-solid fa-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" data-aos="fade-up" data-aos-duration="2000"
                                        data-aos-delay="400">
                                        <img src="assets/img/news/img-3.jpg" alt="">
                                        <div class="news-card-details">
                                            <p class="primary-clr">By Admin <span class="comments">- 04
                                                    Comments</span>
                                            </p>
                                            <h5>Lorem ipsum dolor sit amet.</h5>
                                            <div class="read-more-btn">Read More <a class="info"><i
                                                        class="fa-solid fa-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" data-aos="fade-up" data-aos-duration="2000"
                                        data-aos-delay="400">
                                        <img src="assets/img/news/img-2.jpg" alt="">
                                        <div class="news-card-details">
                                            <p class="primary-clr">By Admin <span class="comments">- 04
                                                    Comments</span>
                                            </p>
                                            <h5>Lorem ipsum dolor sit amet.</h5>
                                            <div class="read-more-btn">Read More <a class="info"><i
                                                        class="fa-solid fa-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-content offset-lg-6">
                        <div class="news-right-img">
                            <img src="assets/img/news/img-1.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- End News Section -->

    <!-- Start Contact us Section -->
    <section id="contact" class="bx-contact-section bx-section padding-tb-80 body-bg">
        <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                <p class="light-txt">form</p>
                <h2>Get In<span class="primary-clr"> Touch</span></h2>
            </div>
            <form>
                <div class="row">

                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="border-box">
                            <div class="form-group">
                                <input type="text" class="form-control" id="fname" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="umail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-none" id="subject"
                                    placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="custom-btn bx-btn-1">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <!-- End Contact us Section -->

    <!-- Start Footer -->
    <footer class="footer bg-clr">
        <div class="container">
            <div class="bx-footer-detail">
                <div class="bx-copy">
                    Copyright &copy;
                    <a class="site-name" href="index.html">Borox</a>
                    all rights reserved. Powered by Borox.
                </div>
                <div class="bx-privacy">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Page Scroll Top -->
    <div id="scrollup">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <!-- Plugins JS -->
    <script src="{{ asset('/') }}website/assets/js/plugins/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/jquery.fancybox.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/mixitup.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/fontawesome.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/aos.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery.parallaxmouse.min.js"></script>

    <!-- Main Js -->
    <script src="{{ asset('/') }}website/assets/js/main.js"></script>

</body>

