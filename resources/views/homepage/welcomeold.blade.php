<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
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
    <link rel="stylesheet" href="{!!asset('css/homepage/mainlib.css')!!}">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>

    {{-- SOCIAL MEDIA TAGS --}}
    {{-- FACEBOOK SOCMED --}}
    <meta property="fb:admins" content="110102153747274">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{URL::current()}}">
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1584421114/based/Official_sarjanamalam_logo_copyright_2020_hecjnh.jpg')!!}">
    <meta property="og:description" content="@yield('metadesc')">
    <meta property="og:site_name" content="Sarjanamalam.">
    {{-- TWITTER SOCMED --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@sarjanamalamcom">
    <meta name="twitter:creator" content="@sarjanamalamcom">

</head>
@yield('content')
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
