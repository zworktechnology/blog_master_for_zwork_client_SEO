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
                                <h1 class="heading">Terms and Conditions </h1>
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
                                    Terms and Conditions
                                </h2>
                                <h3 class="heading mx-auto">
                                    1. Effective Date for Policy
                                </h3>
                                <p class="paragraph">
                                    These Terms and Conditions are effective as of [Insert Date] and apply to all users of Zwork Technology services from this date forward.
                                </p>
                                <h3 class="heading mx-auto">
                                    2. Limitation of Liability and Disclaimer of Warranties
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.1 Limitation of Liability</span>
                                </p>
                                <p class="paragraph">
                                    Zwork Technology, its affiliates, and their respective officers, directors, employees, or agents shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses resulting from:
                                </p>
                                <p class="paragraph">
                                    •	Your use or inability to use our services. <br>
                                    •	Any unauthorized access to or use of our servers and/or any personal information stored therein. <br>
                                    •	Any interruption or cessation of transmission to or from our services. <br>
                                    •	Any bugs, viruses, trojan horses, or the like that may be transmitted to or through our services. <br>
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.2 Disclaimer of Warranties</span>
                                </p>
                                <p class="paragraph">
                                    Zwork Technology provides its services on an "as-is" and "as available" basis. We make no representations or warranties of any kind, express or implied, regarding the services, including but not limited to the implied warranties of merchantability, fitness for a particular purpose, and non-infringement.
                                </p>
                                <h3 class="heading mx-auto">
                                    3. Rules of Conduct and User Restrictions
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.1. Compliance with Applicable Laws:</span> <br>
                                    Users agree to comply with all applicable laws, regulations, and these Terms and Conditions when using Zwork Technology services.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.2 Prohibited Conduct</span>
                                </p>
                                <p class="paragraph">
                                    Users shall not engage in any conduct that, in Zwork Technology's sole discretion, restricts or inhibits any other user from using or enjoying our services. Prohibited conduct includes but is not limited to:
                                </p>
                                <p class="paragraph">
                                    •	Violating any applicable laws or regulations. <br>
                                    •	Interfering with the proper functioning of our services. <br>
                                    •	Attempting to gain unauthorized access to our systems or networks. <br>
                                    •	Engaging in any activity that could damage, disable, overburden, or impair our services.. <br>
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.3. User Content</span> <br>
                                    Users are solely responsible for any content they submit, post, or display on or through our services. Zwork Technology reserves the right to remove any content that violates these Terms and Conditions or is deemed
                                </p>
                                <h3 class="heading mx-auto">
                                    4. Contact Information
                                </h3>
                                <p class="paragraph">
                                    If you have any questions or concerns regarding these Terms and Conditions, please contact us at:
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">Address</span> <br>
                                    Zwork Technology, No. 10/2A, KSH Illam, First Floor SIMCO Road, Rajaji St, near Maharam's Sweets 'n' Bakes, LIC Colony, Ayyappa Nagar, Tiruchirappalli, Tamil Nadu 620021.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">Inquiry Now </span> <br>
                                    inquiries@zworktechnology.com
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">Contact us</span> <br>
                                    +91 8098 5656 86
                                </p>
                                <p class="paragraph">
                                    <b>By using Zwork Technology services, you agree to abide by these Terms and Conditions.</b>
                                </p>
                                <p class="paragraph">
                                    These Terms and Conditions are subject to change without notice. It is your responsibility to review them periodically for updates.
                                </p>
                                <p class="paragraph">
                                    Thank you for choosing Zwork Technology!
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
