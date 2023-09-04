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
                        <a class="navbar-brand" href="index.html"><img
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
                                    <a class="nav-link bx-nav" href="#experience">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bx-nav" href="#news">News</a>
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
    <section id="home" class="bx-home home-section bx-section padding-tb-80 bg-shape-hero">
        <img id="shape1" class="parallax" src="{{ asset('/') }}website/assets/img/bg/shape-1.png" alt="shape">
        <img id="shape2" class="parallax top" src="{{ asset('/') }}website/assets/img/bg/shape-2.png"
            alt="shape">
        <img id="shape3" class="parallax left top" src="{{ asset('/') }}website/assets/img/bg/shape-3.png"
            alt="shape">
        <img id="shape4" class="parallax left" src="{{ asset('/') }}website/assets/img/bg/shape-4.png"
            alt="shape">
        <img id="shape5" class="parallax bottom" src="{{ asset('/') }}website/assets/img/bg/shape-5.png"
            alt="shape">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="basic-details" data-aos="fade-up" data-aos-duration="2000">
                        <div class="info">
                            <span class="primary-color">Welcome to Copy Crafter– Where Words Shape Worlds.</span>
                            {{-- <h1>Isabelle Ryal</h1>
                            <h2>I'm a Web Developer</h2> --}}
                            <p>At Copy Crafter, we wield the art of language to craft compelling narratives,
                                captivate audiences, and transform brands. With a passion for storytelling and an
                                unwavering commitment to excellence, we're more than just copywriters; we're your
                                partners in communication.</p>
                            {{-- <div class="buttons">
                                <a class="custom-btn bx-btn" href="javascript:void(0)">Hire Me</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-img">
                        <div class="profile-detail">
                            <img src="{{ asset('/') }}website/assets/img/bg/girl.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home section End -->

    <!-- Service section -->
    <section id="service" class="bx-service-section bx-section padding-tb-80 body-bg">
        <div class="container">
            <div class="row">
                {{-- <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <p class="light-txt">best it service</p>
                    <h2>It Industries We’re<span class="primary-clr"> Offering</span></h2>
                </div> --}}
                <div class="col-lg-4 col-md-12">
                    <div class="section-card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        {{-- <div class="sr-no">
                            <h6>01</h6>
                        </div> --}}
                        <div class="card-description">
                            <img src="{{ asset('/') }}website/assets/img/service/icon-1.png" alt="">
                            <div class="detailed-txt">
                                <h5>Unleash Creativity</h5>
                                <p> Our words have the power to evoke emotions,
                                    spark curiosity, and ignite action. From the first sentence to the last, every word
                                    is carefully chosen to leave a lasting impression.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="section-card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        {{-- <div class="sr-no">
                            <h6>02</h6>
                        </div> --}}
                        <div class="card-description">
                            <img src="{{ asset('/') }}website/assets/img/service/icon-2.png" alt="">
                            <div class="detailed-txt">
                                <h5>Elevate Your Brand</h5>
                                <p>Elevate your brand's identity with copy that resonates.
                                    Whether you're a startup on the rise or an established business seeking a fresh
                                    voice, we tailor our approach to align with your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="section-card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        {{-- <div class="sr-no">
                            <h6>03</h6>
                        </div> --}}
                        <div class="card-description">
                            <img src="{{ asset('/') }}website/assets/img/service/icon-3.png" alt="">
                            <div class="detailed-txt">
                                <h5>Connecting Beyond Words</h5>
                                <p>It's not just about what we write, it's about how your audience connects. We delve
                                    into your brand's DNA to deliver messages that forge genuine connections.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="border-bottom" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300"></div> --}}
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-12">
                    <div class="section-card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        {{-- <div class="sr-no">
                            <h6>01</h6>
                        </div> --}}
                        <div class="card-description">
                            <img src="{{ asset('/') }}website/assets/img/service/icon-1.png" alt="">
                            <div class="detailed-txt">
                                <h5>Strategic Impact</h5>
                                <p>
                                    Our work isn't just about eloquence;
                                    it's about strategy.
                                    We infuse data-driven insights to ensure your message reaches the right people at
                                    the right time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="section-card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        {{-- <div class="sr-no">
                            <h6>02</h6>
                        </div> --}}
                        <div class="card-description">
                            <img src="{{ asset('/') }}website/assets/img/service/icon-2.png" alt="">
                            <div class="detailed-txt">
                                <h5>Timely Delivery</h5>
                                <p>
                                    Deadlines are our allies, not obstacles. We understand the urgency
                                    of modern business and deliver exceptional content promptly,
                                    without compromising on quality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="section-card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        {{-- <div class="sr-no">
                            <h6>03</h6>
                        </div> --}}
                        <div class="card-description">
                            <img src="{{ asset('/') }}website/assets/img/service/icon-3.png" alt="">
                            <div class="detailed-txt">
                                <h5> Experience Excellence</h5>
                                <p>
                                    With a team of seasoned writers, we're setting new standards in copywriting.
                                    Every project is an opportunity to redefine what's possible with words.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <p class="p-text">Ready to tell your brand's story? Let's embark on a journey of words that
                            captivate,
                            compel, and convert. Together, we'll create narratives that resonate, inspire, and leave a
                            lasting imprint on your audience's minds.
                            <br>Step into a world where words shape worlds. Welcome to Copy Crafter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section End -->

    <!-- Start About section -->
    <section id="about" class="bx-about-section bx-section padding-b-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="personal-detail">
                        <div class="content">
                            <div class="left">
                                <div class="name pb">
                                    <span class="info">Igniting a Dream:</span>
                                    <span class="detail">Copy Crafter was born from a shared dream—to redefine the
                                        power of words and make them resonate with every heart they touch. We might
                                        be new, but our aspiration to craft narratives that inspire action is as old
                                        as storytelling itself. </span>
                                </div>
                                <div class="age pb">
                                    <span class="info">Boundless Enthusiasm:</span>
                                    <span class="detail">Our team brings together a dynamic mix of fresh talent and
                                        seasoned wisdom. While we may not have decades of experience, our enthusiasm
                                        knows no bounds, and our unquenchable thirst to learn and innovate fuels our
                                        every word.</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="ph pb">
                                    <span class="info">Precision Meets Passion:</span>
                                    <span class="detail">Copy Crafter embodies the perfect fusion of precision and
                                        passion. We meticulously curate words that don't just convey information but
                                        elicit emotions, transforming ordinary messages into extraordinary
                                        experiences.</span>
                                </div>

                                <div class="email pb">
                                    <span class="info">A Tapestry of Ideas:</span>
                                    <span class="detail">We might be newbies, but we're rich in imagination and
                                        brimming with ideas. Our team thrives on collaboration, weaving a tapestry of
                                        creativity to capture your brand's essence in every sentence.</span>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="left">
                                <div class="name pb">
                                    <span class="info">Driven by Impact: </span>
                                    <span class="detail">Every project we undertake is a canvas for impact. Our goal
                                        isn't just to create content; it's to create moments that resonate, messages
                                        that spark connections, and narratives that leave a lasting imprint.</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="ph pb">
                                    <div class="age pb">
                                        <span class="info">Your Partner in Progress</span>
                                        <span class="detail">We're not just your copywriters; we're your partners in
                                            progress. Your success is our success, and every word we craft is infused
                                            with
                                            the spirit of collaboration, dedication, and the unwavering belief in the
                                            power
                                            of storytelling.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="title">
                            <h2>About us</h2>
                            {{-- <h2>Creativity bleeds from the
                                pen of<span class="primary-clr"> inspiration</span></h2> --}}
                            <p>Welcome to Copy Crafter, where the journey of words begins
                                and stories come to life.
                                While we may be newcomers to the scene, our passion for the craft and dedication to
                                excellence know no bounds. Here's the story of how Copy Crafter emerged to reimagine the
                                world of copywriting:</p>
                        </div>
                        <div class="sec-img" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                            <img src="{{ asset('/') }}website/assets/img/about/img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About section -->

    <!-- Start Experience & Education section -->
    <section id="experience" class="bx-experience-section bx-section padding-tb-80">
        <div class="container">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="row mb-m-30">
                <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <h2><span class="primary-clr">Portfolio</span></h2>
                    <p class="p-text" style="color: black;">At Copy Crafter, our portfolio is a testament to the
                        artistry and impact of
                        our words. Each project is a brushstroke in our canvas of storytelling, carefully chosen to
                        inspire, engage, and persuade. Here's a glimpse of our diverse expertise:</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="education bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <ul class="timeline">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">E-commerce Brilliance</h5>
                                    <p> Crafting captivating product descriptions that breathe life into your offerings
                                        and transform casual browsers into loyal customers.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Digital Narrative Mastery</h5>
                                    <p> Weave compelling narratives through blog posts and articles that educate,
                                        entertain, and leave readers craving more.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Brand Resonance</h5>
                                    <p>Elevate your brand's voice with website content that not only informs but
                                        immerses visitors in your story.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Thought Leadership Manifestos</h5>
                                    <p>Craft whitepapers and thought leadership articles that establish your authority
                                        and spark industry conversations.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="experience bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <ul class="timeline" style="margin-top: 85px;">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Social Media Enchantment</h5>
                                    <p>From catchy captions to thought-provoking posts, we harness the power of social
                                        media to create an authentic connection with your audience.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Email Campaigns that Convert
                                    </h5>
                                    <p>Transform your email campaigns into personalized conversations that drive
                                        engagement and conversions.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Technical Wizardry
                                    </h5>
                                    <p>Communicate complex concepts with clarity, making technical information
                                        accessible and engaging.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <p class="p-text" style="color: black;">At Copy Crafter, our portfolio is a testament to the
                        artistry and impact of
                        our words. Each project is a brushstroke in our canvas of storytelling, carefully chosen to
                        inspire, engage, and persuade. Here's a glimpse of our diverse expertise:</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Experience & Education Section -->

    <!-- Start Portfolio Section -->
    <section id="portfolio" class="bx-portfolio-section bx-section portfolio padding-tb-80">
        <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                <p class="ligh-title">Portfolio</p>
                <h2>My <span class="primary-clr">Portfolio</span></h2>

            </div>
            <div class="row m-b-minus-24px">
                <div class="portfolio-content">
                    <div>
                        <div class="row">
                            <div class="col-sm-12" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="portfolio-tabs">
                                    <ul>
                                        <li class="filter" data-filter="all">ALL</li>
                                        <li class="filter" data-filter=".design">DESIGN</li>
                                        <li class="filter" data-filter=".development">DEVELOPMENT</li>
                                        <li class="filter" data-filter=".graphics">GRAPHICS</li>
                                        <li class="filter" data-filter=".templates">Templates</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="600">
                                <div class="portfolio-content-items">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix graphics templates">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="assets/img/portfolio/img-1.jpg" alt="graphics">
                                                    <h3><span>3D Graphics</span><span>Templates</span></h3>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Nitro - Car Service</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="assets/img/portfolio/img-1.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix design">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="assets/img/portfolio/img-2.jpg" alt="design">
                                                    <h3><span>Web Design</span></h3>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Boros - Artificial
                                                            Intelligence</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="assets/img/portfolio/img-2.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix design">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="assets/img/portfolio/img-3.jpg" alt="design">
                                                    <h3><span>Web Design</span></h3>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Mila - Virtual Reality</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="assets/img/portfolio/img-3.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix development">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="assets/img/portfolio/img-4.jpg" alt="development">
                                                    <h3><span>Development</span></h3>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Sen - Hotel Website</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="assets/img/portfolio/img-4.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix templates design">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="assets/img/portfolio/img-1.jpg" alt="templates">
                                                    <h3><span>Templates</span><span>Web Design</span></h3>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Ekka - eCommerce template</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="assets/img/portfolio/img-1.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix development graphics">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="assets/img/portfolio/img-2.jpg" alt="development">
                                                    <h3><span>Development</span><span>3D Graphics</span></h3>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Bukki - Teck crafts</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="assets/img/portfolio/img-2.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- Start News Section -->
    <section id="news" class="bx-news-section bx-section padding-tb-80 bg-shape">
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
    </section>
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
/html>
