<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titleweb')</title>
    <meta name="description" content="@yield('desctitle')">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{!!asset('css/homepage/loginreg/iofrm-style.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/homepage/loginreg/iofrm-theme2.css')!!}">
</head>

<body>
    <?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
    <div class="form-body">
        <div class="website-logo">
            <a href="/">
                <div class="logo">
                    <img class="logo-size" src="{!!asset('storage/img/logopname.png')!!}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Jangan pernah lepaskan ide idemu dengan masuk ke platform <span
                                class="text-gradient-blue-sarjana">sarjanamalam.</span></h3>
                        <p>Never lose your brilliant ideas with loggin platform.</p>
                        <div class="page-links">
                            <a href="/signin/{{$tokens}}" class="@yield('activelog')">Login</a><a
                                href="/daftar/{{$tokens}}" class="@yield('activereg')">Register</a>
                        </div>
                        @yield('contentauth')
                        <div class="other-links">
                            <span>Pantau terus sosial medianya <span
                                    class="text-gradient-blue-sarjana">#sarjanamalam</span><a
                                    href="http://facebook.com/sarjanamalamdotcom" target="_blank">Facebook</a><a
                                    href="http://instagram.com/sarjanamalamdotcom" target="_blank">Instagram</a><a
                                    href="https://twitter.com/sarjanamalamcom" target="_blank">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>
