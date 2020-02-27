@inject('userMod', 'App\UserMod')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sarjanamalam Forum :: @yield('title')</title>
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <meta name="title" content="Sarjanamalam Forum :: @yield('title')">
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
    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('metadesc')" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

    {{-- HEADER & MENU --}}
    <div class="body-inner">

        <div id="topbar" class="d-none d-xl-block d-lg-block" style="padding-bottom: 16px;padding-top: 16px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="topbar-dropdown">
                            <a href="/" class="title"><img src="{!!asset('storage/logoofficial-mini.png')!!}"
                                    alt="Logo Sarjanamalam." class="forum-logo-sarjanamalam img-fluid"></a>
                        </div>
                        <div class="topbar-dropdown">
                            <a class="title">Our Forum &nbsp;<i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-list">
                                <a href="#" class="list-entry">Dashboard Profile</a>
                                <a class="list-entry" href="#">My Messages</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li><a href="#"><span style="font-size: 20px;"><i class="far fa-comment"></i></span></a>
                                </li>
                                <li><a href="#"><span style="font-size: 20px;"><i
                                                class="fas fa-user-circle"></i></span></a>
                                </li>
                            </ul>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <header id="header" data-fullwidth="true" class="header-alternative">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="index.html">
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
                            ucis<li>
                                <a id="btn-search" href="#"> <i class="fas fa-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="fas fa-user-alt"></i></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
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
                                    <li class="dropdown"><a href="#">Our Forum <i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Topbar</a>
                                            </li>
                                        </ul>
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
                {{-- <div class="sidebar sticky-sidebar col-lg-3">
                        <div class="widget ">
                            <img src="@if(!auth()->user()->displaypic){!!asset('storage/img/default.png')!!}
                                @else{!!asset('file/profilepic/'.auth()->user()->displaypic)!!}@endif"
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
        </div> --}}
        <div class="content col-lg-9">
            @yield('content')
        </div>
        <div class="sidebar sticky-sidebar col-lg-3">

            <div class="widget  widget-newsletter">
                <form class="widget-subscribe-form" novalidate action="/" role="form" method="post">
                    <h4 class="widget-title">Trending Topic</h4>
                    <ul class="list list-arrow-icons">
                        @foreach ($category_data as $cat)
                        <li> <a title="" href="#">{{$cat->category}} </a></li>
                        @endforeach
                    </ul>
                </form>
            </div>
            <div class="widget  widget-tags">
                <h3 class="widget-title">Trending Hashtags</h3>
                <div class="tags">
                    <a href="#">#Design</a>
                    <a href="#">#Portfolio</a>
                    <a href="#">#Digital</a>
                    <a href="#">#Branding</a>
                    <a href="#">#HTML</a>
                    <a href="#">#Clean</a>
                    <a href="#">#Peace</a>
                    <a href="#">#Love</a>
                    <a href="#">#CSS3</a>
                    <a href="#">#jQuery</a>
                </div>
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
