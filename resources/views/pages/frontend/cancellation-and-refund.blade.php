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
                                <h1 class="heading">Cancellation and Refund</h1>
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
                                    Cancellation and Refund
                                </h2>
                                <h3 class="heading mx-auto">
                                    1. When Things Can Be Returned or Exchanged
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">1.1. Software and Digital Products:</span><br>
                                    Due to the nature of software and digital products, Zwork Technology generally does not accept returns or exchanges for these items. We encourage customers to carefully review product details before making a purchase.
                                </p>
                                <h3 class="heading mx-auto">
                                    2. How to Initiate a Return or Exchange
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.1. Contact Zwork Technology Support:</span> <br>
                                    To initiate a return or exchange, please contact our customer support team at customer@zworktechnology.com within the specified return period. Provide your order number, the reason for the return, and any relevant details.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.2. Return Authorization:</span> <br>
                                    Once your request is reviewed and approved, you will receive a Return Authorization (RA) number and instructions on how to return the product. Please do not ship items back without obtaining an RA number.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">2.3. Shipping the Product:</span><br>
                                    Ship the product back to the address provided in the return instructions, including the RA number on the package. Customers are responsible for the cost of return shipping, unless the return is due to a Zwork Technology error.
                                </p>
                                <h3 class="heading mx-auto">
                                    3. Refund Processing Time
                                </h3>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.1. Evaluation and Approval:</span> <br>
                                    Upon receiving the returned item, Zwork Technology will inspect it to ensure it meets the return criteria. If approved, a refund or exchange will be processed.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.2. Refund Method:</span> <br>
                                    Refunds will be issued using the original payment method. Please note that it may take several business days for the refund to reflect in your account, depending on your financial institution.
                                </p>
                                <p class="paragraph">
                                    <span style="color: #074d8d">3.1. Exclusions:</span> <br>
                                    Shipping fees and any non-refundable charges are excluded from the refund. Zwork Technology reserves the right to refuse refunds for items that do not meet the return criteria.
                                </p>
                                <h3 class="heading mx-auto">
                                    Important Notes
                                </h3>
                                <p class="paragraph">
                                    •	Refunds for digital products or software are considered on a case-by-case basis.<br>
                                    •	Customized or personalized items may not be eligible for return or exchange unless defective.
                                </p>
                                <p class="paragraph">
                                    This Cancellation and Refund Policy is subject to change without notice. It is your responsibility to review it periodically for updates.
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
