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
                                <h1 class="heading">Service and Delivery</h1>
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
                                    Service and Delivery
                                </h2>
                                <h3 class="heading mx-auto">
                                    1. Order Processing and Shipping Time
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">1.1. Order Processing:</span><br>
                                    Orders for services provided by Zwork Technology are processed within few business days from the date of purchase. Service activation or initiation details will be communicated to the customer through the provided contact information.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">1.2. Service Activation Time:</span> <br>
                                    The time required for service activation or initiation may vary based on the specific service purchased. Customers will receive detailed information about the estimated activation time during the order confirmation process.
                                </p>
                                <h3 class="heading mx-auto">
                                    2. Shipping Cost
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.1. Service-Based Shipping:</span><br>
                                    Zwork Technology primarily offers digital services, and therefore, shipping costs are not applicable to most transactions. Any applicable charges or fees will be clearly communicated during the order process.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.2. Physical Products:</span> <br>
                                    In cases where physical products are associated with a service package, shipping costs will be specified during the checkout process. The customer is responsible for all shipping fees unless otherwise stated.
                                </p>
                                <h3 class="heading mx-auto">
                                    3. International Shipping Process
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.1. International Service Availability:</span> <br>
                                    Zwork Technology provides services to customers globally. The availability of certain services and the associated terms may vary by region. Customers are encouraged to review service details and restrictions before making a purchase.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.2. Customs and Import Duties:</span> <br>
                                    For international customers, additional customs duties, taxes, and fees may apply upon delivery. These charges are the responsibility of the customer and are not included in the purchase price or shipping cost.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.3. Shipping Time for International Orders:</span> <br>
                                    International shipping times may vary depending on the destination and customs processing. Estimated delivery times will be provided during the order process, and customers can track their orders using the provided tracking information.
                                </p><h3 class="heading mx-auto">
                                    Important Notes
                                </h3>
                                <p class="paragraph">
                                    •	Zwork Technology aims to provide accurate and transparent information regarding shipping details and costs during the order process.<br>
                                    •	Delays may occur due to unforeseen circumstances such as customs processing, natural disasters, or other external factors. Zwork Technology is not responsible for such delays.
                                </p>
                                <p class="paragraph">
                                    This Shipping and Delivery Policy is subject to change without notice. It is your responsibility to review it periodically for updates.
                                </p>
                                <p class="paragraph">
                                    If you have any questions or concerns, please contact Zwork Technology Customer Support at customer@zworktechnology.com 
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
