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
                        {{-- <div class="topbar-dropdown">
                            <div class="title"><i class="fa fa-user"></i><a href="#">Login</a></div>
                            <div class="topbar-form">
                                <form>
                                    <div class="form-group">
                                        <label class="sr-only">Username or Email</label>
                                        <input type="text" placeholder="Username or Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Password</label>
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-inline form-group">
                                        <div class="form-check">
                                            <label>
                                                <input type="checkbox">
                                                <small class="m-l-10"> Remember me</small> </label>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="topbar-dropdown">
                            <a class="title"><img src="{!!asset('storage/logoofficial-mini.png')!!}"
                                    alt="Logo Sarjanamalam." class="forum-logo-sarjanamalam img-fluid"></a>
                        </div>
                        <div class="topbar-dropdown">
                            <a class="title">English <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-list">
                                <a class="list-entry" href="#">French</a>
                                <a class="list-entry" href="#">Spanish</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li><a href="#"><i class="fas fa-user-circle"></i> <i class="fa fa-caret-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <header id="header" data-fullwidth="true" class="header-alternative">
            <div class="header-inner">
                <div class="container">
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>


                    <div class="header-extras">
                        <ul>
                            {{-- <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li> --}}
                            {{-- <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>


                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>


                    <div id="mainMenu" class="menu-center menu-lowercase">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="#">Threads</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Jobs</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>


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
                selector: 'textarea',
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
