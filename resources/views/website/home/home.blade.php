@extends('website.master')
@section('home')
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

    
@endsection

@section('about-us')
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
@endsection

@section('portfolio')
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
@endsection

@section('process')
    <section id="process" class="bx-about-section bx-section padding-b-80">
        <div class="container">
            <div class="row">
            <div class="title">
                <h2><span class="primary-clr mb-2" style="margin-left: 440px;">Process</span></h2>
                <p>At Copy Crafter, we believe great copywriting is
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
                                        <span class="detail">We kick-start with a conversation to understand your brand, goals, and target audience. This foundation guides every step.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Thematic Strategy :</span>
                                        <span class="detail">We create a tailored strategy that aligns with your objectives, ensuring every word serves a purpose.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Collaborative Creation :</span>
                                        <span class="detail">Our team of seasoned writers crafts content that strikes the perfect balance between creativity and precision.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Refinement Iteration :</span>
                                        <span class="detail">Revisions are a crucial part of our process. We fine-tune until every word resonates perfectly, capturing your brand essence.</span>
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
                                        <span class="detail">Rigorous proofreading and quality checks ensure your content is impeccable and polished.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail mb-3">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Timely Delivery :</span>
                                        <span class="detail"> We understand that time is of the essence. Our commitment to deadlines is unwavering, without compromising on quality.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail mb-2">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Client Collaboration :</span>
                                        <span class="detail"> You're an integral part of the process. We value your insights and feedback throughout the journey.</span>
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
    <section id="service" class="bx-about-section bx-section padding-b-80">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2><span class="primary-clr mb-2" style="margin-left: 440px;">Services</span></h2>
                    <p>At Copy Crafter, our comprehensive suite of unparalleled copywriting services is designed to be the driving force behind your brand's narrative,
                        making your message resonate, inspire action, and leave an indelible mark. Our words are more than just ink on paper;
                        they're the architects of stories that shape perceptions and drive results. Explore the breadth of our offerings:
                    </p>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="detailed-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">

                        <div class="personal-detail">
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Website Content :</span>
                                        <span class="detail">Your digital presence is the gateway to your brand's identity. Our expert writers sculpt website content that not only informs but captivates, guiding visitors on a journey that sparks genuine connections and drives engagement.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Blog Posts and Articles :</span>
                                        <span class="detail">Fuel your content marketing engine with meticulously crafted blog posts and articles. From thought leadership pieces that establish your authority to insightful guides that educate and empower,
                                            our words engage and inspire.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Social Media Copy :</span>
                                        <span class="detail">In the fast-paced realm of social media, brevity and impact are paramount. Our social media copywriters infuse every character with intention,
                                            crafting captions, posts, and stories that resonate with your audience's passions</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Product Descriptions :</span>
                                        <span class="detail">The bridge between a product and its consumer lies in the description. We breathe life into your offerings with product descriptions that evoke desire,
                                            articulate benefits, and propel conversions.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Email Campaigns :</span>
                                        <span class="detail">Step into the inbox with confidence. Our email campaigns are a symphony of persuasive prose,
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
                                        <span class="detail">Communicate complex concepts with clarity. From user manuals to industry whitepapers,
                                            our technical writing bridges the gap between complexity and comprehension.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Brand Messaging :</span>
                                        <span class="detail">Your brand is more than a logo; it's a story waiting to be told. We craft brand messaging that encapsulates your essence,
                                            resonates with your audience, and drives brand loyalty.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Podcast Scripting :</span>
                                        <span class="detail">The power of the spoken word is unparalleled. Our podcast scripting transforms your ideas into captivating narratives that engage,
                                            entertain, and enlighten your listeners.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mail">
                                <div class="mail">
                                    <div class="address">
                                        <span class="info">Educational Content :</span>
                                        <span class="detail">Share your expertise with the world. Our educational content spans e-learning modules,
                                            instructional guides, and workshops that empower your audience with knowledge.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <p class="p-text" style="margin-top: 47px;">As wordsmiths, our canvas knows no bounds. We're driven by the passion to transcend the ordinary and redefine what's possible with words. Every project is a testament to our commitment to innovation, precision, and the art of storytelling. Let's breathe life into your brand's narrative together. Welcome to a world where words shape destinies. Welcome to Copy Crafter.
                </p>
            </div>
        </div>
    </section>
@endsection