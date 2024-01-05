<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Best IT Service For Your Business - Zwork Technology</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $data->writer_name }}">
    <meta name="title" content="{{ $data->title }}">
    <meta name="description" content="{{ $data->short_content }}">
    <meta name="keywords" content="{{ $data->meta_keywords }}">

    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="{{ $data->title }}"/>
    <meta property="og:description" content="{{ $data->short_content }}..."/>
    <meta property="og:image" content="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:site_name" content="Zwork Technology"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/image/logo/fav.png') }}">

    <!-- ======= Icons ======= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/dependencies/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">

    <!-- ======= Carousel  ======= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/dependencies/slick/slick.min.css') }}">

    <!-- ======= Animation  ======= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/dependencies/fancybox/jquery.fancybox.min.cs') }}s">
    <link rel="stylesheet" href="{{ asset('assets/frontend/dependencies/animation/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/dependencies/niceselect/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/dependencies/animation/custom-animation.css') }}">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">

    <!-- ======= Boot ======= -->
    <script src="//code.tidio.co/tjctuz3i2glmvlmwzw5kzweasbokbb49.js" async></script>
</head>

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}" style="min-height: 350px; background-image: url('{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading" style="text-align: center; margin-bottom: 100px;">{{ $data->title }}</h1>
                                <nav aria-label="breadcrumb" hidden>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $data->blogmaster->master_name }}
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

        <!-- ======= Blog Area Start ======= -->
        <div class="blog pt-80 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details mb-30">
                            <article>
                                <p class="paragraph mb-30" style="text-align: justify; text-justify: inter-word;">
                                    {!! $data->blog_content !!}
                                </p>
                                <div class="quotes mb-30" style="text-align: justify; text-justify: inter-word;">
                                    <i class="flaticon flaticon-left-quote"></i>
                                    <p>{{ $data->quotes }}</p>
                                </div>
                            </article>
                            <footer>
                                <div class="row align-items-center pt-20">
                                    <div class="col-lg-6 mb-30">
                                        <div class="tags">
                                            <div class="tag-list">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" style="background-color: #074d8d; color: white;">Submit your blog</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="tags">
                                            <div class="tag-list share">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="tag-link">
                                                            <i class="fas fa-share-alt primary-text-color">
                                                            </i>
                                                        </a>
                                                        <ul>
                                                            <li>
                                                                <div class="header-top__social">
                                                                    <ul>
                                                                        <li class="header-top__social_list">
                                                                            <a class="header-top__social_list--link facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank">
                                                                                <i class="fab fa-facebook-f"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="header-top__social_list">
                                                                            <a class="header-top__social_list--link pinterest" href="https://twitter.com/intent/tweet?url={{ url()->current() }}" target="_blank">
                                                                                <i class="fab fa-twitter"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="header-top__social_list">
                                                                            <a class="header-top__social_list--link linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank">
                                                                                <i class="fab fa-linkedin-in"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="header-top__social_list">
                                                                            <a class="header-top__social_list--link twitter" href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="header-top__social_list">
                                                                            <a class="header-top__social_list--link linkedin" href="javascript:void(0);" id="copyBtn" data-text="{{ url()->current() }}">
                                                                                <i class="fa fa-clone"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="blog-arrow row align-items-center">
                                            <div class="col-6 mb-30">
                                                <div class="arrow">
                                                    <a class="link link--prev" href="{{ route('read-blog', ['title' => $previousblog->slug_url, 'id' => $previousblog->random_id]) }}">
                                                        <i class="flaticon flaticon-previous"></i>
                                                        Previous Post
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-30">
                                                <div class="arrow text-end">
                                                    <a class="link link--next" href="{{ route('read-blog', ['title' => $nextblog->slug_url, 'id' => $nextblog->random_id]) }}">
                                                        Go to Next
                                                        <i class="flaticon flaticon-next"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-30">
                                    <div class="col-sm-12">
                                        <div class="blog-comment mb-30">
                                            @if (count($comment) >= 1)
                                            <h3 class="title title--blog mb-40">Comments</h3>
                                            @foreach ($comment as $comments)
                                            <div class="blog-author comment" style="margin-bottom: 30px;">
                                                <div class="blog-author__image">
                                                    <img src="{{ asset('assets/frontend/images/blog/blog-details-commentar-1.png') }}" alt="Author" />
                                                </div>
                                                <div class="blog-author__content">
                                                    <h2 class="title title--small">
                                                        {{ $comments->name }}
                                                    </h2>
                                                    <p class="paragraph">
                                                        {!! $comments->message !!}
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <form autocomplete="off" method="POST" action="{{ route('blog.comment.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <h3 class="title title--blog m-0">
                                                Leave a Comment
                                            </h3>
                                            <p>Your email address will not be published.</p>
                                            <div class="row">
                                                <div class="col-md-12" hidden>
                                                    <input type="text" name="blog_id" class="contact-form__input" value="{{ $data->id }}" />
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="name" class="contact-form__input" placeholder="Name *" required />
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="mail" name="email" class="contact-form__input" placeholder="Email *" required />
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="number" name="phone_number" class="contact-form__input" placeholder="Phone Number" />
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea name="message" class="contact-form__input contact-form__input_textarea" placeholder="Message" required></textarea>
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
                            </footer>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="services__sidebar sidebar">
                            <div class="widget">
                                <div class="mb-30">
                                    <form action="{{ route('blog-search') }}" method="GET" role="search">
                                        @csrf
                                        <div class="header-search">
                                            <input autocomplete="off" placeholder="Search" type="text" name="term" class="header-search__input" />
                                            <button type="submit" class="header-search__button">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="menu mb-30">
                                    <ul>
                                        <li style="color: white; padding-top: 10px; margin-left: 60px; font-size: x-large;">Category</li>
                                        <hr style="color: #fbfbfb">
                                        @foreach ($masterblogdata as $masterblogdatas)
                                        <li><a href="{{ route('blog-filter', ['id' => $masterblogdatas->id, 'name' => $masterblogdatas->master_name]) }}">{{ $masterblogdatas->master_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="blog-content mb-30">
                                    <div class="rt-card layout-1 style-2 blogs-post">
                                        <h3 class="card-heading mb-25">Latest Posts</h3>
                                        @foreach ($latestblog as $latestblogs)
                                        <div class="blog-post blog-post--small media">
                                            <a href="{{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}" class="post-thumb">
                                                <img src="{{ asset('assets/backend/blog/blog_image/' . $latestblogs->blog_image) }}" alt="{{ $latestblogs->image_alt }}" width="100" height="80" />
                                            </a>
                                            <div class="media-body">
                                                <div class="post-meta">
                                                    <span class="post-meta-date">
                                                        #{{ $latestblogs->blogmaster->master_name }}
                                                    </span>
                                                </div>
                                                <h5 class="post-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"">
                                                    <a href=" {{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}">
                                                    {{ $latestblogs->title }}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="contact-address contact-address--bg" data-bg-image="{{ asset('assets/frontend/images/bg/service-sidebar-contact-bg.jpg') }}">
                                    <div class="person">
                                        <img src="{{ asset('assets/frontend/images/bg/service-sidebar-contact-person.png') }}" alt="" class="image" />
                                        <h3 class="heading text-white">{{ $data->writer_name }}</h3>
                                        <a class="phone text-white">{{ date('d M, Y', strtotime($data->blog_date)) }}</a>
                                        <a class="phone text-white" href="mailto:{{ $data->writer_mail_address }}" style="color: white;">{{ $data->writer_mail_address }}</a>
                                        <a class="phone text-white" href="{{ $data->writer_web_address_address }}" target="_blank" style="color: white;">{{ $data->writer_web_address_address }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ======= Blog Area End ======= -->

        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            @include('pages.frontend.submit-blog')
        </div>

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
