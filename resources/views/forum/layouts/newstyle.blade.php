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
    <div class="loader-inner ball-pulse">

    </div>
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
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li><a href="#"><span style="font-size: 20px;"><i class="far fa-comment"></i></span></a>
                                </li>
                                <li><a href="#"><span style="font-size: 20px;"><i
                                                class="fas fa-user-circle"></i></span></a>
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
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>


                    <div id="mainMenu" class="menu-center menu-lowercase">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="#" class="active">Threads</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Jobs</a></li>
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

                    <div class="sidebar sticky-sidebar col-lg-3">

                        <div class="widget ">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                alt="User profile" class="img-fluid newgen-profile">
                            <h3 class="text-center">Bintang Tobing</h3>
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
                                <p>Views</p>
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
                    </div>
                    <div class="content col-lg-6">

                        <div class="page-title">
                            <div class="card">
                                <div class="card-header">
                                    <span class="newtopic-th"><span><i class="fas fa-pen-square"></i> Bagikan topik
                                            baru</span></span>
                                </div>
                                <div class="card-body">
                                    <form id="form2" class="form-validate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="">Judul topik pembahasan</label>
                                                <input type="text" name="subject" id="subject"
                                                    class="form-control mb-3">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="">Pilih kategori topik</label>
                                                <select name="" class="form-control mb-3" id="">
                                                    <option value="">Abcd</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <textarea name="" id="newwrite" placeholder="Tulis disini" cols="30"
                                                    rows="10" autofocus></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-right">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-gradient-blue-sarjana">Buat
                                                        topik</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="blog">
                            <div class="post-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <p><span style="font-size: 3rem; color: #4aa5e7;"><i
                                                                class="far fa-check-circle"></i></span><br><span
                                                            class="text-gradient-blue-sarjana">Berhasil!</span> Thread
                                                        baru berhasil diterbitkan!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-8 text-left">
                                                    <p><span class="post-meta-date"><img
                                                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                                                alt="Postingan" class="img-fluid thread-profilepic">
                                                            Bintang
                                                            Tobing</span></p>
                                                </div>
                                                <div class="col-lg-4 text-right">
                                                    <span class="text-gradient-blue-sarjana">#techno</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-title">
                                            <h4>Standard post with single threads</h4>
                                            <p class="muted-text">Dibuat 3 jam yang lalu</p>
                                        </div>
                                        <div class="card-text">
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more recently with desktop publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-7 text-left">
                                                    <span style="font-size: .75rem;" class="mr-3"><a href="#"><i
                                                                class="fas fa-bookmark"></i> 1,985
                                                            favorited</a></span><span style="font-size: .75rem;"><a
                                                            href="#"><i class="fas fa-comment"></i>
                                                            657
                                                            comments</a></span>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <span style="font-size: .75rem;"><a href="#"><i
                                                                class="far fa-eye"></i> 2K+
                                                            views</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-text my-3">
                                            <div class="row">
                                                <div class="col-lg-12 text-left">
                                                    <span style="font-size: 1rem;" class="mr-3"><a><i
                                                                class="bookmark far fa-bookmark"></i>
                                                            Favorite</a></span>
                                                    <span style="font-size: 1rem;"><a href=""><i
                                                                class="far fa-comment"></i> Comment</a></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <ul class="pagination">

                        </ul>

                    </div>


                    <div class="sidebar sticky-sidebar col-lg-3">

                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php"
                                role="form" method="post">
                                <h4 class="widget-title">Trending Topic</h4>
                                <ul class="list list-arrow-icons">
                                    <li> <a title="" href="#">Development </a> </li>
                                    <li> <a title="" href="#">Branding </a> </li>
                                    <li> <a title="" href="#">Marketing </a> </li>
                                    <li> <a title="" href="#">Branding </a> </li>
                                    <li> <a title="" href="#">Strategy solutions</a> </li>
                                    <li> <a title="" href="#">Copywriting </a> </li>
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
        <script src="http://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            $(function () {
                $(".bookmark").click(function (e) {
                    e.preventDefault()
                    $(this).toggleClass('fas')
                });
            });

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

</body>

</html>
