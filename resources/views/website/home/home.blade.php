@extends('website.master')
@section('home')
    <section id="home" class="bx-home home-section bx-section padding-tb-80 bg-shape-hero">
        <img id="shape1" class="parallax" src="{{ asset('/') }}website/assets/img/bg/shape-1.png" alt="shape">
        <img id="shape2" class="parallax top" src="{{ asset('/') }}website/assets/img/bg/shape-2.png" alt="shape">
        <img id="shape3" class="parallax left top" src="{{ asset('/') }}website/assets/img/bg/shape-3.png"
            alt="shape">
        <img id="shape4" class="parallax left" src="{{ asset('/') }}website/assets/img/bg/shape-4.png" alt="shape">
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

    <!-- Service section -->
    <section id="service1" class="bx-service-section bx-section padding-tb-80 body-bg">
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
                            <img src="{{ asset('/') }}website/assets/img/service/creative-idea.png" alt="">
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
                            <img src="{{ asset('/') }}website/assets/img/service/connecting-icon.jpg" alt="">
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
                            <img src="{{ asset('/') }}website/assets/img/service/impact.png" alt="">
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
                            <img src="{{ asset('/') }}website/assets/img/service/timely.png" alt="">
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
                            <img src="{{ asset('/') }}website/assets/img/service/experience-vector.png" alt="">
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
@endsection

@section('about-us')
    <section id="about" class="bx-about-section bx-section padding-b-80 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="sec-img" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <img src="{{ asset('/') }}website/assets/img/about/img-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="title">
                            <h2>About us</h2>
                            <p>Welcome to Copy Crafter, where the journey of words begins
                                and stories come to life.
                                While we may be newcomers to the scene, our passion for the craft and dedication to
                                excellence know no bounds. Here's the story of how Copy Crafter emerged to reimagine the
                                world of copywriting:</p>
                            <button class="btn btn-info"><a href="{{route('about.us')}}">Read More....</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
@endsection

@section('portfolio')
    <section id="experience" class="bx-experience-section bx-section padding-b-80">
        <div class="container">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="row mb-m-30">
                <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <h2><span class="primary-clr">Portfolio</span></h2>
                    <p class="p-text" style="color: black; padding-bottom: 40px;">At Copy Crafter, our portfolio is a
                        testament to the
                        artistry and impact of
                        our words. Each project is a brushstroke in our canvas of storytelling, carefully chosen to
                        inspire, engage, and persuade. Here's a glimpse of our diverse expertise:</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="education bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <ul class="timeline">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">E-commerce Brilliance</h5>
                                    <p> Crafting captivating product descriptions that breathe life into your offerings
                                        and transform casual browsers into loyal customers.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Digital Narrative Mastery</h5>
                                    <p> Weave compelling narratives through blog posts and articles that educate,
                                        entertain, and leave readers craving more.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Brand Resonance</h5>
                                    <p>Elevate your brand's voice with website content that not only informs but
                                        immerses visitors in your story.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
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
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Social Media Enchantment</h5>
                                    <p>From catchy captions to thought-provoking posts, we harness the power of social
                                        media to create an authentic connection with your audience.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Email Campaigns that Convert
                                    </h5>
                                    <p>Transform your email campaigns into personalized conversations that drive
                                        engagement and conversions.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
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

                <div class="title border-bottom" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <p class="p-text" style="color: black;">At Copy Crafter, our portfolio is a testament to the
                        artistry and impact of
                        our words. Each project is a brushstroke in our canvas of storytelling, carefully chosen to
                        inspire, engage, and persuade. Here's a glimpse of our diverse expertise:</p>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('process')
    <section id="process" class="bx-about-section bx-section padding-b-80 border-bottom">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2><span class="primary-clr mb-2" style="margin-left: 440px;">Process</span></h2>
                    <p style="padding-bottom: 20px; color: black;">At Copy Crafter, we believe great copywriting is
                        born from a strategic blend of creativity and method.
                        Our meticulously designed process ensures every project is a masterpiece of words:
                    </p>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">

                        <div class="personal-detail">
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Initial Consultation :</span>
                                        <span class="detail">We kick-start with a conversation to understand your brand,
                                            goals, and target audience. This foundation guides every step.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Thematic Strategy :</span>
                                        <span class="detail">We create a tailored strategy that aligns with your
                                            objectives, ensuring every word serves a purpose.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Collaborative Creation :</span>
                                        <span class="detail">Our team of seasoned writers crafts content that strikes the
                                            perfect balance between creativity and precision.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Refinement Iteration :</span>
                                        <span class="detail">Revisions are a crucial part of our process. We fine-tune
                                            until every word resonates perfectly, capturing your brand essence.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6" style="margin-top: 25px;">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">

                        <div class="personal-detail">
                            <div class="mail mb-3">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Quality Assurance :</span>
                                        <span class="detail">Rigorous proofreading and quality checks ensure your content
                                            is impeccable and polished.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail mb-3">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Timely Delivery :</span>
                                        <span class="detail"> We understand that time is of the essence. Our commitment to
                                            deadlines is unwavering, without compromising on quality.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail mb-2">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Client Collaboration :</span>
                                        <span class="detail"> You're an integral part of the process. We value your
                                            insights and feedback throughout the journey.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('service')
    <section id="service" class="bx-about-section bx-section padding-tb-80">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2><span class="primary-clr mb-2" style="margin-left: 440px;">Services</span></h2>
                    <p>At Copy Crafter, our comprehensive suite of unparalleled copywriting services is designed to be the
                        driving force behind your brand's narrative,
                        making your message resonate, inspire action, and leave an indelible mark. Our words are more than
                        just ink on paper;
                        they're the architects of stories that shape perceptions and drive results. Explore the breadth of
                        our offerings:
                    </p>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">

                        <div class="personal-detail">
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Website Content :</span>
                                        <span class="detail">Your digital presence is the gateway to your brand's identity.
                                            Our expert writers sculpt website content that not only informs but captivates,
                                            guiding visitors on a journey that sparks genuine connections and drives
                                            engagement.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Blog Posts and Articles :</span>
                                        <span class="detail">Fuel your content marketing engine with meticulously crafted
                                            blog posts and articles. From thought leadership pieces that establish your
                                            authority to insightful guides that educate and empower,
                                            our words engage and inspire.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Social Media Copy :</span>
                                        <span class="detail">In the fast-paced realm of social media, brevity and impact
                                            are paramount. Our social media copywriters infuse every character with
                                            intention,
                                            crafting captions, posts, and stories that resonate with your audience's
                                            passions</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Product Descriptions :</span>
                                        <span class="detail">The bridge between a product and its consumer lies in the
                                            description. We breathe life into your offerings with product descriptions that
                                            evoke desire,
                                            articulate benefits, and propel conversions.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Email Campaigns :</span>
                                        <span class="detail">Step into the inbox with confidence. Our email campaigns are a
                                            symphony of persuasive prose,
                                            ensuring your messages are opened, read, and acted upon.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6" style="margin-top: 25px;">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">

                        <div class="personal-detail">
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Technical Documentation :</span>
                                        <span class="detail">Communicate complex concepts with clarity. From user manuals
                                            to industry whitepapers,
                                            our technical writing bridges the gap between complexity and
                                            comprehension.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Brand Messaging :</span>
                                        <span class="detail">Your brand is more than a logo; it's a story waiting to be
                                            told. We craft brand messaging that encapsulates your essence,
                                            resonates with your audience, and drives brand loyalty.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Podcast Scripting :</span>
                                        <span class="detail">The power of the spoken word is unparalleled. Our podcast
                                            scripting transforms your ideas into captivating narratives that engage,
                                            entertain, and enlighten your listeners.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Educational Content :</span>
                                        <span class="detail">Share your expertise with the world. Our educational content
                                            spans e-learning modules,
                                            instructional guides, and workshops that empower your audience with
                                            knowledge.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title border-bottom">
                <p class="p-text" style="margin-top: 47px;">As wordsmiths, our canvas knows no bounds. We're driven by the
                    passion to transcend the ordinary and redefine what's possible with words. Every project is a testament
                    to our commitment to innovation, precision, and the art of storytelling. Let's breathe life into your
                    brand's narrative together. Welcome to a world where words shape destinies. Welcome to Copy Crafter.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('image')
    <section id="portfolio" class="bx-portfolio-section bx-section portfolio padding-b-80">
        <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                <h2>Our <span class="primary-clr">Image</span></h2>

            </div>
            <div class="row m-b-minus-24px">
                <div class="portfolio-content">
                    <div>
                        <div class="row">
                            {{-- <div class="col-sm-12" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="portfolio-tabs">
                                    <ul>
                                        <li class="filter" data-filter="all">ALL</li>
                                        <li class="filter" data-filter=".design">DESIGN</li>
                                        <li class="filter" data-filter=".development">DEVELOPMENT</li>
                                        <li class="filter" data-filter=".graphics">GRAPHICS</li>
                                        <li class="filter" data-filter=".templates">Templates</li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="600">
                                <div class="portfolio-content-items">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix graphics templates">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="{{ asset('/') }}website/assets/img/portfolio/img-1.jpg"
                                                        alt="graphics">
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Nitro - Car Service</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="{{ asset('/') }}website/assets/img/portfolio/img-1.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix design">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="{{ asset('/') }}website/assets/img/portfolio/img-2.jpg"
                                                        alt="design">
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Boros - Artificial
                                                            Intelligence</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="{{ asset('/') }}website/assets/img/portfolio/img-2.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix design">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="{{ asset('/') }}website/assets/img/portfolio/img-3.jpg"
                                                        alt="design">
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Mila - Virtual Reality</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="{{ asset('/') }}website/assets/img/portfolio/img-3.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix development">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="{{ asset('/') }}website/assets/img/portfolio/img-4.jpg"
                                                        alt="development">
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Sen - Hotel Website</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="{{ asset('/') }}website/assets/img/portfolio/img-4.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix templates design">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="{{ asset('/') }}website/assets/img/portfolio/img-1.jpg"
                                                        alt="templates">
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Ekka - eCommerce template</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="{{ asset('/') }}website/assets/img/portfolio/img-1.jpg"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12 mix development graphics">
                                            <div class="hovereffect">
                                                <div class="portfolio-img">
                                                    <img src="{{ asset('/') }}website/assets/img/portfolio/img-2.jpg"
                                                        alt="development">
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-info">
                                                        <a class="info" href="#">Bukki - Teck crafts</a>
                                                        <a class="info" data-fancybox="gallery"
                                                            href="{{ asset('/') }}website/assets/img/portfolio/img-2.jpg"><i
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
@endsection

@section('faq')
    {{-- <section id="faq" class="bx-experience-section bx-section padding-b-80">
        <div class="container">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="row mb-m-30">
                <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <h2><span class="primary-clr">FAQs</span></h2>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="education bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <ul class="timeline">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: Why choose Copy Crafter?</h5>
                                    <p> A: We're not just writers; we're storytellers who understand the power of words.
                                        Our commitment to excellence drives every project we undertake.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What industries do you specialize in?</h5>
                                    <p> A: Our versatile expertise spans industries, including but not limited to technology, lifestyle, finance, and healthcare.
                                        We adapt our skills to fit your unique brand.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How do I get started?</h5>
                                    <p>A: It's simple.
                                        Reach out to us through our contact form, and let's begin a conversation about your project's needs and goals.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What if I need revisions?</h5>
                                    <p>A: We pride ourselves on exceeding expectations,
                                        but if revisions are required, we're dedicated to fine-tuning until you're satisfied.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What's your pricing structure?</h5>
                                    <p>A: Our pricing is tailored to your project's scope and requirements. Get in touch to receive a personalized quote.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: Can you handle tight deadlines?</h5>
                                    <p>A: Absolutely! We thrive under pressure and will work closely
                                        with you to meet your deadlines without compromising quality.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="experience bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <ul class="timeline" style="margin-top: 85px;">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How does your content approach differ for B2B and B2C clients?</h5>
                                    <p>A: Our approach is a nuanced dance between business acumen and emotional connection. For B2B, we emphasize value proposition and expertise.
                                        For B2C, we weave emotions into the narrative to resonate with personal aspirations.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How do you ensure consistent brand tone across various content types?
                                    </h5>
                                    <p>A: We create a brand style guide that outlines voice, tone, and key messaging.
                                        This guide acts as a compass, ensuring uniformity and consistency in every piece.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: Can you adapt to technical subjects outside your expertise?
                                    </h5>
                                    <p>A: Absolutely. We believe in the power of research and collaboration. We dive deep into the subject matter,
                                        consulting experts when necessary, to ensure accurate and compelling technical content.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What's your strategy for multilingual content?
                                    </h5>
                                    <p>A: Our team includes multilingual writers and experts in localization.
                                        We ensure your content resonates culturally and linguistically, maintaining its impact across languages.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How do you handle sensitive subjects or controversial topics?
                                    </h5>
                                    <p>A: Sensitive topics demand a delicate touch. We engage in thorough research, consult with subject matter experts,
                                        and craft content that navigates these areas with empathy and respect.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What's your response to shifts in industry trends that require rapid content adjustments?
                                    </h5>
                                    <p>A: We embrace change. Our team is agile and ready to pivot swiftly,
                                        adjusting strategies and content to align with emerging trends and industry developments.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="title border-bottom" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <p class="p-text" style="color: black;">Unlock the potential of storytelling with Copy Crafter.
                        Let's craft narratives that transcend expectations and redefine what words can achieve.
                        Welcome to a world where communication is an art form.</p>
                </div>

            </div>
        </div>
    </section> --}}

    <section id="faq" class="bx-experience-section bx-section padding-tb-80">
        <div class="container">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="row mb-m-30">
                <div class="title" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <h2><span class="primary-clr">FAQs</span></h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="education bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <ul class="timeline">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: Why choose Copy Crafter?</h5>
                                    <p> A: We're not just writers; we're storytellers who understand the power of words.
                                        Our commitment to excellence drives every project we undertake.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What industries do you specialize in?</h5>
                                    <p> A: Our versatile expertise spans industries, including but not limited to
                                        technology, lifestyle, finance, and healthcare.
                                        We adapt our skills to fit your unique brand.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How do I get started?</h5>
                                    <p>A: It's simple.
                                        Reach out to us through our contact form, and let's begin a conversation about your
                                        project's needs and goals.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What if I need revisions?</h5>
                                    <p>A: We pride ourselves on exceeding expectations,
                                        but if revisions are required, we're dedicated to fine-tuning until you're
                                        satisfied.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What's your pricing structure?</h5>
                                    <p>A: Our pricing is tailored to your project's scope and requirements. Get in touch to
                                        receive a personalized quote.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: Can you handle tight deadlines?</h5>
                                    <p>A: Absolutely! We thrive under pressure and will work closely
                                        with you to meet your deadlines without compromising quality.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What's your response to shifts in industry trends that
                                        require rapid content adjustments?
                                    </h5>
                                    <p>A: We embrace change. Our team is agile and ready to pivot swiftly,
                                        adjusting strategies and content to align with emerging trends and industry
                                        developments.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="experience bx-box" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <ul class="timeline" style="margin-top: 120px;">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How does your content approach differ for B2B and B2C
                                        clients?</h5>
                                    <p>A: Our approach is a nuanced dance between business acumen and emotional connection.
                                        For B2B, we emphasize value proposition and expertise.
                                        For B2C, we weave emotions into the narrative to resonate with personal aspirations.
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How do you ensure consistent brand tone across various
                                        content types?
                                    </h5>
                                    <p>A: We create a brand style guide that outlines voice, tone, and key messaging.
                                        This guide acts as a compass, ensuring uniformity and consistency in every piece.
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: Can you adapt to technical subjects outside your
                                        expertise?
                                    </h5>
                                    <p>A: Absolutely. We believe in the power of research and collaboration. We dive deep
                                        into the subject matter,
                                        consulting experts when necessary, to ensure accurate and compelling technical
                                        content.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: What's your strategy for multilingual content?
                                    </h5>
                                    <p>A: Our team includes multilingual writers and experts in localization.
                                        We ensure your content resonates culturally and linguistically, maintaining its
                                        impact across languages.</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Q: How do you handle sensitive subjects or controversial
                                        topics?
                                    </h5>
                                    <p>A: Sensitive topics demand a delicate touch. We engage in thorough research, consult
                                        with subject matter experts,
                                        and craft content that navigates these areas with empathy and respect.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="title border-bottom" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <p class="p-text" style="color: black;">Unlock the potential of storytelling with Copy Crafter.
                        Let's craft narratives that transcend expectations and redefine what words can achieve.
                        Welcome to a world where communication is an art form.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
