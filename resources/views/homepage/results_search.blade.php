@inject('userMod', 'App\UserMod')

<!doctype html>
<html lang="en">

<head>
    <?php $countget = $search->count() ?>
    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64));?>
    <title>{{$get_search}} - Sarjanamalam Search: {!!$countget!!} results found!</title>
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="@yield('title')">
    <meta name="author" content="bintang j tobing">
    <meta name="description" content="@yield('metadesc')">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    {{-- SOCIAL MEDIA TAGS --}}
    {{-- FACEBOOK SOCMED --}}
    <meta property="fb:admins" content="110102153747274">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{URL::current()}}">
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1584421114/based/Official_sarjanamalam_logo_copyright_2020_hecjnh.jpg')!!}">
    <meta property="og:description" content="@yield('metadesc')">
    <meta property="og:site_name" content="Sarjanamalam.">
    {{-- TWITTER SOCMED --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@sarjanamalamcom">
    <meta name="twitter:creator" content="@sarjanamalamcom">
    <link rel="stylesheet" href="{!!asset('css/homepage/style.css')!!}">
</head>

<body>

    <div class="inner resultstyle">


        <div class="main">
            <div class="sidebar sidebar-center">
                <div class="menu-section">
                    <ul>
                        <li class="active"><a href="" title="All search"><span class="fas fa-search mr-1"></span> </a>
                        </li>
                        {{-- <li><a href="" title="All search"><span class="fas fa-image mr-1"></span> </a></li>
                        <li><a href="" title="All search"><span class="fas fa-map mr-1"></span> </a></li>
                        <li><a href="" title="All search"><span class="fas fa-video mr-1"></span> </a></li>
                        <li><a href="" title="All search"><span class="fas fa-newspaper mr-1"></span> </a></li> --}}
                    </ul>
                </div>
            </div>

            <div class="main-content">
                <header class="header">
                    <nav class="navbar navbar-expand-sm navbar-fix-onscroll navbar-rounded-hover navbar-light">
                        <a class="navbar-brand" href="/">
                            <span class="font-weight-bold text-gradient-blue-sarjana">Sarjanamalam.</span>
                        </a>

                        <div class="container-fluid">
                            <div class="navbar-collapse navbar-inline-mobile" id="collapsibleNavId">
                                <form class="form-inline my-2 my-lg-0" action="/search?" method="GET">
                                    <div class="result-search">
                                        <input class="form-control mr-sm-2 result-search-input" type="search"
                                            placeholder="Search" name="get_value" value="{{$get_search}}">
                                        <span class="fas fa-search result-search-icon"></span>
                                    </div>
                                </form>
                                @if(Auth::check())
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                    {{-- <li class="nav-item">
                                        <i class="fas fa-grip-horizontal"></i>
                                    </li> --}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-initial dropdown-toggle" href="#" id="dropdownId"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span><img
                                                    src="@if(!auth()->user()->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                                                    class="img-profile-user" alt="User Image"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <a class="dropdown-item nav-user-name" href="#"><span
                                                    class="font-weight-bold ">{{auth()->user()->name}}</span></a>
                                            <a class="dropdown-item" href="#">Profile Saya</a>
                                            <a href="/logout/{{auth()->user()->id}}/{{$tokens}}"
                                                class="dropdown-item">Keluar</a>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-sm navbar-light result-navbar">
                        <div class="container-fluid">

                            <div class="" id="collapsibleNavId">
                                <ul class="navbar-nav primary-menu mr-auto mt-2 mt-lg-0">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-sort"></span> Order by</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <a class="dropdown-item" href="#">Action 1</a>
                                            <a class="dropdown-item" href="#">Action 2</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-tint mr-1"></span> Color</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <a class="dropdown-item" href="#">Action 1</a>
                                            <a class="dropdown-item" href="#">Action 2</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </header>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7 pb-10">
                            <div class="the-content">
                                <div class="content mb-3">
                                    <div clas="content-meta">
                                        <span class="content-url old-green mr-1">
                                            <b>Sekitar {{$countget}} hasil pencarian yang membahas tentang
                                                {{$get_search}}</b>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- First  Content -->
                            <div class="the-content">
                                @if(!$search->isEmpty())
                                @foreach ($search as $src)
                                <div class="content mb-4">
                                    <?php $enc_id = Crypt::encrypt($src->id); ?>
                                    <a href="/details/{{$enc_id}}" class="content-title old-blue">
                                        <div clas="content-meta">
                                            <span class="content-url old-green mr-1">sarjanamalam.com › forum ›
                                                {!!$src->subject!!}</span>
                                        </div>
                                        <h3><strong>{{$src->subject}}</strong>
                                            {{-- <span class="content-info fas fa-link fs-14"
                                                title="check description"></span> --}}
                                        </h3>
                                    </a>
                                    <div class="content-love">
                                        <span style="color:#ff5a79; font-size:10px;"><i class="fas fa-heart"></i><i
                                                class="fas fa-heart"></i><i class="fas fa-heart"></i><i
                                                class="fas fa-heart"></i><i class="far fa-heart"></i></span> Skor:
                                        8,3/10 - 85.680 Pengguna yang bergabung dalam pembahasan ini.
                                    </div>
                                    <div class="content-desc">
                                        <span
                                            class="datediff">{{Carbon\Carbon::parse($src->created_at)->diffForHumans()}}
                                            oleh <b>{{$src->updated_by}}</b></span>
                                        -
                                        {!!strip_tags(Str::limit($src->thread, 120))!!}</a>

                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="alert alert-danger">
                                    <b>Aduh.. Maaf ya..</b> Tidak ada informasi soal itu.
                                </div>
                                @if(Auth::check())
                                <div class="content mb-3">
                                    <a href="/forum/{{$tokens}}" class="content-title old-blue">
                                        <div class="content-meta">
                                            <h5>Ayo kita bahas tentang <b>{{$get_search}}</b> didalam forum.
                                            </h5>
                                        </div>
                                    </a>
                                    <div class="content-desc">
                                        <p>Share ke teman-teman untuk mendapatkan respon balik dari mereka, dan
                                            berbagilah ke semuanya.</p>
                                    </div>
                                </div>
                                @else
                                <div class="content mb-3">
                                    <a href="/daftar/{{$tokens}}" class="content-title old-blue">
                                        <div class="content-meta">
                                            <h5>Jadilah orang yang pertama untuk membahas tentang
                                                <b>{{$get_search}}</b>.
                                            </h5>
                                        </div>
                                    </a>
                                    <div class="content-desc">
                                        <p>Jangan sungkan untuk ngobrol bersama teman didalam forum Sarjanamalam.<br>
                                            Ayo segera daftarkan dirimu.</p>
                                    </div>
                                </div>
                                @endif
                                @endif
                                {{-- <div class="rich-results pl-3 mt-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="content">
                                                <a href="" class="content-title old-blue">
                                                    <h3 class="">Internet Dowdnload Manager</h3>
                                                </a>
                                                <div class="content-desc">Internet Download Manager 6.33 Build 2 Full
                                                    Version.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="content">
                                                <a href="" class="content-title old-blue">
                                                    <h3 class="">Internet</h3>
                                                </a>
                                                <div class="content-desc">Internet Download Manager 6.36 Build 2 Full
                                                    Version · Lumos 12</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="content">
                                                <a href="" class="content-title old-blue">
                                                    <h3 class="">Internet Dowdnload Manager</h3>
                                                </a>
                                                <div class="content-desc">Internet Download Manager 6.33 Build 2 Full
                                                    Version.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="content">
                                                <a href="" class="content-title old-blue">
                                                    <h3 class="">Internet</h3>
                                                </a>
                                                <div class="content-desc">Internet Download Manager 6.36 Build 2 Full
                                                    Version · Lumos 12</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="content">
                                                <a href="" class="content-title old-blue">
                                                    <h3 class="">Internet Dowdnload Manager</h3>
                                                </a>
                                                <div class="content-desc">Internet Download Manager 6.33 Build 2 Full
                                                    Version.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="content">
                                                <a href="" class="content-title old-blue">
                                                    <h3 class="">Internet</h3>
                                                </a>
                                                <div class="content-desc">Internet Download Manager 6.36 Build 2 Full
                                                    Version · Lumos 12</div>
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                            </div>
                            <!-- /First -->

                            {{-- <!-- Common Content -->
                            <div class="content">

                                <a href="" class="content-title old-blue">
                                    <div clas="content-meta">
                                        <span class="content-favicon"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA8UlEQVQ4jc2PO2oCYRhFj/r7yAjDBKwUCxeQQEDE4LiEkAVoY2FhN72IQsgy0ghZQEwRwUpUArGx0dI0FgpWoiKoMykEYUTyO9r4dfeDcx9w4bkAEk+VlnC5dSfgxjLbP5+VtABQtYguvAFHyZv1SgcQAP/BatCPkUsSvwuzWK6ZTOcYr/U9I2RJhUycx4coAJrqQVPtYVKDxH0EAKP8Trc33LUKxU43UG58APR/lzZQavD1lrXpRjUPwGg8I1+s7f9uWYPDa34PTmuQen4BoPNRsmmfohFQbuUGh3uP7YczJlypwdbctp2Clml1Lg0H4A+fOzUNBim5WgAAAABJRU5ErkJggg=="></span>
                                        <span class="content-url old-green">id-id.facebook.com › public › Bagas</span>
                                    </div>
                                    <h3 class="">Bagas Profil | Facebook</h3>
                                </a>
                                <div class="content-desc">Lihat profil orang bernama Bagas. Bergabunglah dengan Facebook
                                    untuk terhubung dengan Bagas dan teman lainnya yang mungkin Anda kenal. Facebook ...
                                </div>
                            </div>
                            <!-- /Common Content -->

                            <!-- Videos Section -->
                            <div class="related-video mt-3 mb-3">
                                <h4 class="mb-3">Videos</h4>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/CLlMZ-JF27M"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title fs-18" style=""><a href="">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Aliquam aspernatur
                                                            culpa labore!</a></h5>
                                                    <p class="card-text ln-20">
                                                        <small class="text-secondary">RCTI - LAYAR DRAMA</small>
                                                        <small class="text-secondary"><span
                                                                class="text-dark">YouTube</span> - Oct 15, 2019</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/CLlMZ-JF27M"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title fs-18" style=""><a href="">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Aliquam aspernatur
                                                            culpa labore!</a></h5>
                                                    <p class="card-text ln-20">
                                                        <small class="text-secondary">RCTI - LAYAR DRAMA</small>
                                                        <small class="text-secondary"><span
                                                                class="text-dark">YouTube</span> - Oct 15, 2019</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/CLlMZ-JF27M"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title fs-18" style=""><a href="">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Aliquam aspernatur
                                                            culpa labore!</a></h5>
                                                    <p class="card-text ln-20">
                                                        <small class="text-secondary">RCTI - LAYAR DRAMA</small>
                                                        <small class="text-secondary"><span
                                                                class="text-dark">YouTube</span> - Oct 15, 2019</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/CLlMZ-JF27M"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title fs-18" style=""><a href="">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Aliquam aspernatur
                                                            culpa labore!</a></h5>
                                                    <p class="card-text ln-20">
                                                        <small class="text-secondary">RCTI - LAYAR DRAMA</small>
                                                        <small class="text-secondary"><span
                                                                class="text-dark">YouTube</span> - Oct 15, 2019</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/CLlMZ-JF27M"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title fs-18" style=""><a href="">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Aliquam aspernatur
                                                            culpa labore!</a></h5>
                                                    <p class="card-text ln-20">
                                                        <small class="text-secondary">RCTI - LAYAR DRAMA</small>
                                                        <small class="text-secondary"><span
                                                                class="text-dark">YouTube</span> - Oct 15, 2019</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/CLlMZ-JF27M"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title fs-18" style=""><a href="">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Aliquam aspernatur
                                                            culpa labore!</a></h5>
                                                    <p class="card-text ln-20">
                                                        <small class="text-secondary">RCTI - LAYAR DRAMA</small>
                                                        <small class="text-secondary"><span
                                                                class="text-dark">YouTube</span> - Oct 15, 2019</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="related-video-swipe swipe-prev"><span class="fas fa-angle-left"></span>
                                </div>
                                <div class="related-video-swipe swipe-next"><span class="fas fa-angle-right"></span>
                                </div>
                            </div>
                            <!-- /Videos Section -->

                            <!-- Common Content -->
                            <div class="content mb-3">

                                <a href="" class="content-title old-blue">
                                    <div clas="content-meta">
                                        <span class="content-favicon"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA8UlEQVQ4jc2PO2oCYRhFj/r7yAjDBKwUCxeQQEDE4LiEkAVoY2FhN72IQsgy0ghZQEwRwUpUArGx0dI0FgpWoiKoMykEYUTyO9r4dfeDcx9w4bkAEk+VlnC5dSfgxjLbP5+VtABQtYguvAFHyZv1SgcQAP/BatCPkUsSvwuzWK6ZTOcYr/U9I2RJhUycx4coAJrqQVPtYVKDxH0EAKP8Trc33LUKxU43UG58APR/lzZQavD1lrXpRjUPwGg8I1+s7f9uWYPDa34PTmuQen4BoPNRsmmfohFQbuUGh3uP7YczJlypwdbctp2Clml1Lg0H4A+fOzUNBim5WgAAAABJRU5ErkJggg=="></span>
                                        <span class="content-url old-green">id-id.facebook.com › public › Bagas</span>
                                    </div>
                                    <h3 class="">Bagas Profil | Facebook</h3>
                                </a>
                                <div class="content-desc">Lihat profil orang bernama Bagas. Bergabunglah dengan Facebook
                                    untuk terhubung dengan Bagas dan teman lainnya yang mungkin Anda kenal. Facebook ...
                                </div>
                            </div>

                            <div class="content mb-3">

                                <a href="" class="content-title old-blue">
                                    <div clas="content-meta">
                                        <span class="content-favicon"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA8UlEQVQ4jc2PO2oCYRhFj/r7yAjDBKwUCxeQQEDE4LiEkAVoY2FhN72IQsgy0ghZQEwRwUpUArGx0dI0FgpWoiKoMykEYUTyO9r4dfeDcx9w4bkAEk+VlnC5dSfgxjLbP5+VtABQtYguvAFHyZv1SgcQAP/BatCPkUsSvwuzWK6ZTOcYr/U9I2RJhUycx4coAJrqQVPtYVKDxH0EAKP8Trc33LUKxU43UG58APR/lzZQavD1lrXpRjUPwGg8I1+s7f9uWYPDa34PTmuQen4BoPNRsmmfohFQbuUGh3uP7YczJlypwdbctp2Clml1Lg0H4A+fOzUNBim5WgAAAABJRU5ErkJggg=="></span>
                                        <span class="content-url old-green">id-id.facebook.com › public › Bagas</span>
                                    </div>
                                    <h3 class="">Bagas Profil | Facebook</h3>
                                </a>
                                <div class="content-desc">Lihat profil orang bernama Bagas. Bergabunglah dengan Facebook
                                    untuk terhubung dengan Bagas dan teman lainnya yang mungkin Anda kenal. Facebook ...
                                </div>
                            </div>

                            <div class="content mb-3">

                                <a href="" class="content-title old-blue">
                                    <div clas="content-meta">
                                        <span class="content-favicon"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA8UlEQVQ4jc2PO2oCYRhFj/r7yAjDBKwUCxeQQEDE4LiEkAVoY2FhN72IQsgy0ghZQEwRwUpUArGx0dI0FgpWoiKoMykEYUTyO9r4dfeDcx9w4bkAEk+VlnC5dSfgxjLbP5+VtABQtYguvAFHyZv1SgcQAP/BatCPkUsSvwuzWK6ZTOcYr/U9I2RJhUycx4coAJrqQVPtYVKDxH0EAKP8Trc33LUKxU43UG58APR/lzZQavD1lrXpRjUPwGg8I1+s7f9uWYPDa34PTmuQen4BoPNRsmmfohFQbuUGh3uP7YczJlypwdbctp2Clml1Lg0H4A+fOzUNBim5WgAAAABJRU5ErkJggg=="></span>
                                        <span class="content-url old-green">id-id.facebook.com › public › Bagas</span>
                                    </div>
                                    <h3 class="">Bagas Profil | Facebook</h3>
                                </a>
                                <div class="content-desc">Lihat profil orang bernama Bagas. Bergabunglah dengan Facebook
                                    untuk terhubung dengan Bagas dan teman lainnya yang mungkin Anda kenal. Facebook ...
                                </div>
                            </div> --}}
                            <!-- /Common Content -->


                            <!-- Pagination -->
                            <nav class="d-flex justify-content-center">
                                <ul class="pagination pagination-sm   ">
                                    {{-- <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li> --}}
                                    {{$search->links()}}
                                    {{-- {{$search->links()}} --}}
                                </ul>
                            </nav>
                            <!-- /Pagination -->

                        </div>

                        {{-- <div class="col-12 col-md-5">
                            <div class="related-content">
                                <div class="card">
                                    <div class="card-header bg-light">

                                        <div class="related-images mb-3">

                                            <img src="https://sarjanamalam.com/https://res.cloudinary.com/sarjanamalam/image/upload/v1584421114/based/Official_sarjanamalam_logo_copyright_2020_hecjnh.jpg"
                                                alt="related-images" class="img-fluid">

                                        </div>

                                        <h4 class="card-title">Sarjanamalam. Communities</h4>
                                        <span class="card-category">Officialy Sites</span>
                                    </div>
                                    <div class="card-body">

                                        <p class="card-text card-text-elipsis">Layanan berbasis situs web aplikasi, yang
                                            berguna untuk memudahkan pengguna dalam mencari tempat untuk saling berbagi
                                            ide dan saling berinteraksi untuk merealisasikan ide tersebut.</p>
                                        <a href="" class="content-body">
                                            <div class="content-meta">
                                                <span class="content-favicon"></span>
                                                <div class="content-url text-dark fs-14 old-green">sarjanamalam.com >
                                                    privacy</div>
                                            </div>
                                            <p class="content-title old-blue text-dark fs-16">Bagas 31 | Situs download
                                                masa kini</p>
                                        </a>
                                        <div>
                                            <div><strong>Founded on:</strong> Oktober 17, 2019</div>
                                            <div><strong>Founder:</strong> Bintang Tobing</div>
                                        </div>


                                        <div class="also-search mt-3">
                                            <div class="d-flex justify-content-between align-content-center">
                                                <div><a href="" class="text-dark">
                                                        <h4>People also search for</h4>
                                                    </a></div>
                                                <div class="d-flex justify-content-between align-content-center"><a
                                                        href="" class="text-secondary"><small>View 15+ more</small></a>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAEgASAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAAMEBQcBAgj/xAA1EAACAQMDAgQFAQYHAAAAAAABAgMABBEFEiExQQYTUWEicYGRobEHFDLB4fAVQkNTYnLR/8QAGQEAAgMBAAAAAAAAAAAAAAAAAwQAAQIF/8QAIhEAAgICAgICAwAAAAAAAAAAAAECEQMhBBITMSJBFFFh/9oADAMBAAIRAxEAPwAhZgZKelIC8U5c2Bjfbgj6VLi0d5VBANSyFSGcjBXj501PPHCo86VE5wAWGSavn0aRIy5XIUZNfPMj3XiPUZry4O8yMSAx4Reyj5CpdezS+WjZo9Rt9uG3IR7g0/b3UNzho2yu7BzwQazXTNTu7RBY6gJJ4c4imQ7nh9B/yH6UVeEVubjXDY3QKs8JmQsCodQcZAPufzUTTJKDRpthBbvarlVJ78VEkS0S6K7c89jxTTTyWK+WCDTaxPMfNPNbiscHaK7N6Jrw2LD+AZpVHSJ3OMCuUbywKbCa4ayfb5oU9xTQu7ZZ1QDC4p2XTYZNpJIIpg6NHu3BznOaDot0WQaNhlSCKw3X9F07/GLids20aylWC5xkHGcdhWyxaeY4yokbp61kf7Q7OWHWpLWO7jCSr5jop5Geob0zjNByLWhjB1Vv7K2y0rTDObuHM2CcMy4Vj9RRPoCvfeKLDylWLYCGxj4Y8ZKg+hIH4oDRZdPjSYXeUzxEGJBPzxWifs7ZbxLgJIgvVIdlx8WwjA578g0GMG5rehnJNLG3Ww9uNGtp+SCprg0iGOPCk0/A0kNqWmO5lHJ9ag6fqrXssisuFWnFFs5yVsfg0uLqSa5XtdUiEvlbTnOKVRwkvopsG11i7H+qaeXXbvpvz9KpR0qq1LVTbPIiMNqjDe5/pSPHU8svejUmkglvvFF3armMgsfXtWa+JLl7++kllbdcSHLZ43dcYx6ZqSt68rYZ8kc/mo2owLeLtk4+Xaul4oqNAuzTtA9Z2xN0CzlwrHJ3bsetFHhnUYv3q4aGYrcjb8I4IQdOfqaoLPRzY3GYJGw/wlM53CrvSrKKyctGnxHqaHjwtTthsmZSx9UHcHie48jybqQup/zHrUm0vkQF7d9wb6Gg9ssDXnSr829/5L8KRn84/n+KJlhcfj7Axk0w0W7IlEnJOc0qg+YaVcr8nJ+w3VEa6n/drdpT1A4oAvLt2SUyE85JOfvRX4hmAjEW/Ax96B9Zl2wu/IwD0707xIePCv6Dk7kP6fNJIi7Ms7LuOPTt9z+lXs4s4wVtppblv9x12KPpzk/b60F6ZdoUSOTdggYQHhvdvb0Hzq7W7UALkfIUzGSMtE2bOVKdQc59KkRzDqpJ579aqZLredifWvazmMcmtdtlUFEpt2sUlgaMT5APJB7Z4/sffFDqXKnWBFnhZCuPZhn+ZpRakAwHIPqO1UEl6W1yZi2dr9cYzgChJKGkEbcts1uE7okYnJKiu1D0mUT2McgOcjn2PelXD5C6ZZILF6KvX4JlMkpIYehIOB27D9aGYNIk12aW3VmiSNCzyFCPix8K9xyffpmlSp6XImlQWfHhGCmgZtozakm4XDjgJ3Y/+VKAaPGctcSc7R0QevzpUqdFC0tY9qYH8XcntTkgzwOaVKtlD9pCoViRziqG9sWt9REoZ1E6+au7/sVP5U12lQsraWguNJyph34JuC1vJE556r70qVKuPyG3O2GywUHUT//Z"
                                                            width="72" height="72">
                                                        <div>Fakhri Husaini</div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <footer class="footer mt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-menu">
                                    <ul>
                                        <li>Indonesia</li>
                                        <li><strong>{{$ipGet}}</strong></li>
                                        <li><a href="">From your place (Home)</a></li>
                                        <li><a href="">Use precise location</a></li>
                                        <li><a href="">Learn more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-bottom"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-menu">
                                    <ul>
                                        <li>
                                            <a href="/privacy">Privasi</a>
                                        </li>
                                        <li>
                                            <a href="/help">Bantuan</a>
                                        </li>
                                        <li>
                                            <a href="/feedback">Umpan balik</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        $(function () {





        })

        let videoSwipper = new Swiper('.swiper-container', {

            navigation: {
                nextEl: '.swipe-next',
                prevEl: '.swipe-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                    slidesPerGroup: 3,
                }
            }
        });

    </script>
</body>

</html>
