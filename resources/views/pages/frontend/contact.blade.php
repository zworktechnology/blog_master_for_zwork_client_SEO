@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="assets/frontend/image/contact/Contact_us.jpg" style="background-image: url('assets/frontend/image/contact/Contact_us.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Contact Us</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Contact Us
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

        <!-- ======= Contact Area Start ======= -->
        <section class="contact pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-heading text-center mb-50">
                            <span class="section-heading__title_small">
                                GET IN TOUCH
                            </span>
                            <h2 class="section-heading__title_big">
                                Get in touch with us.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact-item">
                            <img class="icon" src="assets/frontend/image/contact/contact-location.png" alt="">
                            <h3 class="title title--heading">Office Location</h3>
                            <p class="address">Tiruchirappalli</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact-item">
                            <img class="icon" src="assets/frontend/image/contact/phone-call.png" alt="">
                            <h3 class="title title--heading">Call Us</h3>
                            <p class="address">
                                <a class="link" href="tel:+91 8098565686">+91 8098 5656 86</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact-item">
                            <img class="icon" src="assets/frontend/image/contact/contact-email.png" alt="">
                            <h3 class="title title--heading">Email Us</h3>
                            <p class="address">
                                <a class="link" href="mailto:zworktechnology@gmail.com">zworktechnology@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="contact-map">
                            <div class="map-box style-1 ">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.414955912076!2d78.6785029!3d10.7649917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8bfef20b581b%3A0xa4b8f5520b69cc04!2sZwork%20Technology!5e0!3m2!1sen!2sin!4v1700715317706!5m2!1sen!2sin" width="100%" height="100%" style="border-radius: 10px;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form autocomplete="off" method="POST" action="{{ route('contact.store') }}" class="contact-form--main" id="contact-form">
                            @csrf
                            <div class="contact-form p-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="name" type="text" class="contact-form__input" placeholder="Name *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" type="text" class="contact-form__input" placeholder="Email *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="phone_number" type="text" class="contact-form__input" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" class="contact-form__input
                            contact-form__input_textarea" name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="contact-form__button">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-response mt-10"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Area End ======= -->

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
