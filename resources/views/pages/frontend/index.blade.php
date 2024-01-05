@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper overflow-hidden">
        <!-- ======= Hero Start ======= -->
        <section class="hero overflow-hidden">
            <div class="slider slider--active">
                <div class="slider__single slider__bg container-custom" data-bg-image="assets/frontend/image/banner/banner1.jpg" style="height: 580px;">
                    <img src="assets/frontend/image/banner/slider-shape-1.png" alt="" class="slider__shape slider__shape--one" data-animation="slideInDown" data-delay=".4s" data-duration="2s">
                    <img src="assets/frontend/image/banner/slider-shape-2.png" alt="" class="slider__shape slider__shape--two" data-animation="slideInRight" data-delay=".5s" data-duration="2.5s">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="slider-content">
                                    <span class="slider-content__title_small ml13" data-animation="fadeInUp" data-delay=".4s">
                                        INNOVATIVE IT SOLUTIONS</span>
                                    <h2 class="slider-content__title_big title title--big" data-animation="fadeInUp" data-delay=".6s">
                                        Start Small, Dream Big
                                    </h2>
                                    <p class="slider-content__text" data-animation="fadeInUp" data-delay=".8s">
                                        Let's ZWork technology Helps you Grow Your Business from Beginning, We are Hear for you and Your Business Growth. Start Today With Us!
                                    </p>
                                    <a href="{{ route('about.us') }}" class="btn btn--common
                      btn--primary rt-button-animation-out" data-animation="fadeInUp" data-delay="1s">
                                        About Us
                                        <svg width="34px" height="16px" viewbox="0 0 34.53 16" xml:space="preserve">
                                            <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                            <g class="rt-button-cap-fake">
                                                <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__single slider__bg container-custom" data-bg-image="assets/frontend/image/banner/banner2.jpg" style="height: 580px;">
                    <img src="assets/frontend/image/banner/slider-shape-1.png" alt="" class="slider__shape slider__shape--three" data-animation="zoomIn" data-delay=".4s" data-duration="2.5s">
                    <img src="assets/frontend/image/banner/slider-shape-4.png" alt="" class="slider__shape slider__shape--four" data-animation="slideInUp" data-delay=".3s" data-duration="2s">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="slider-content slider-content--two">
                                    <span class="slider-content__title_small title title--small
                      ml13" data-animation="fadeInUp" data-delay=".2s">
                                        WAY TO YOUR DIGITAL DREAM</span>
                                    <h2 class="slider-content__title_big title title--big" data-animation="fadeInUp" data-delay=".4s">
                                        Think Big, Dream Big
                                    </h2>
                                    <p class="slider-content__text paragraph" data-animation="fadeInUp" data-delay=".6s">
                                        Dreaming big in digital? Zwork Technology is here to help. Our team of experts can assist you in
                                        realizing your digital ambitions and achieving success.
                                    </p>
                                    <a href="{{ route('service') }}" class="btn btn--common
                      btn--primary rt-button-animation-out" data-animation="fadeInUp" data-delay=".8s">
                                        Services
                                        <svg width="34px" height="16px" viewbox="0 0 34.53 16" xml:space="preserve">
                                            <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                            <g class="rt-button-cap-fake">
                                                <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__single slider__bg container-custom" data-bg-image="assets/frontend/image/banner/banner3.jpg" style="height: 580px;">
                    <img src="assets/frontend/image/banner/slider-shape-5.png" alt="Slide" class="slider__shape slider__shape--five" data-animation="zoomIn" data-delay=".3s" data-duration="2s">
                    <img src="assets/frontend/image/banner/slider-shape-6.png" alt="" class="slider__shape slider__shape--six" data-animation="slideInLeft" data-delay=".3s" data-duration="2.2s">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10">
                                <div class="slider-content slider-content--two">
                                    <span class="slider-content__title_small title title--small uppercase" data-animation="fadeInUp" data-delay=".2s">
                                        YOUR SUCCESS IS OUR PRIORITY</span>
                                    <h2 class="slider-content__title_big title title--big" data-animation="fadeInUp" data-delay=".4s">
                                        Take your First Step
                                    </h2>
                                    <p class="slider-content__text paragraph" data-animation="fadeInUp" data-delay=".6s">
                                        Preplanning and diligence are crucial to achieving success. Let Zwork Technology be your partner in
                                        this journey with our customized digital services
                                    </p>
                                    <a href="{{ route('contact') }}" class="btn btn--common
                      btn--primary rt-button-animation-out" data-animation="fadeInUp" data-delay=".8s">
                                        Contact
                                        <svg width="34px" height="16px" viewbox="0 0 34.53 16" xml:space="preserve">
                                            <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                            <g class="rt-button-cap-fake">
                                                <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Hero End ======= -->

        <!-- ======= About Start ======= -->
        <section class="about about--area about--padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-30">
                        <div class="section-heading mb-40">
                            <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".4s">About
                                Company</span>
                            <h2 class="section-heading__title_big wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                Keeping Our Promise, Achieving Your Goals
                            </h2>
                        </div>
                        <div class="about-content">
                            <h3 class="about-content__title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".7s">
                                Over <span class="primary-text-color">30+</span> Happy Customers
                            </h3>
                            <p class="about-content__text wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">
                                Dedicated to Your Success - Zwork Technology is all about honesty, transparency and delivering results.
                                With a team of experts using the latest technology, we strive to help businesses grow and achieve their
                                goals. Join us on this journey to success.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 mb-30 text-md-center">
                        <div class="about-content__image about-content__image_right
                position-relative">
                            <img width="690" height="617" src="assets/frontend/image/aboutus/about_company.png" alt="About
                  Our Zwork Technology Company" class="about-img wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.2s">
                            <div class="about-content__experience">
                                <div class="about-content__experience_years">01</div>
                                <div class="about-content__experience_title">
                                    Years <span>EXPERIENCE IN IT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= About End ======= -->

        <!-- ======= Service Area Start ======= -->
        <section class="services services--padding section-bg-common">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-heading mb-45">
                            <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".4s">
                                our service
                            </span>
                            <h2 class="section-heading__title_big wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".6s">
                                We offer Wide <br> Range of Services
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-button mb-45">
                            <a href="{{ route('service') }}" class="btn btn--common
                  btn--primary rt-button-animation-out wow fadeInRight" data-wow-delay=".7s" data-wow-duration=".9s">See More
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="16px" viewbox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                        <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".4s">
                        <div class="services__item mb-50">
                            <div class="services__item_overlay"></div>
                            <header class="services__item_header d-flex align-items-center">
                                <i class="flaticon flaticon-web-development services__item_icon"></i>
                                <h3 class="services__item_title">
                                    <a href="{{ route('web.development') }}">Web Development</a>
                                </h3>
                            </header>
                            <div class="services__item_content">
                                <p class="services__item_paragraph">
                                    Transform Your Online Presence with Our Professional Web Development Services. Let's Build Your Vision
                                    Together.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration=".6s">
                        <div class="services__item mb-50">
                            <div class="services__item_overlay"></div>
                            <header class="services__item_header d-flex align-items-center">
                                <i class="flaticon flaticon-android services__item_icon">
                                </i>
                                <h3 class="services__item_title">
                                    <a href="{{ route('mobile.app.development') }}">Mobile App</a>
                                </h3>
                            </header>
                            <div class="services__item_content">
                                <p class="services__item_paragraph">
                                    Empower Your Business with Our Custom Mobile App Development Services. Let's Build Your Next Big Thing
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration=".8s">
                        <div class="services__item mb-50">
                            <div class="services__item_overlay"></div>
                            <header class="services__item_header d-flex align-items-center">
                                <i class="flaticon flaticon-programing
                    services__item_icon">
                                </i>
                                <h3 class="services__item_title">
                                    <a href="{{ route('custom.software') }}">Custom Software</a>
                                </h3>
                            </header>
                            <div class="services__item_content">
                                <p class="services__item_paragraph">
                                    Streamline Your Workflow with Our Custom Software Development Services. Let's Build Your Ideal
                                    Solution
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".8s" data-wow-duration="1s">
                        <div class="services__item mb-50">
                            <div class="services__item_overlay"></div>
                            <header class="services__item_header d-flex align-items-center">
                                <i class="flaticon flaticon-graphic-design services__item_icon"></i>
                                <h3 class="services__item_title">
                                    <a href="{{ route('graphics.desiging') }}">Graphic Designing</a>
                                </h3>
                            </header>
                            <div class="services__item_content">
                                <p class="services__item_paragraph">
                                    Bring Your Ideas to Life with Our Professional Graphic Design Services. Let's Create Your Unique Brand
                                    Identity
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1.2s">
                        <div class="services__item mb-50">
                            <div class="services__item_overlay"></div>
                            <header class="services__item_header d-flex align-items-center">
                                <i class="flaticon flaticon-analytics services__item_icon"></i>
                                <h3 class="services__item_title">
                                    <a href="{{ route('digital.marketing') }}">Digital Marketing</a>
                                </h3>
                            </header>
                            <div class="services__item_content">
                                <p class="services__item_paragraph">
                                    Drive Your Business Forward with Our Bold Digital Marketing Services. Let's Connect with Your Target
                                    Audience
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s">
                        <div class="services__item mb-50">
                            <div class="services__item_overlay"></div>
                            <header class="services__item_header d-flex align-items-center">
                                <i class="flaticon flaticon-deadline services__item_icon"></i>
                                <h3 class="services__item_title">
                                    <a href="{{ route('social.media') }}">Social Media Handling</a>
                                </h3>
                            </header>
                            <div class="services__item_content">
                                <p class="services__item_paragraph">
                                    Maximize Your Online Reach with Our Professional Social Media Management Services. Let's Boost Your
                                    Online Presence
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Service Area End ======= -->

        <!-- ======= Service Key Area Start ======= -->
        <section class="services-key services-key--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section-heading text-center mb-30">
                            <span class="section-heading__title_small">
                                We Offer best IT Services
                            </span>
                            <h2 class="section-heading__title_big">
                                Who, What, How, & Where
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="services-key__navbar">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        <i class="flaticon flaticon-management"></i> Who
                                    </button>
                                </li>
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <i class="flaticon flaticon-tech"></i> What
                                    </button>
                                </li>
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                        <i class="flaticon flaticon-settings"></i> How
                                    </button>
                                </li>
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">
                                        <i class="flaticon flaticon-location"></i> Where
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services-key__tabbar pt-50">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-team
                              services__item_icon services-key__content_icon"></i>
                                                    <h3 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Our Team</a>
                                                    </h3>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Customer-focused technicians providing exceptional service and support
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-medal
                              services__item_icon services-key__content_icon"></i>
                                                    <h2 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Our Satisfied Clients</a>
                                                    </h2>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Streamline Your Online Identity with Our Web Development Services
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-analysis
                              services__item_icon services-key__content_icon"></i>
                                                    <h2 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Our Target Audience</a>
                                                    </h2>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Small to medium-sized businesses seeking reliable Digital support
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-development
                              services__item_icon services-key__content_icon"></i>
                                                    <h2 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Our Partners</a>
                                                    </h2>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Strategic business alliances that enhance our capabilities and reach.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="services__item services__tech text-center
                          mb-30">
                                                <div class="services__item_overlay
                            services__tech_overlay"></div>
                                                <header class="services__item_header mb-0">
                                                    <i class="flaticon flaticon-website
                              services__item_icon services__tech_icon"></i>
                                                    <h4 class="services__item_title
                              services__tech_title">
                                                        <a href="JavaScript:Void(0);">Web Development</a>
                                                    </h4>
                                                </header>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="services__item services__tech text-center
                          mb-30">
                                                <div class="services__item_overlay
                            services__tech_overlay"></div>
                                                <header class="services__item_header mb-0">
                                                    <i class="flaticon flaticon-android
                              services__item_icon services__tech_icon"></i>
                                                    <h4 class="services__item_title
                              services__tech_title">
                                                        <a href="JavaScript:Void(0);">Mobile App</a>
                                                    </h4>
                                                </header>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="services__item services__tech text-center
                          mb-30">
                                                <div class="services__item_overlay
                            services__tech_overlay"></div>
                                                <header class="services__item_header mb-0">
                                                    <i class="flaticon flaticon-web-development
                              services__item_icon services__tech_icon"></i>
                                                    <h4 class="services__item_title
                              services__tech_title">
                                                        <a href="JavaScript:Void(0);">E Commerce</a>
                                                    </h4>
                                                </header>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                            <div class="services__item services__tech text-center
                          mb-30">
                                                <div class="services__item_overlay
                            services__tech_overlay"></div>
                                                <header class="services__item_header mb-0">
                                                    <i class="flaticon flaticon-programing
                              services__item_icon services__tech_icon"></i>
                                                    <h4 class="services__item_title
                              services__tech_title">
                                                        <a href="JavaScript:Void(0);">Custom Software</a>
                                                    </h4>
                                                </header>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                                            <div class="services__item services__tech text-center
                          mb-30">
                                                <div class="services__item_overlay
                            services__tech_overlay"></div>
                                                <header class="services__item_header mb-0">
                                                    <i class="flaticon flaticon-graphic-design
                              services__item_icon services__tech_icon"></i>
                                                    <h4 class="services__item_title
                              services__tech_title">
                                                        <a href="JavaScript:Void(0);">Graphics Designing</a>
                                                    </h4>
                                                </header>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.5s">
                                            <div class="services__item services__tech text-center
                          mb-30">
                                                <div class="services__item_overlay
                            services__tech_overlay"></div>
                                                <header class="services__item_header mb-0">
                                                    <i class="flaticon
                              flaticon-analytics
                              services__item_icon services__tech_icon"></i>
                                                    <h4 class="services__item_title
                              services__tech_title">
                                                        <a href="JavaScript:Void(0);">Digital Marketing</a>
                                                    </h4>
                                                </header>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-software
                              services__item_icon services-key__content_icon"></i>
                                                    <h3 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Flexible Solution</a>
                                                    </h3>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Flexible options that can be adapted to changing circumstances
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-cyber-security
                              services__item_icon services-key__content_icon"></i>
                                                    <h2 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Being Proactive</a>
                                                    </h2>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Providing ongoing support and maintenance to ensure smooth operations
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-deadline
                              services__item_icon services-key__content_icon"></i>
                                                    <h2 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Cutting-edge Tech</a>
                                                    </h2>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Staying up-to-date with the latest trends and innovations in the IT industry
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                            <div class="services__item services-key__content mb-30">
                                                <div class="services__item_overlay
                            services-key__content_overlay"></div>
                                                <header class="services__item_header
                            services-key__content_header">
                                                    <i class="flaticon flaticon-hierarchical-structure
                              services__item_icon services-key__content_icon"></i>
                                                    <h2 class="services__item_title
                              services-key__content_title">
                                                        <a href="JavaScript:Void(0);">Streamlined Project</a>
                                                    </h2>
                                                </header>
                                                <div class="services__item_content
                            services-key__content_text">
                                                    <p class="services__item_paragraph
                              services-key__content_paragraph">
                                                        Minimizing downtime and disruptions to your business operations
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="services__awards mb-30">
                                                <img src="assets/frontend/image/location/trichy.jpg" alt="" class="services__awards_board" style="height: 120px; width: 200px; border-radius: 10px;">
                                                <h3 class="services__awards_title">
                                                    <a href="javascript:void(0)">Tiruchirappalli</a>
                                                </h3>
                                                <p class="services__awards_text">
                                                    No. 10/2A, KSH Illam, First Floor SIMCO Road, Rajaji St, near Maharam's Sweets 'n' Bakes, LIC Colony, Ayyappa Nagar, Tiruchirappalli, Tamil Nadu, India - 620021
                                                </p>
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
        <!-- ======= Service Key Area End ======= -->

        <!-- ======= Solution Area Start ======= -->
        <div class="support support--bg support--padding secondary-bg-color pt-95 parallaxie" data-bg-image="assets/frontend/image/support-bg-shape.png" style="background-image: url('assets/frontend/image/support-bg-shape.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 14.7899px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- ======= Solution Area End ======= -->

        <!-- ======= Case Studies Area Start ======= -->
        <section class="case case--minus pt-100 pb-125">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="section-heading section-heading--style3 mb-50">
                            <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                WHAT WE DID
                            </span>
                            <h2 class="section-heading__title_big text-white wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
                                Our Portfolio
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="section-button mb-50">
                            <a href="{{ route('portfolio') }}" class="btn btn--common btn--primary
                  rt-button-animation-out wow fadeInRight" data-wow-delay=".9s" data-wow-duration=".7s">
                                See More
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="16px" viewbox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                        <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="case-wrapper">
                    <div class="row case-active">
                        <div class="col">
                            <div class="case-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                <div class="case-item__image">
                                    <a href="https://arkinfraindia.com/" target="_blank">
                                        <img width="712" height="763" src="assets/frontend/image/portfolio/arkinfraindia.png" alt="Case
                        Studies">
                                    </a>
                                </div>
                                <div class="case-item__content secondary-bg-color
                    text-center">
                                    <h5 class="text-white">
                                        <a href="https://arkinfraindia.com/" target="_blank">Ark Infra Constructions</a>
                                    </h5>
                                    <span>Website</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="case-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
                                <div class="case-item__image">
                                    <a href="https://vernaconstruction.com/" target="_blank">
                                        <img width="712" height="763" src="assets/frontend/image/portfolio/vernaconstruction.png" alt="Case
                        Studies">
                                    </a>
                                </div>
                                <div class="case-item__content secondary-bg-color
                    text-center">
                                    <h5 class="text-white">
                                        <a href="https://vernaconstruction.com/" target="_blank">Verna Construction</a>
                                    </h5>
                                    <span>Website</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="case-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".9s">
                                <div class="case-item__image">
                                    <a href="https://friendswedding.in/" target="_blank">
                                        <img width="712" height="763" src="assets/frontend/image/portfolio/friendswedding.png" alt="Case
                        Studies">
                                    </a>
                                </div>
                                <div class="case-item__content secondary-bg-color
                    text-center">
                                    <h5 class="text-white">
                                        <a href="https://friendswedding.in/" target="_blank">Friends Wedding</a>
                                    </h5>
                                    <span>Website</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="case-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <div class="case-item__image">
                                    <a href="https://akshayaaengineering.com/" target="_blank">
                                        <img width="712" height="763" src="assets/frontend/image/portfolio/akshayaaengineering.png" alt="Case
                        Studies">
                                    </a>
                                </div>
                                <div class="case-item__content secondary-bg-color
                    text-center">
                                    <h5 class="text-white">
                                        <a href="https://akshayaaengineering.com/" target="_blank">Akshayaa Engineering</a>
                                    </h5>
                                    <span>Website</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="case-item wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="case-item__image">
                                    <a href="https://newstarroadways.com/" target="_blank">
                                        <img width="712" height="763" src="assets/frontend/image/portfolio/newstarroadways.png" alt="Case
                        Studies">
                                    </a>
                                </div>
                                <div class="case-item__content secondary-bg-color
                    text-center">
                                    <h5 class="text-white">
                                        <a href="https://newstarroadways.com/" target="_blank">New Star Roadways</a>
                                    </h5>
                                    <span>Website</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="case-item wow fadeInUp" data-wow-delay="1.3s" data-wow-duration="1.5s">
                                <div class="case-item__image">
                                    <a href="https://sreemadapalli.in/" target="_blank">
                                        <img width="712" height="763" src="assets/frontend/image/portfolio/sreemadapalli.png" alt="Case
                        Studies">
                                    </a>
                                </div>
                                <div class="case-item__content secondary-bg-color
                    text-center">
                                    <h5 class="text-white">
                                        <a href="https://sreemadapalli.in/" target="_blank">Sree Madapalli</a>
                                    </h5>
                                    <span>Website & Custom Software</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Case Studies Area End ======= -->

        <!-- ======= Testimonials Area Start ======= -->
        <section class="review review--bg review--padding position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-heading mb-55 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                            <span class="section-heading__title_small"> TESTIMONIALS </span>
                            <h2 class="section-heading__title_big">
                                What they Clients Say!
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-wrapper">
                <div class="container-fluid">
                    <div class="row review--active">
                        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration=".5s">
                            <div class="review-block">
                                <div class="review-block__content">
                                    <img class="review-block__quote_icon" src="assets/frontend/image/left-quote.png" alt="Quotes Left">
                                    <h3 class="review-block__title">“Committed to Quality”</h3>
                                    <p>
                                        Working with Zwork Technology has been a game-changer for our business. They transformed our website
                                        into a modern and user-friendly platform, which has helped us reach new customers and increase
                                        sales. The team is professional, responsive, and always delivers high-quality work.
                                    </p>
                                </div>
                                <div class="review-block__auth">
                                    <div class="review-block__auth_info">
                                        <h3 class="review-block__auth_name">Muthu</h3>
                                        <span class="review-block__auth_title">From Verna Constructions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration=".5s">
                            <div class="review-block">
                                <div class="review-block__content">
                                    <img class="review-block__quote_icon" src="assets/frontend/image/left-quote.png" alt="Quotes Left">
                                    <h3 class="review-block__title">“Qualified Employees”</h3>
                                    <p>
                                        The mobile app developed by Zwork Technology has exceeded our expectations. Not only does it look
                                        great, but it's also intuitive and easy to use. Our customers love it and it has helped us
                                        streamline our business operations. We're so glad we chose Zwork Technology for our project.
                                    </p>
                                </div>
                                <div class="review-block__auth">
                                    <div class="review-block__auth_info">
                                        <h3 class="review-block__auth_name">Raja</h3>
                                        <span class="review-block__auth_title">From Allhighcare</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration=".7s">
                            <div class="review-block">
                                <div class="review-block__content">
                                    <img class="review-block__quote_icon" src="assets/frontend/image/left-quote.png" alt="Quotes Left">
                                    <h3 class="review-block__title">“Satisfied Clients”</h3>
                                    <p>
                                        Our digital marketing campaign with Zwork Technology has been a huge success. They helped us reach
                                        our audience and drive more traffic to our website. The team is knowledgeable and
                                        professional, they always updated on progress of our campaign. We highly recommend
                                        their digital marketing.
                                    </p>
                                </div>
                                <div class="review-block__auth">
                                    <div class="review-block__auth_info">
                                        <h3 class="review-block__auth_name">Angelo Prem</h3>
                                        <span class="review-block__auth_title">From Ark Infra Constructions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="review-block">
                                <div class="review-block__content">
                                    <img class="review-block__quote_icon" src="assets/frontend/image/left-quote.png" alt="Quotes Left">
                                    <h3 class="review-block__title">“Qualified Employees”</h3>
                                    <p>
                                        Zwork Technology did excellent job with our custom software project. They took the
                                        time to understand our business needs and delivered a solution that exceeded our expectations. The
                                        software has streamlined our operations and made our work more efficient. We highly recommend Zwork Technology.
                                    </p>
                                </div>
                                <div class="review-block__auth">
                                    <div class="review-block__auth_info">
                                        <h3 class="review-block__auth_name">Balaji</h3>
                                        <span class="review-block__auth_title">From Sree Madapalli</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Testimonials Area End ======= -->

        <!-- ======= Counter Area Start ======= -->
        <section class="counter counter--bg counter--padding parallaxie" data-bg-image="assets/frontend/image/Home_count.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                        <div class="counter__item text-center">
                            <span class="counter__item_count text-white counter-number" data-num="30">30</span>
                            <h3 class="counter__item_title text-white">Happy Clients</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
                        <div class="counter__item text-center">
                            <span class="counter__item_count text-white counter-number" data-num="50">50</span>
                            <h3 class="counter__item_title text-white">
                                Our Projects
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".9s">
                        <div class="counter__item text-center">
                            <span class="counter__item_count text-white counter-number" data-num="09">09</span>
                            <h3 class="counter__item_title text-white">Skilled Experts</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                        <div class="counter__item text-center">
                            <span class="counter__item_count text-white counter-number" data-num="1">1</span>
                            <h3 class="counter__item_title text-white">Years</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Counter Area End ======= -->

        <!-- ======= Contact Area Start ======= -->
        <section class="contact contact--padding" data-bg-image="assets/frontend/image/contact-bg-shape.png" style="background-image: url('assets/frontend/image/contact-bg-shape.png');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-30">
                        <div class="contact-address contact-address--bg" data-bg-image="assets/frontend/image/index_contactus.jpg">
                            <ul>
                                <li class="contact-address__item mb-20">
                                    <div class="contact-address__item_icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-address__item_text">
                                        <h3 class="text-white">Our Location</h3>
                                        <p class="text-white">
                                            Tiruchirappalli
                                        </p>
                                    </div>
                                </li>
                                <li class="contact-address__item mb-20">
                                    <div class="contact-address__item_icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-address__item_text">
                                        <h3 class="text-white">Email Address</h3>
                                        <p class="text-white">zworktechnology@gmail.com</p>
                                        <p class="text-white">info@zworktechnology.com</p>
                                    </div>
                                </li>
                                <li class="contact-address__item mb-40">
                                    <div class="contact-address__item_icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-address__item_text">
                                        <h3 class="text-white">Call Us Free</h3>
                                        <p class="text-white">+91 8098 5656 86</p>
                                    </div>
                                </li>
                                <li class="contact-address__item">
                                    <a href="https://api.whatsapp.com/send/?phone=%2B918098565686" target="_blank" style="width: 390px;">
                                        <button type="submit" class="contact-form__button" style="background-color: transparent; border: inset; border-color: white;">
                                            CHAT ON WHATSAPP
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-30">
                        <form autocomplete="off" method="POST" action="{{ route('enquiry.store') }}" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section-heading mb-45">
                                        <span class="section-heading__title_small">
                                            Get In Touch
                                        </span>
                                        <h2 class="section-heading__title_big">
                                            Ready to Make Your Business the Bee's Knees? Get More Productive Today!
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" class="contact-form__input" placeholder="Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input name="email" type="text" class="contact-form__input" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6">
                                    <input name="phone_number" type="text" class="contact-form__input" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <select class="contact-form__input" name="services" required>
                                        <option value="Other Service">Other Service</option>
                                        <option value="Web Development & Designing">Web
                                            Development & Designing</option>
                                        <option value="Mobile App Development">Mobile App
                                            Development</option>
                                        <option value="E-Commerce Solution">E-Commerce Solution</option>
                                        <option value="CMS, CRM, & ERP Soluation">CMS, CRM, & ERP
                                            Soluation</option>
                                        <option value="Custom Software Development">Custom
                                            Software Development</option>
                                        <option value="Graphics Desiging">Graphics Desiging</option>
                                        <option value="Digital Marketing & SEO">Digital Marketing
                                            & SEO</option>
                                        <option value="Social Media Handling">Social Media
                                            Handling</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="contact-form__input
                      contact-form__input_textarea" name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="contact-form__button">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Area End ======= -->
    </main>
    <!-- ======= Main Wrapper End ======= -->

    @include('components.footer ')

    <!-- /.content-wrapper -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    @include('components.script')

</body>

</html>
