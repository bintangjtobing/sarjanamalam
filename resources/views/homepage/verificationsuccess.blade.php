<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="bintang j tobing">
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <meta name="robots" content="index, nofollow">
    <meta name="language" content="English">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/homepage/loginreg/iofrm-theme2.css')!!}">
    <title>Email berhasil diverifikasi - Sarjanamalam</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900");

        *,
        body {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }

        img {
            margin-top: 8.05%;
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            max-width: 25% !important;
        }

        h3 {
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center;
            font-weight: 900;
        }

    </style>
</head>

<body>
    <div class="container">
        <img src="{!!asset('storage/exceptions/kingdom-4.png')!!}" alt="">
        <h3>Email berhasil diverifikasi!</h3>
        <p class="text-center">Yes! Selamat kamu berhasil memverifikasi email kamu!<br>
            Browser ini akan kembali ke halaman autentikasi untuk masuk ke forum utama <span
                class="text-gradient-blue-sarjana">sarjanamalam.</span><br>
            <span id="countdown">5</span> seconds
        </p>
    </div>
    <script>
        var seconds = 5;

        function countdown() {
            seconds = seconds - 1;
            if (seconds < 0) {
                window.location = "/";
            } else {
                document.getElementById("countdown").innerHTML = seconds;
                // Count down using javascript
                window.setTimeout("countdown()", 1000);
            }
        }

        countdown();

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
