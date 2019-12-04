@extends('homepage.welcome')
@section('title','- Login')
@section('content')
<div class="cover-container-fluid d-flex w-100 h-100 p-4 flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <nav class="nav nav-masthead justify-content-end">
                <a class="nav-link" href="/register" hidden>Masuk</a>
            </nav>
        </div>
    </header>
    <div class="container text-center">
        <?php $tokens= bin2hex(openssl_random_pseudo_bytes(64)); ?>
        <form action="/get-verification/{{$tokens}}" method="post">
            {{ csrf_field() }}
            <div class="login text-left">
                <h3><strong>Masuk</strong></h3>
                <p>Masuk untuk melanjutkan ke <strong>Sarjanamalam</strong>.</p>
                @if(session('sukses'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Congratulations!</h4>
                            <p>Yeay! Kamu berhasil mendaftar keanggotaan di <strong>Sarjanamalam</strong>!</p>
                            <p class="mb-0">{{session('sukses')}} <strong><a
                                        href="https://instagram.com/sarjanamalamdotcom" target="_blank"
                                        data-toggle="tooltip" data-placement="bottom"
                                        title="Follow us on Instagram!">sarjanamalam</a></strong> loh.</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                @elseif(session('gagal'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Sign in failed!</h4>
                            <p class="mb-0">{{session('gagal')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endif
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                    required>
                <small class="form-text mb-3"><a href="/forgotpassword">Lupa password/email?</a></small>
                <button type="submit" class="btn btn-sarjana">Masuk</button>
                <small class="form-text mt-4">Belum punya akun? <a href="/daftar/{{$tokens}}">Buat akun!</a></small>
            </div>
        </form>
    </div>
    @endsection
