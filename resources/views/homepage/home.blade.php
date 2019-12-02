@extends('homepage.welcome')
@section('content')
<div class="cover-container-fluid d-flex w-100 h-100 p-4 flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <nav class="nav nav-masthead justify-content-end">
                <?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
                <a class="nav-link" href="/signin/{{$tokens}}">Masuk</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover text-center">
        <h1 class="pb-2">sarjanamalam.</h1>
        <form action="/search">
            <div class="input-field text-center">
                <input class="form-control" id="choices-text-preset-values" type="text" autofocus>
                <button class="btn-search" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </main>
    @endsection
