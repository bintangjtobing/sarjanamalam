<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
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
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>

    {{-- SOCIAL MEDIA TAGS --}}
    {{-- FACEBOOK SOCMED --}}
    <meta property="fb:admins" content="110102153747274">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{URL::current()}}">
    <meta property="og:image"
        content="{!!asset('storage/img/Official%20sarjanamalam%20logo%20copyright%202020.jpg')!!}">
    <meta property="og:description" content="@yield('metadesc')">
    <meta property="og:site_name" content="Sarjanamalam.">
    {{-- TWITTER SOCMED --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@sarjanamalamcom">
    <meta name="twitter:creator" content="@sarjanamalamcom">
    <link rel="stylesheet" href="{!!asset('css/homepage/style.css')!!}">
</head>

<body>

    <div class="homestyle inner inner-bg-image">

        @yield('content')

        <footer class="footer pb-3">
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container-fluid">
                    <div class="" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tentang-sarjana-malam">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/privacy">Privasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/help">Bantuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/feedback">Umpan balik</a>
                            </li>
                            <li class="nav-item">
                                <a href="/how-search-works" class="nav-link" href="#">Cara kerja penelusuran</a>
                            </li>
                            <li class="nav-item with-divider">
                                <a class="nav-link">&copy; 2019 Sarajanamalam</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>

</html>