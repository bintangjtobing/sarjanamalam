@inject('userMod', 'App\UserMod')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Profile :: {{auth()->user()->name}}</title>
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <meta name="title" content="Dashboard Profile :: {{auth()->user()->name}}">
    <meta name="description"
        content="Complex search engine, includinpg discussions in the community system. Sarjanamalam can help you in your lectures and daily activities.">
    <meta name="keywords" content="sarjanamalam, sarjana, malam, forum sarjana, forum sarjana malam, forum,">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="title" content="Sarjanamalam Forum">
    <meta name="description"
        content="Complex search engine, including discussions in the community system. Sarjanamalam can help you in your lectures and daily activities.">
    <meta name="keywords" content="sarjanamalam, sarjana, malam, forum sarjana, forum sarjana malam, forum,">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Sarjanamalam.">
    <?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>

    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{!!asset('css/newforum/newstyle.css')!!}">
    <link href="{!!asset('css/new/css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/red.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/event-style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/font-awesome.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/themify-icons.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/new/css/custom.css')!!}">

    {{-- METAGRAPH FACEBOOK --}}
    <meta property="fb:admins" content="114499413304839">
    <meta property="og:site_name" content="Dashboard Profile :: {{auth()->user()->name}}" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="Dashboard Profile :: {{auth()->user()->name}}" />
    <meta property="og:description" content="@yield('metadesc')" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <?php $enc_id = base64_encode(auth()->user()->id) ?>
    {{-- MODAL TAMBAH BARU HERE --}}
    <!-- Modal Summary Add new -->

    <div class="modal fade" id="summaryAdd" tabindex="-1" role="dialog" aria-labelledby="summaryAdd" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="summaryAdd">Tentang kamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/summary-add/{{$enc_id}}/{{$tokens}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <textarea name="summary" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal liked Add new -->
    <div class="modal fade" id="likedAdd" tabindex="-1" role="dialog" aria-labelledby="likedAdd" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="likedAdd">Tambah kesukaanmu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/interested-add/{{$enc_id}}/{{$tokens}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="text" name="liked" id="" class="form-control"
                            placeholder="Kesukaan (Cth: Berenang)">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal school Add new -->
    <div class="modal fade" id="schoolAdd" tabindex="-1" role="dialog" aria-labelledby="schoolAdd" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="schoolAdd">Tambah pendidikan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/university-add/{{$enc_id}}/{{$tokens}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <label for="">Sekolah<span class="text-gradient-blue-sarjana">*</span></label>
                        <input type="text" name="university" class="form-control mb-4" id="">
                        <label for="">Bidang studi</label>
                        <input type="text" name="studi" class="form-control mb-4" id="">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <label for="">Tahun masuk</label>
                                <input type="text" name="year_in" class="form-control" id="">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Tahun selesai</label>
                                <input type="text" name="year_out" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- HEADER & MENU --}}
    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="header-alternative">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="/">
                            <img src="{!!asset('storage/logoofficial-mini.png')!!}" class="logo-default">
                        </a>
                    </div>


                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="#" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>


                    <div class="header-extras">
                        <ul>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><img
                                            src="@if(!auth()->user()->displaypic){!!asset('storage/img/default.png')!!}
                                            @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                                            alt="Profile picture" class="img-roundedforum"></a>
                                    <?php $enc_id = Crypt::encrypt(auth()->user()->id); ?>
                                    <ul class="p-dropdown-content">
                                        <?php $enc_id = base64_encode(auth()->user()->id) ?>
                                        <li><a href="/{{auth()->user()->username}}">Dashboard Profile</a>
                                        </li>
                                        <li><a href="/logout/{{auth()->user()->id}}/{{$tokens}}">Sign out</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div id="mainMenu" class="menu-center menu-lowercase">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li class="dropdown"><a href="#">Dashboard profile <i
                                                class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/forum/{{$tokens}}">Threads</a></li>
                                            <li><a href="/search-events/{{$tokens}}">Events</a>
                                            </li>
                                            <li><a href="/jobs/{{$tokens}}">Jobs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <form action="" method="get"><input type="search" class="search-for"
                                                placeholder="Search topic here..." name="get_value" id="" value="">
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        {{-- <header id="header" data-fullwidth="true" class="header-alternative">
            <div class="header-inner">
                <div class="container">
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div id="mainMenu" class="menu-center menu-lowercase">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/forum/{{$tokens}}" class="@yield('aktifthreads')">Threads</a></li>
        <li><a href="/search-events/{{$tokens}}" class="@yield('aktifevents')">Events</a>
        </li>
        <li><a href="/jobs/{{$tokens}}" class="@yield('aktifjobs')">Jobs</a></li>
        </ul>
        </nav>
    </div>
    </div>
    </div>
    </div>
    </header> --}}

    <section id="page-content" class="sidebar-both">
        <div class="container">
            <div class="row">
                <div class="sidebar sticky-sidebar col-lg-3">
                    <div class="widget ">
                        <img src="@if(!auth()->user()->displaypic){!!asset('storage/img/default.png')!!}
                                @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                            alt="User profile" class="img-fluid newgen-profile">
                        <h3 class="text-center">{{auth()->user()->name}}</h3>
                        <p class="text-center">Medan, Indonesia</p>
                    </div>
                    <hr>
                    <div class="row text-center col-newgen">
                        <div class="col-6 bord">
                            <h3>698</h3>
                            <p>Circles</p>
                        </div>
                        <div class="col-6">
                            <h3>1K+</h3>
                            <p>Impress</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <a href="#">
                                <h5>See profiles</h5>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <a href="/logout/{{auth()->user()->id}}/{{$tokens}}">
                                <h5><span style="color:red;"><i class="fas fa-sign-out-alt"></i></span></h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content col-lg-6">
                    {{-- Berhasil summary --}}
                    @if(session('suksessummary'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{session('suksessummary')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(session('suksesinterest'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{session('suksesinterest')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(session('suksesuniversity'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{session('suksesuniversity')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    {{-- SUMMARY --}}
                    <div id="blog">
                        <div class="post-item">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-lg-8 text-left">
                                                <h5>Tentang kamu</h5>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <a data-toggle="modal" data-target="#summaryAdd"><span><i
                                                            class="fas fa-plus"></i></span></a>
                                                {{-- <a data-toggle="modal" data-target="#summaryEdit"><span><i
                                                            class="fas fa-pencil-alt"></i></span></a> --}}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-title">
                                        @foreach ($userGet as $getDetails)
                                        @if($getDetails->summary != '')
                                        <p>{!!$getDetails->summary!!}</p>
                                        @else
                                        @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- LIKED --}}
                    <div id="blog">
                        <div class="post-item">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-lg-8 text-left">
                                                <h5>Hal yang kamu suka</h5>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <a data-toggle="modal" data-target="#likedAdd"><span><i
                                                            class="fas fa-plus"></i></span></a>
                                                {{-- <a data-toggle="modal" data-target="#summaryEdit"><span><i
                                                            class="fas fa-pencil-alt"></i></span></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-title">
                                        <div class="widget  widget-tags">
                                            <div class="tags">
                                                @foreach ($userGet as $getDetails)
                                                @if($getDetails->interested != '')
                                                <a href="#">{!!$getDetails->interested!!}</a>
                                                @else
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- SCHOOL --}}
                    <div id="blog">
                        <div class="post-item">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-lg-8 text-left">
                                                <h5>Informasi pendidikan</h5>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <a data-toggle="modal" data-target="#schoolAdd"><span><i
                                                            class="fas fa-plus"></i></span></a>
                                                {{-- <a data-toggle="modal" data-target="#summaryEdit"><span><i
                                                            class="fas fa-pencil-alt"></i></span></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-title">
                                        <div class="row">
                                            @foreach ($userGet as $getDetails)
                                            @if($getDetails->university != '' && $getDetails->bidang_studi != '' &&
                                            $getDetails->tahun_masuk != '' && $getDetails->tahun_keluar != '')
                                            <div class="col-lg-12">
                                                <h6>{{$getDetails->university}}</h6>
                                                <p>{{$getDetails->tahun_masuk}}
                                                    - {{$getDetails->tahun_keluar}}</p>
                                            </div>
                                            @else

                                            @endif

                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-3">

                    <div class="widget  widget-newsletter">
                        <form class="widget-subscribe-form" novalidate action="/" role="form" method="post">
                            <h4 class="widget-title">User graphic</h4>
                            <ul class="list list-arrow-icons">
                                @foreach ($category_data as $cat)
                                <li> <a title="" href="#">{{$cat->category}} </a></li>
                                @endforeach
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Sarjanamalam",
            "url": "https://sarjanamalam.com/tentang-sarjana-malam",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://sarjanamalam.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }

    </script>
    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>
    <script src="{!!asset('js/functions.js')!!}"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'>
    </script>
    <script src="{!!asset('js/gmap3.min.js')!!}"></script>
    <script src="{!!asset('js/map-styles.js')!!}"></script>
    <script src="{!!asset('css/new/plugins/js/infinite-scroll.min.js')!!}"></script>

    {{-- Javacript started --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#newwrite',
            toolbar: false,
            statusbar: false,
            branding: false,
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            toolbar: true,
            statusbar: false,
            branding: false,
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
</body>

</html>
