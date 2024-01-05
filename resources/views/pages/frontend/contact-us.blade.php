@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two"
                data-bg-image="{{ asset('assets/frontend/image/blog/Blog.jpg') }}" style="min-height: 200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb" style="margin-bottom: 100px;">
                                <h1 class="heading">Contact Us</h1>
                                {{-- <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Blog</a>
                                        </li>
                                    </ol>
                                </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Hero inner End ======= -->

        <div class="container">
            <section class="case-details pt-120 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="case-details__header mb-35">
                                <h2 class="heading primary-text-color">
                                    Contact Us
                                </h2>
                                <p>
                                    Welcome to Zwork Technology, where innovation meets excellence! Your inquiries,
                                    feedback, and collaboration are essential to us. Reach out to our dedicated team
                                    using the contact information provided below. We're here to assist you every step of
                                    the way.
                                </p>
                                <h3 class="heading mx-auto">
                                    1. General Inquiries
                                </h3>
                                <p class="paragraph">
                                    For general inquiries about our IT services, partnerships, or any other information, please contact us at: <span style="color: #074d8d">inquiries@zworktechnology.com</span>
                                </p>
                                <h3 class="heading mx-auto">
                                    2. Customer Support
                                </h3>
                                <p class="paragraph">
                                    Our customer support team is ready to assist you with any questions or issues related to our services. Reach out to us for timely and personalized support at: <span style="color: #074d8d">customer@zworktechnology.com</span>
                                </p>
                                <h3 class="heading mx-auto">
                                    3. Partnerships and Collaborations
                                </h3>
                                <p class="paragraph">
                                    Explore exciting partnership opportunities with Zwork Technology. Connect with our partnerships team to discuss collaborations: <span style="color: #074d8d">partnerships@zworktechnology.com</span>
                                </p>
                                <h3 class="heading mx-auto">
                                    4. Career Opportunities
                                </h3>
                                <p class="paragraph">
                                    Interested in joining the Zwork Technology team? Explore career opportunities and submit your resume to our HR department: <span style="color: #074d8d">career@zworktechnology.com</span>
                                </p>
                                <h3 class="heading mx-auto">
                                    5. Technical Support
                                </h3>
                                <p class="paragraph">
                                    For technical support or assistance related to our IT solutions, please reach out to our technical support team: <span style="color: #074d8d">support@zworktechnology.com</span>
                                </p>
                                <h3 class="heading mx-auto">
                                    6. Office Address
                                </h3>
                                <p class="paragraph">
                                    Visit our office or send mail to our office address: <br>
                                    Zwork Technology, 10/2A, KSH Illam, First Floor SIMCO Road, Rajaji St, near Maharam's Sweets 'n' Bakes, LIC Colony, Ayyappa Nagar, Tiruchirappalli, Tamil Nadu, India 620021
                                </p>
                                <h3 class="heading mx-auto">
                                    7. Social Media
                                </h3>
                                <p class="paragraph">
                                    Stay connected with us on social media for updates, news, and a glimpse into the world of Zwork Technology
                                </p>
                                <div class="header-top__social" style="text-align: left !important">
                                    <ul>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link linkedin" href="https://www.linkedin.com/company/zwork-technology" target="_blank">
                                                <i class="fab fa-linkedin-in" style="margin-right: 0px !important"></i>
                                            </a>
                                        </li>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link facebook" href="https://www.facebook.com/zworktechnology" target="_blank">
                                                <i class="fab fa-facebook-f" style="margin-right: 0px !important"></i>
                                            </a>
                                        </li>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link instagram" href="https://www.instagram.com/zwork_technology" target="_blank">
                                                <i class="fab fa-instagram" style="margin-right: 0px !important"></i>
                                            </a>
                                        </li>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link facebook" href="https://join.skype.com/invite/uKwIqhsNBdSj" target="_blank">
                                                <i class="fab fa-skype" style="margin-right: 0px !important"></i>
                                            </a>
                                        </li>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link facebook" href="https://twitter.com/zworktechnology" target="_blank">
                                                <i class="fab fa-twitter" style="margin-right: 0px !important"></i>
                                            </a>
                                        </li>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link twitter" href="https://api.whatsapp.com/send/?phone=%2B918098565686" target="_blank">
                                                <i class="fab fa-whatsapp" style="margin-right: 0px !important"></i>
                                            </a>
                                        </li>
                                        <li class="header-top__social_list">
                                            <a class="header-top__social_list--link pinterest" href="https://www.youtube.com/@zworktechnology" target="_blank">
                                              <i class="fab fa-youtube" style="margin-right: 0px !important"></i>
                                            </a>
                                          </li>
                                    </ul>
                                </div>
                                <h3 class="heading mx-auto">
                                    8. Feedback and Suggestions
                                </h3>
                                <p class="paragraph">
                                    We value your feedback and suggestions. Share your thoughts on how we can enhance your experience with Zwork Technology: <span style="color: #074d8d">feedback@zworktechnology.com</span>
                                </p>
                                <h3 class="heading mx-auto">
                                    9. Office Hours
                                </h3>
                                <p class="paragraph">
                                    Our standard office hours are week days, <span style="color: #074d8d">10:00 AM to 7:00 PM [GMT+5:30].</span> We aim to respond to inquiries promptly during these hours.
                                </p>
                                <p class="paragraph">
                                    Thank you for choosing Zwork Technology. We look forward to hearing from you and exploring new possibilities together!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

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
