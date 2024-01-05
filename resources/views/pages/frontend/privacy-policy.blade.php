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
                                <h1 class="heading">Privacy Policy</h1>
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
                                    Privacy Policy
                                </h2>
                                <p>
                                    Welcome to Zwork Technology! This Privacy Policy outlines how we collect, use, and protect your personal information when you use our services. Please take a moment to review this policy to understand our practices regarding your privacy.
                                </p>
                                <h3 class="heading mx-auto">
                                    1. Personal Information We Collect
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">1.1. Information You Provide: </span><br>
                                    When you create an account or make a purchase, we may collect personal information such as your name, email address, postal address, and payment details.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">1.2. Automatically Collected Information:</span> <br>
                                    We may collect information about your device, IP address, browser type, and operating system to enhance your user experience and improve our services.
                                </p>
                                <h3 class="heading mx-auto">
                                    2. How We Collect Information
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.1. Directly from You:</span> <br>
                                    We collect information when you register an account, make a purchase, or communicate with us directly.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.2. Automatically:</span> <br>
                                    We use cookies and similar technologies to collect information about your interaction with our website and improve our services.
                                </p>
                                <h3 class="heading mx-auto">
                                    3. How We Use Collected Information
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.1. Providing Services:</span> <br>
                                    We use your information to deliver the products and services you request, including processing transactions and providing customer support.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.2. Personalization:</span> <br>
                                    To enhance your experience, we may use your information to personalize content, recommendations, and advertisements.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.3. Communication:</span> <br>
                                    We may send you important information, such as updates, security alerts, and transaction notifications.
                                </p>
                                <h3 class="heading mx-auto">
                                    4. How We Keep Information Safe
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">4.1. Security Measures:</span> <br>
                                    We implement industry-standard security measures to protect your information from unauthorized access, disclosure, alteration, and destruction.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">4.2. Payment Details:</span> <br>
                                    Your payment details are securely processed through encrypted channels, and we do not store your complete payment information on our servers.
                                </p>
                                <h3 class="heading mx-auto">
                                    5. Information Sharing with Third Parties
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">5.1. Service Providers:</span> <br>
                                    We may share your information with trusted third-party service providers who assist us in delivering our services, such as payment processors, shipping partners, and marketing platforms.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">5.2. Legal Compliance:</span> <br>
                                    We may disclose your information when required by law or to protect our rights, privacy, safety, or property.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">5.3. Business Transactions:</span> <br>
                                    In the event of a merger, acquisition, or sale of assets, your information may be transferred to the acquiring entity.
                                </p>
                                <h3 class="heading mx-auto">
                                    6. Changes to the Privacy Policy
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">6.1. Notification:</span> <br>
                                    We will notify you of any changes to this Privacy Policy by updating the effective date at the top of the document.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">6.2. Consent:</span> <br>
                                    By continuing to use our services after the effective date, you consent to the updated Privacy Policy.
                                </p>
                                <p class="paragraph">
                                    If you have questions or concerns about our Privacy Policy, please contact us at
                                    inquiries@zworktechnology.com
                                </p>
                                <p class="paragraph">
                                    Thank you for trusting Zwork Technology with your information!
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
