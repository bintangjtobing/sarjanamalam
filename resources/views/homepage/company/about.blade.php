<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="bintang j tobing">
    <meta name="description" content="@yield('metadesc')">
    <meta name="keywords" content="@yield('metakey')">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
    <meta name="language" content="English">

    <title>@yield('title')</title>

    <link href="{!!asset('css/new/css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/red.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/event-style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/font-awesome.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/themify-icons.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/new/css/custom.css')!!}">
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">

                    <div id="logo"> <a href="/"><span class="logo-default">sarjanamalam.</span><span
                                class="logo-dark">sarjanamalam.</span></a> </div>
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/tentang-sarjana-malam" class="@yield('aktiftentang')">Tentang</a></li>
                                    {{-- <li><a href="/yang-kami-buat" class="@yield('aktifproduk')">Produk Kami</a></li>
                                    <li><a href="/yang-kami-buat" class="@yield('aktifcerita')">Cerita Kami</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    </div>
    @yield('content')
    <section class="p-t-18 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 m-b-30">
                            <h4>Ikuti kami di sosial media</h4>
                            <div class="social-icons social-icons-light social-icons-colored-hover">
                                <ul>
                                    <li class="social-facebook"><a href="https://facebook.com/sarjanamalamdotcom"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-twitter"><a href="https://twitter.com/sarjanamalamcom"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-instagram"><a href="https://instagram.com/sarjanamalamdotcom"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="widget">
                                    <div class="widget-title">Lebih dari kami</div>
                                    <ul class="list">
                                        <li><a href="/hubungi-sarjanamalam">Hubungi kami</a></li>
                                        <li><a href="/partnership">Relasi sponsor</a></li>
                                        <li><a href="/event">Event</a></li>
                                        <li><a href="/karir-sarjanamalam">Karir</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="/meet-sarjanamalam">Meet with Sarjanamalam.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">Dukungan</div>
                                    <ul class="list">
                                        <li><a href="/frequently-asked-question">F.A.Q</a></li>
                                        <li><a href="/privacy">Privasi</a></li>
                                        <li><a href="/feedback">Umpan balik</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="copyright-text text-left"><img src="{!!asset('storage/img/footer.png')!!}"
                                alt="Logo sarjanamalam." class="img-footer-belong"></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright-text text-right">
                            <a href="/help" class="mr-2">Help</a>
                            <a href="/privacy" class="mr-2">Privacy</a>
                            <a href="/privacy#tos" class="mr-2">Terms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
    <a id="scrollTop"><span class="ti-angle-up"></span></a>
    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>
    <script src="{!!asset('js/functions.js')!!}"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'>
    </script>
    <script src="{!!asset('js/gmap3.min.js')!!}"></script>
    <script src="{!!asset('js/map-styles.js')!!}"></script>
    <script src="{!!asset('css/new/plugins/js/infinite-scroll.min.js')!!}"></script>
    <link rel="stylesheet" href="{!!asset('css/dropzone.css')!!}">
    <script src="{!!asset('js/dropzone.js')!!}"></script>

</body>

</html>
