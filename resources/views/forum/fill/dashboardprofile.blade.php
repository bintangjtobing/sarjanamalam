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
                    <div id="blog">
                        <div class="post-item">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-lg-8 text-left">
                                                <h5>Tentang kamu</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-title">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="blog">
                        <div class="post-item">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-lg-8 text-left">
                                                <h5>Hal yang kamu suka</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-title">
                                        <div class="widget  widget-tags">
                                            <div class="tags">
                                                <a href="#">Design</a>
                                                <a href="#">Portfolio</a>
                                                <a href="#">Digital</a>
                                                <a href="#">Branding</a>
                                                <a href="#">HTML</a>
                                                <a href="#">Clean</a>
                                                <a href="#">Peace</a>
                                                <a href="#">Love</a>
                                                <a href="#">CSS3</a>
                                                <a href="#">jQuery</a>
                                                <a href="#">HTML</a>
                                                <a href="#">Clean</a>
                                                <a href="#">Peace</a>
                                                <a href="#">Love</a>
                                                <a href="#">CSS3</a>
                                                <a href="#">jQuery</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="blog">
                        <div class="post-item">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-lg-8 text-left">
                                                <h5>Informasi pendidikan</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p><strong>Universitas Prima Indonesia</strong><br>Kuliah disini
                                                    mengambil
                                                    jurusan Sistem Informasi dan gagal melanjutkan kuliah di semester 3.
                                                </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="data:image/png;base64,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"
                                                    alt="">
                                            </div>
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
