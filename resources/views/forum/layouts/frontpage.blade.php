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
        content="Complex search engine, including discussions in the community system. Sarjanamalam can help you in your lectures and daily activities.">
    <meta name="language" content="English">
    <meta name="author" content="Sarjanamalam.">
    <meta name="keywords" content="sarjanamalam, sarjanamalam communities, sarjana,malam, communities, forum online">
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
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1584421114/based/Official_sarjanamalam_logo_copyright_2020_hecjnh.jpg    ')!!}">

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
                            <img src="{!!asset('storage/logoofficial-mini.png')!!}" data-toggle="tooltip"
                                data-placement="bottom" title="Back to homepage" class="logo-default">
                        </a>
                    </div>
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a href="/messages/{{$tokens}}">
                                    <img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1583810435/based/paper-plane_tbosw0.svg"
                                        class="chaticon-forum mx-2" data-toggle="tooltip" data-placement="bottom"
                                        title="Private Messages"></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#">
                                        @if(Auth::check())<img
                                            src="@if(!auth()->user()->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                            @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                                            alt="Profile picture"
                                            class="img-roundedforum">@if(auth()->user()->verified==1)
                                        <span title="Verified"
                                            style="position: relative; margin-left: -15px; margin-top: 25px; border-radius: 50%;top: 15px; right: 3px;">
                                            <img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1585802082/based/eight-check-verified_ge92d7.png"
                                                alt="Verified" style="width:15px !important; height:15px !important;
                                            margin-left:2px;position:relative;"></span>
                                        @else
                                        @endif
                                        @else
                                        <img src="{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}"
                                            alt="Profile picture" class="img-roundedforum">
                                        @endif</a>
                                    @if(Auth::check())
                                    <?php $enc_id = Crypt::encrypt(auth()->user()->id); ?>
                                    <ul class="p-dropdown-content">
                                        <?php $enc_id = base64_encode(auth()->user()->id) ?>
                                        <li><a><b>{{auth()->user()->name}}</b></a></li>
                                        <hr>
                                        <li><a href="/{{auth()->user()->username}}">Dashboard Profile</a>
                                        </li>
                                        <li><a href="/{{auth()->user()->username}}/settings">Settings</a>
                                        </li>
                                        <li><a href="/logout/{{auth()->user()->id}}/{{$tokens}}">Sign out</a></li>
                                    </ul>
                                    @else
                                    <ul class="p-dropdown-content">
                                        <li><a href="/">Login Account</a>
                                        </li>
                                        <li><a href="/register">Create your account</a></li>
                                    </ul>
                                    @endif
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
                                    <li class="dropdown"><a href="#">@yield('discover') <i
                                                class="fas fa-caret-down"></i></a>
                                        @if(Auth::check())
                                        <ul class="dropdown-menu">
                                            <li><a href="/forum/{{$tokens}}"
                                                    class="@yield('aktifdw-threads')">Threads</a></li>
                                            <li><a href="/search-events/{{$tokens}}"
                                                    class="@yield('aktifdw-events')">Events</a>
                                            </li>
                                            <li><a href="/jobs/{{$tokens}}" class="@yield('aktifdw-jobs')">Jobs</a>
                                            </li>
                                        </ul>
                                        @else
                                        @endif
                                    </li>
                                    <li>
                                        <form action="/search?" method="GET"><input type="search" class="search-for"
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
        <section id="page-content" class="sidebar-both">
            <div class="container">
                <div class="row">
                    @if(Auth::check())
                    <div class="sidebar sticky-sidebar col-lg-3">
                        <div class="widget widget-tags mb-3">
                            <h3 class="widget-title">5 Trendic Topics</h3>
                            <ul class="list list-arrow-icons" style="margin-bottom:0 !important;">
                                @foreach ($countdesc as $count)
                                <?php $enc_id = Crypt::encrypt($count->id); ?>
                                <li class="lilist"><a class="trend-list"
                                        href="/details/{{$enc_id}}/">{{Str::limit($count->subject, 40)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @else
                    @endif
                    <div class="content @if(!Auth::check())col-lg-12 @else col-lg-9 @endif">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>
    <script src="{!!asset('js/functions.js')!!}"></script>
    <script src="{!!asset('js/metafizzy/infinite-scroll.min.js')!!}"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'>
    </script>
    <script src="{!!asset('js/gmap3.min.js')!!}"></script>
    <script src="{!!asset('js/map-styles.js')!!}"></script>

    {{-- Javacript started --}}
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script> --}}
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
            height: 600,
            toolbar: true,
            statusbar: false,
            branding: false,
            menubar: true,
            mobile: {
                menubar: true
            }
            plugins: 'lists code emoticons',
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
            height: 600,
            toolbar: true,
            statusbar: false,
            branding: false,
            menubar: true,
            mobile: {
                menubar: true
            }
            plugins: 'lists code emoticons',
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>

</html>
