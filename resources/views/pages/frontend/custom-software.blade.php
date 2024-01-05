@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="assets/frontend/image/service/Custom_software.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">CUSTOM SOFTWARE DEVELOPMENT</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('service') }}">Service</a>
                                        </li>
                                        <li class="breadcrumb-item
                                                        active" aria-current="page">
                                            Custom Software Development
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

        <!-- ======= Services Details Start ======= -->
        <section class="services services--details pt-120 pb-120">
            <div class="container">
                <div class="row services__details
                                align-items-center">
                    <div class="col-lg-6 mb-60">
                        <div class="content content--special">
                            <span class="primary-text-color
                                            heading--small">Custom Software Development</span>
                            <h2 class="heading heading--big">
                                Customize your Style & Success
                            </h2>
                            <p class="paragraph">
                                At ZWORK TECHNOLOGY, we understand that your business has unique needs that can't
                                be met by off-the-shelf software solutions. That's why we offer Custom Software
                                Development services, tailored to your specific requirements. From designing and
                                developing user-friendly interfaces to integrating with third-party systems, our
                                team of experienced developers will work with you to build software that meets
                                your exact specifications.
                            </p>
                            <p class="mb-40">
                                Whether you need a custom CRM system, an enterprise-level application, or
                                anything in between, we have the expertise to deliver a high-quality, scalable
                                solution that meets your business goals.
                            </p>
                            <a href="javascript:void(0);" class="btn
                                            btn--common
                                            btn--primary
                                            rt-button-animation-out" data-animation="fadeInUp" data-delay=".8s">
                                Starts From ₹ 14,999
                                <svg width="34px" height="16px" viewbox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                        <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 mb-60">
                        <div class="image image--small">
                            <img src="assets/frontend/image/service/Custom_software_1.jpg" alt="IT Management">
                            <i class="flaticon flaticon-programing
                                            icon icon--circle wow
                                            fadeInUp animated" data-wow-delay=".3s" data-wow-duration="1.5s"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Services Details End ======= -->

        <!-- ======= Contact Area Start ======= -->
        @include('components.consulation')
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
