@extends('homepage.welcome')
@section('titlefront','Bantuan -')
@section('content')
<div class="cover-container-fluid d-flex w-100 h-100 p-4 flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64));?>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{!!asset('storage/img/sarjanalogo_onweb.png')!!}" class="imghome">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Our Stories</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Our Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="head" id="head">
        <div class="container-fluid text-center">
            <h1>About us</h1>
        </div>
    </section>

    @endsection
