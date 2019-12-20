<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="bintang j tobing">
    <meta name="description" content="Sarjanamalam is coming soon on 20 February 2020.">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <title>Sarjanamalam.</title>

    <link href="{!!asset('css/new/css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/style.css')!!}" rel="stylesheet">
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>


                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li class="current"><a href="#">Masuk</a></li>
                                    {{-- <li class="dropdown"> <a href="#">Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Topbar</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

            <div class="slide" data-bg-parallax="images/parallax/4.jpg">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">

                        {{-- <span data-animate="fadeInUp" data-animate-delay="300" class="strong"><a href="#"
                                class="business"><span class="business">Let's Do This</span></a>
                        </span> --}}
                        <h1 data-animate="fadeInUp" data-animate-delay="600">sarjanamalam.</h1>
                        <div class="searchsarjana">
                            <form action="#" method="get">
                                <input type="text" name="search" class="cariform">
                                <button type="submit" class="sarjanasearchbtn"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5
                                            3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5
                                            4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14
                                            9.5 11.99 14 9.5 14z">
                                        </path></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="float-left">
                                <ul>
                                    <a href="#" class="footersarjana">Tentang Kami</a>
                                    <a href="#" class="footersarjana">Privasi</a>
                                    <a href="#" class="footersarjana">Bantuan</a>
                                    <a href="#" class="footersarjana">Umpan Balik</a>
                                    <a href="#" class="footersarjana">Cara kerja penelusuran</a>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="copyright-text text-right">&copy; 2019 sarjanamalam.
                            </div>
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
</body>

</html>
