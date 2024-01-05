@include('components.head')

<body>

    @include('components.preloader')

    @include('components.menu')

    <!-- ======= Main Wrapper Start ======= -->
    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="{{ asset('assets/frontend/image/blog/Blog.jpg') }}" style="min-height: 200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb" style="margin-bottom: 100px;">
                                <h1 class="heading">Blog</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Blog</a>
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
        <div class="blog pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-30">
                        <div class="services__sidebar sidebar">
                            <div class="widget">
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
                                        <h3 class="card-heading mb-25" style="margin-left: -15px;">Popular Blog</h3>
                                        @foreach ($latestblog as $latestblogs)
                                        <div class="blog-post blog-post--small media" style="margin-left: -15px;">
                                            <a href="{{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}" class="post-thumb">
                                                <img src="{{ asset('assets/backend/blog/blog_image/' . $latestblogs->blog_image) }}" alt="{{ $latestblogs->image_alt }}" width="80" height="80" />
                                            </a>
                                            <div class="media-body" style="margin-left: -15px;">
                                                <div class="post-meta">
                                                    <span class="post-meta-date" style="font-size: 12px;">
                                                        #{{ $latestblogs->blogmaster->master_name }}
                                                    </span>
                                                </div>
                                                <h5 class="post-title" style="font-size:16px; width: 130px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"">
                                                    <a href=" {{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}">
                                                    {{ $latestblogs->title }}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="col-12" style="margin-bottom: 30px;">
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
                        <div class="row">
                            @if (count($data) >= 1)
                            @foreach ($data as $datas)
                            <div class="col-lg-4 col-md-6 blog-item__column mb-30">
                                <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}">
                                    <div class="blog-item blog-item--software">
                                        <header class="blog-item__header header">
                                            <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}" class="blog-item__img_link link link--image">
                                                <img width="551" height="395" class="blog-item__img" src="{{ asset('assets/backend/blog/blog_image/' . $datas->blog_image) }}" alt="{{ $datas->image_alt }}" />
                                            </a>
                                            <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}" style="color: white;">
                                                <ul class="meta">
                                                    <li class="blog-item__list list">
                                                        <i class="far fa-user icon"></i>
                                                        <span class="name name--poster">By {{ $datas->writer_name }}</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </header>
                                        <article class="blog-item__article content" style="height: 280px;">
                                            <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}">
                                                <h3 class="blog-item__title" style="margin-bottom: 1px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 17px !important; margin-bottom: 20px;">
                                                    {{ $datas->title }}
                                                </h3>
                                            </a>
                                            <div style="color: black; display: block; overflow: hidden; height: auto; max-height: 130px; text-align: justify; text-justify: inter-word;">
                                                <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}">
                                                    <p class="blog-item__text">
                                                        {!! $datas->short_content !!}
                                                    </p>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            @else
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="https://cdni.iconscout.com/illustration/premium/thumb/search-result-not-found-2130361-1800925.png"/>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row" hidden>
                    <div class="col-12">
                        <div class="rt-pagination pt-30 mb-30">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="flaticon flaticon-previous"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="flaticon flaticon-next"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= Blog Area End ======= -->

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
