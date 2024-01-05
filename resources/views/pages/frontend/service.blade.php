@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="assets/frontend/image/service/Service_banner.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">SERVICE</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('service') }}">Service</a>
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

        <!-- ======= Services Agency Start ======= -->
        <section class="services services-solutions
            services-solutions--minus">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="services-agency__wrapper">
                            <div class="row g-0">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="services-software services-item">
                                        <header class="services-software__header header">
                                            <i class="flaticon flaticon-software icon"></i>
                                            <h4 class="heading">
                                                <a href="#">Flexible Solution</a>
                                            </h4>
                                        </header>
                                        <div class="services-software__content content">
                                            <p class="paragraph">
                                                Flexible options that can be adapted to changing circumstances
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="services-software services-item
                          services-item--border">
                                        <header class="services-software__header header">
                                            <i class="flaticon flaticon-deadline icon"></i>
                                            <h4 class="heading">
                                                <a href="#">Cutting-edge Tech</a>
                                            </h4>
                                        </header>
                                        <div class="services-software__content content">
                                            <p class="paragraph">
                                                Staying up-to-date with the latest trends and innovations in the IT industry
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="services-software services-item">
                                        <header class="services-software__header header">
                                            <i class="flaticon flaticon-hierarchical-structure icon"></i>
                                            <h4 class="heading">
                                                <a href="#">Streamlined Project</a>
                                            </h4>
                                        </header>
                                        <div class="services-software__content content">
                                            <p class="paragraph">
                                                Minimizing downtime and disruptions to your business operations
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
        <!-- ======= Services Agency End ======= -->

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
                                    At ZWORKTECHNOLOGY, we're passionate about helping businesses establish and grow their online
                                    presence. Our team specializes in website design, web development, graphic design, mobile app
                                    development, and digital marketing. We believe in building strong relationships with our clients
                                    by understanding their business, goals, and target audience to create customized solutions.
                                </span>
                                <span class="title title--small">
                                    Our highly experienced professionals stay on the cutting edge of the latest digital trends and
                                    technologies to provide innovative and effective solutions. We pride ourselves on exceptional
                                    customer service and always put our clients first. Whether you need a new website, powerful
                                    e-commerce platform, or strategic digital marketing campaign, ZWORKTECHNOLOGY has the expertise
                                    and creativity to bring your vision to life. Contact us today to learn more!
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= About End ======= -->

        <!-- ======= Service Area Start ======= -->
        <section class="featured pt-120 pb-100 secondary-bg-color">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section-agency text-center mb-50">
                            <h2 class="section-agency__title_big text-white">
                                Our Service
                            </h2>
                            <span class="section-agency__line section-agency__line_one
                      color-secondary">
                            </span>
                            <span class="section-agency__line section-agency__line_two
                      color-secondary">
                            </span>
                            <span class="section-agency__line section-agency__line_three
                      color-secondary">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-web-development icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('web.development') }}">Web Development</a>
                                </h4>
                                <p class="paragraph">
                                    Transform Your Online Presence with Our Professional Web Development Services. Let's Build Your
                                    Vision Together.
                                </p>
                                <a href="{{ route('web.development') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-android icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('mobile.app.development') }}">Mobile App</a>
                                </h4>
                                <p class="paragraph">
                                    Empower Your Business with Our Custom Mobile App Development Services. Let's Build Your Next Big
                                    Thing
                                </p>
                                <a href="{{ route('mobile.app.development') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-code icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('ecommerce.soluation') }}">E-Commerce</a>
                                </h4>
                                <p class="paragraph">
                                    Transforming your website and store into a fully functional online store with our e-commerce services
                                </p>
                                <a href="{{ route('ecommerce.soluation') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-tech icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('cms.crm.erp.soluation') }}">CMS, CRM, & ERP</a>
                                </h4>
                                <p class="paragraph">
                                    Transforming businesses with our all-in-one CMS, CRM, and ERP solution. Streamline, optimize, elevate.
                                </p>
                                <a href="{{ route('cms.crm.erp.soluation') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-programing icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('custom.software') }}">Custom Software</a>
                                </h4>
                                <p class="paragraph">
                                    Streamline Your Workflow with Our Custom Software Development Services. Let's Build Your Ideal
                                    Solution
                                </p>
                                <a href="{{ route('custom.software') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-graphic-design icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('graphics.desiging') }}">Graphics Desiging</a>
                                </h4>
                                <p class="paragraph">
                                    Bring Your Ideas to Life with Our Professional Graphic Design Services. Let's Create Your Unique
                                    Brand Identity
                                </p>
                                <a href="{{ route('graphics.desiging') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-analytics icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('digital.marketing') }}">Digital Marketing</a>
                                </h4>
                                <p class="paragraph">
                                    Drive Your Business Forward with Our Bold Digital Marketing Services. Let's Connect with Your
                                    Target Audience
                                </p>
                                <a href="{{ route('digital.marketing') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-30" data-wow-delay=".2s">
                        <div class="featured-agency">
                            <header class="header">
                                <i class="flaticon flaticon-management icon"></i>
                            </header>
                            <article class="article">
                                <h4 class="heading">
                                    <a href="{{ route('social.media') }}">Social Media</a>
                                </h4>
                                <p class="paragraph">
                                    Maximize Your Online Reach with Our Professional Social Media Management Services. Let's Boost
                                    Your Online Presence
                                </p>
                                <a href="{{ route('social.media') }}" class="btn btn--common
                        link rt-button-animation-out">
                                    Discover now
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Service Area End ======= -->

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
