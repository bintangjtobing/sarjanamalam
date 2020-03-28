<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68593210-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-68593210-11');

    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DKG7BR');

    </script>
    <!-- End Google Tag Manager -->

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
    <meta name="keywords" content="sarjanamalam, sarjanamalam communities, sarjana,malam, communities, forum online">
    <meta name="_token" conntent="{{csrf_token()}}">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

    {{-- SOCIAL MEDIA TAGS --}}
    {{-- TWITTER SOCMED --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@sarjanamalamcom">
    <meta name="twitter:creator" content="@sarjanamalamcom">
    <link rel="stylesheet" href="{!!asset('css/homepage/style.css')!!}">

    {{-- METAGRAPH FACEBOOK --}}
    <meta property="fb:admins" content="114499413304839">
    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('metadesc')" />
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1584421114/based/Official_sarjanamalam_logo_copyright_2020_hecjnh.jpg')!!}">

    {{-- VERIFICATION --}}
    <meta name="yandex-verification" content="047b2f981a7891e7" />

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DKG7BR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Sarjanamalam",
            "url": "https://sarjanamalam.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://sarjanamalam.com/search?={search_term_string}",
                "query-input": "required name=search_term_string"
            }

    </script>
    <div id="cookieNotify" class="modal-strip cookie-notify background-dark" data-delay="3000" data-expire="1"
        data-cookie-name="cookiebar2020_1" data-cookie-enabled="true" style="background-color: #3485c1;color: #fff;">
        <div class="container">
            <div class="row p-2">
                <div class="col-lg-8 text-sm-center sm-center sm-m-b-10 m-t-5">Temukan informasi terbaru tentang
                    COVID-19 <a href="https://sarjanamalam.com/sarjanamalam-peduli-sehat" class="text-light"><span>
                            <b>disini.</b> <i class="fa fa-info-circle"></i></span></a>
                </div>
                <div class="col-lg-4 text-right sm-text-center sm-center">
                    <button type="button" class="close" data-dismiss="modal-strip" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="homestyle inner inner-bg-image">

        @yield('content')

        <footer class="footer py-1" style="background-color:#fff; box-shadow: 0 0 10px 0 rgba(154, 161, 171, .35);">
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
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="/help">Bantuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/feedback">Umpan balik</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="/how-search-works" class="nav-link" href="#">Cara kerja penelusuran</a>
                            </li>
                            <?php $currentYear = date('Y'); ?>
                            <li class="nav-item with-divider">
                                <a class="nav-link">&copy; {{$currentYear}} Sarjanamalam. Beta version.</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(function () {
            //alert("test");
            //fetch_customer_data();

            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    dataType: 'json',
                    success: function (data) {
                        console.log(data)
                        $('#result').addClass("final");
                        let html = `<div class="result-item"><table class="table table-bordered table-hover text-left">
                            <tbody> ${data.table_data}
                            </tbody>
                        </table></div>`;
                        //nyari apa bang? wkwkwk petik petik dimana  bang? yang di bawah esc  itu? atau petik 1?yang tadi  itu? ya
                        $('#result').html(html);
                    },
                    error: function (err) {
                        console.log(err);
                    }
                })
            }

            // dimana browsernya dek ?kwwwk
            $('#search').keyup(function () {
                var query = $(this).val();
                //console.log(query);
                if (query) {

                    fetch_customer_data(query);
                } else {
                    $('#result').html('');
                    $('#result').removeClass("final");
                }

            });

        });

    </script>

</body>

</html>
