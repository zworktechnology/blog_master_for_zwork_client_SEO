@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')


    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg" data-bg-image="assets/frontend/image/aboutus/About_us.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">ABOUT US</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('about.us') }}">About Us</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Hero inner End ======= -->

        <!-- ======= About Start ======= -->
        <section class="about about-agency about--inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-30">
                        <div class="about-image about-image--agency
                    position-relative">
                            <img src="assets/frontend/image/aboutus/aboutus_side_1.png" alt="About" class="about-image__agency_big wow fadeInDown
                      mb-30" data-wow-delay=".2s">
                            <img src="assets/frontend/image/aboutus/aboutus_side_2.png" alt="About" class="about-image__agency_small wow fadeInUp
                      mb-30" data-wow-delay=".4s">
                            <div class="video">
                                <a class="video-link" href="https://www.youtube.com/embed/FLs5REX8VE0" data-fancybox="">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 mb-30">
                        <div class="about-agency__right">
                            <div class="section-software p-0 mb-20">
                                <span class="section-software__title_small text-uppercase
                        primary-text-color">
                                    01 YEARS OF EXPERIENCE
                                </span>
                                <h2 class="section-software__title_big">
                                    We do what we love & we <br>
                                    love what we do.
                                </h2>
                            </div>
                            <div class="about-software__content about-agency__content">
                                <span class="title title--small">
                                    At ZWORK TECHNOLOGY, we're passionate about helping businesses establish and grow their online
                                    presence. Our team specializes in website design, web development, graphic design, mobile app
                                    development, and digital marketing. We believe in building strong relationships with our clients
                                    by understanding their business, goals, and target audience to create customized solutions.
                                </span>
                                <span class="title title--small">
                                    Our highly experienced professionals stay on the cutting edge of the latest digital trends and
                                    technologies to provide innovative and effective solutions. We pride ourselves on exceptional
                                    customer service and always put our clients first. Whether you need a new website, powerful
                                    e-commerce platform, or strategic digital marketing campaign, ZWORK TECHNOLOGY has the expertise
                                    and creativity to bring your vision to life. Contact us today to learn more!
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= About End ======= -->

        <!-- ======= Testimonials Area Start ======= -->
        <section class="review pt-125 pb-100 d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section-heading section-software text-center
                    mb-50">
                            <span class="section-heading__title_small">
                                TESTIMONIALS
                            </span>
                            <h2 class="section-software__title_big">
                                What They Say Client’s
                            </h2>
                            <p class="section-software__paragraph">
                                Grursus mal suada faci lisis Lorem ipsum dolarorit more
                                ametion consectetur elit. Vesti at bulum nec odio aea the
                                dumm rsus consectetur elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row testi-active">
                    <div class="col-12 testi-active__col mb-30">
                        <div class="review-software">
                            <div class="review-software__image">
                                <img class="image" width="120" height="120" src="assets/frontend/images/home2/review-author-software-1.png" alt="Author Review">
                                <i class="flaticon flaticon-left-quote icon icon--one"></i>
                            </div>
                            <div class="review-software__content">
                                <em class="paragraph">
                                    “ From the moment we launched our usability test, it
                                    took only a week to get useful results.”
                                </em>
                                <h3 class="heading heading--review">Marian Chris</h3>
                                <span class="title title--review">CEO founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 testi-active__col mb-30">
                        <div class="review-software">
                            <div class="review-software__image">
                                <img class="image" width="120" height="120" src="assets/frontend/images/home2/review-author-software-2.png" alt="Author Review">
                                <i class="flaticon flaticon-left-quote icon icon--two"></i>
                            </div>
                            <div class="review-software__content">
                                <em class="paragraph">
                                    “ From the moment we launched our usability test, it
                                    took only a week to get useful results.”
                                </em>
                                <h3 class="heading heading--review">Jack Mudson</h3>
                                <span class="title title--review">Managing Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 testi-active__col mb-30">
                        <div class="review-software">
                            <div class="review-software__image">
                                <img class="image" width="120" height="120" src="assets/frontend/images/home2/review-author-software-3.png" alt="Author Review">
                                <i class="flaticon flaticon-left-quote icon icon--three"></i>
                            </div>
                            <div class="review-software__content">
                                <em class="paragraph">
                                    “ From the moment we launched our usability test, it
                                    took only a week to get useful results.”
                                </em>
                                <h3 class="heading heading--review">Michael Brian</h3>
                                <span class="title title--review">Vice President</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 testi-active__col mb-30">
                        <div class="review-software">
                            <div class="review-software__image">
                                <img class="image" width="120" height="120" src="assets/frontend/images/home2/review-author-software-3.png" alt="Author Review">
                                <i class="flaticon flaticon-left-quote icon icon--three"></i>
                            </div>
                            <div class="review-software__content">
                                <em class="paragraph">
                                    “ From the moment we launched our usability test, it
                                    took only a week to get useful results.”
                                </em>
                                <h3 class="heading heading--review">Michael Brian</h3>
                                <span class="title title--review">Vice President</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Testimonials Area End ======= -->

        <!-- ======= faq Start ======= -->
        <section class="faq pt-125 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading text-center mb-50">
                            <span class="section-heading__title_small">
                                Frequently asked questions
                            </span>
                            <h2 class="section-heading__title_big">
                                Offer The Latest Software And Solutions To Our customers!
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How to start a business from scratch?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse animated
                          fadeInUp collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Starting a business from scratch can be challenging, but with a clear vision, a solid plan,
                                                and determination, it's possible. Start by identifying your market, creating a business
                                                plan, securing funding, building a team, and establishing your online presence. Focus on
                                                providing value to your customers and stay flexible as you navigate the ups and downs of
                                                entrepreneurship.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How can we help your business?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse animated
                          fadeInUp collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                At ZWORK TECHNOLOGY, we understand the challenges that businesses face in the ever-changing
                                                digital landscape. That's why we offer a full range of digital services to help you
                                                establish and grow your online presence. Whether you need a new website, a mobile app, or a
                                                strategic digital marketing campaign, our team of experienced professionals has the
                                                expertise and creativity to deliver high-quality solutions that are tailored to your unique
                                                needs. We're dedicated to helping you achieve your digital marketing goals and succeed in
                                                today's competitive online world.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Why website is essential for any business?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse
                          animated fadeInUp collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                In today's digital age, a website is essential for any business to establish an online
                                                presence and reach a wider audience. A website serves as a virtual storefront, offering
                                                customers a convenient way to learn about your products or services, make purchases, and
                                                connect with your brand. It also provides valuable data and insights that can help you
                                                optimize your marketing strategy and drive business growth. Without a website, your business
                                                may struggle to compete and stay relevant in a rapidly changing digital landscape.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Importance of a mobile app for business?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse
                          animated fadeInUp collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                A mobile app is essential for any business to reach customers on-the-go and enhance
                                                engagement. It offers a more personalized and convenient experience, enabling customers to
                                                access your products or services anytime, anywhere. A mobile app can also provide valuable
                                                data and insights to help you optimize your marketing strategy and build brand loyalty.
                                                Without a mobile app, your business may miss out on the opportunity to connect with an
                                                increasingly mobile audience.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            Why Custom software for your business?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse animated
                          fadeInUp collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                Custom software provides tailored solutions that are designed to meet the specific needs of
                                                your business. It offers greater flexibility, scalability, and security than off-the-shelf
                                                software, and can help streamline your operations and improve your bottom line. Custom
                                                software also enables you to stay ahead of the competition by providing a unique competitive
                                                advantage.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            How Graphic Design Make your Brand Unique?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse
                          animated fadeInUp collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                Graphic design is a critical component of branding that can make your business stand out in
                                                a crowded market. It communicates your message and values to your customers through visual
                                                elements such as logos, color schemes, and typography. Effective graphic design can
                                                establish brand recognition and build trust and credibility with your audience, setting your
                                                business apart from competitors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Is my business need Digital Marketing?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse
                          animated fadeInUp collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                In today's highly competitive online marketplace, digital marketing is essential for any
                                                business to attract and retain customers. It enables you to reach a wider audience through
                                                targeted campaigns on social media, search engines, and other digital channels. Digital
                                                marketing provides valuable data and insights to optimize your marketing strategy and drive
                                                business growth. Without digital marketing, your business may struggle to keep up with
                                                competitors and reach its full potential.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            How to build a E-Commerce Business?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse
                          animated fadeInUp collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>
                                                To build an E-Commerce business, start by identifying your niche and target audience,
                                                creating a brand and a business plan, building your website or online store, sourcing
                                                products or services, and implementing a marketing strategy to drive traffic and sales.
                                                Focus on providing a seamless user experience and exceptional customer service to build
                                                brand loyalty and drive growth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= About End ======= -->

        <!-- ======= Contact Area Start ======= -->
        @include('components.consulation')
        <!-- ======= Contact Area End ======= -->
    </main>
    <!-- ======= Main Wrapper End ======= -->

    @include('components.footer')

    <!-- /.content-wrapper -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    @include('components.script')

</body>

</html>
