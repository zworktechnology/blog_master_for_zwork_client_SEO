@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="assets/frontend/image/service/Social_media_handling.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">SOCIAL MEDIA HANDLING</h1>
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
                                            Social Media Handling
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
                                            heading--small">Social Media Handling</span>
                            <h2 class="heading heading--big">
                                Begin Growing by Being Active in Social Media
                            </h2>
                            <p class="paragraph">
                                In today's digital age, social media has become an indispensable tool for businesses to connect with their audience. However, managing multiple social media platforms can be a daunting task. That's where our social media handling service comes in. We help businesses navigate the complex world of social media by creating engaging content, developing effective strategies, and monitoring social media activity.
                            </p>
                            <p class="mb-40">
                                With our expertise, businesses can focus on what they do best while we handle their social media presence. Let us help you elevate your social media game and connect with your audience in meaningful ways.
                            </p>
                            <a href="javascript:void(0);" class="btn
                                            btn--common
                                            btn--primary
                                            rt-button-animation-out" data-animation="fadeInUp" data-delay=".8s">
                                Starts From ₹ 3,999
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
                            <img src="assets/frontend/image/service/Social_media_handling_1.jpg" alt="IT Management">
                            <i class="flaticon flaticon-management
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
