<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="bintang j tobing">
    <meta name="description" content="@yield('metadesc')">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

    <link href="{!!asset('css/new/css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/new/css/custom.css')!!}">
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">

                    <div id="logo"> <a href="/"><span class="logo-default">sarjanamalam.</span><span
                                class="logo-dark">sarjanamalam.</span></a> </div>
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/tentang-sarjana-malam" class="@yield('aktiftentang')">Tentang</a></li>
                                    <li><a href="/yang-kami-buat" class="@yield('aktifproduk')">Produk Kami</a></li>
                                    <li><a href="/yang-kami-buat" class="@yield('aktifcerita')">Cerita Kami</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    </div>
    @yield('content')
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
                                        <li><a href="#">Hubungi kami</a></li>
                                        <li><a href="#">Relasi sponsor</a></li>
                                        <li><a href="/event">Event</a></li>
                                        <li><a href="#">Karir</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="#">Meet with Sarjanamalam.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">Dukungan</div>
                                    <ul class="list">
                                        <li><a href="#">F.A.Q</a></li>
                                        <li><a href="#">Privasi</a></li>
                                        <li><a href="#">Umpan balik</a></li>
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
                        <div class="copyright-text text-left"><img src="{!!asset('storage/img/footer/footer.svg')!!}"
                                alt="Logo sarjanamalam." class="img-footer-belong"></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright-text text-right">
                            <a href="/help" class="mr-2">Help</a>
                            <a href="/privacy" class="mr-2">Privacy</a>
                            <a href="/terms" class="mr-2">Terms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>
    <script src="{!!asset('js/functions.js')!!}"></script>
    <script src="{!!asset('css/new/plugins/js/infinite-scroll.min.js')!!}"></script>
</body>

</html>
