@extends('homepage.welcome')
@inject('userMod', 'App\UserMod')
@section('content')
<div class="cover-container-fluid d-flex w-100 h-100 p-4 flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64));?>
            <nav class="nav nav-masthead justify-content-end">
                <a href="/forum/{{$tokens}}" class="nav-link">Forum</a>
                <a class="nav-link" disabled><span style="font-size: 14px;"><i class="fas fa-ellipsis-v"></i></span></a>
                <div class="avatar pull-left dropdown">
                    <a data-toggle="dropdown" href="#"><img src="{{$userMod->getAvatar()}}" alt="avatar"></a>
                    <div class="status @if(auth()->user()->status=='active') green
                        @else
                            red
                        @endif">&nbsp;</div>
                    <ul class="dropdown-menu text-center">
                        <li role="presentation"><a role="menuitem" href="/{{Auth()->user()->name}}"
                                tabindex="-1"><strong>{{Auth()->user()->name}}</strong></a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="/my-profile">Profil saya</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-4"
                                href="/logout/{{auth()->user()->id}}{{$tokens}}">Keluar</a></li>
                    </ul>
                </div>
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

    {{-- <footer class="mastfoot mt-auto">
        <div class="inner">
          <a href="/private" class="ml-2">Privasi</a>
          <a href="/help" class="ml-2">Bantuan</a>
          <a href="/feedback" class="ml-2">Umpan balik</a>
          <a href="/how-search-works" class="ml-2">Cara kerja penelusuran</a>
          <a class="ml-2">|</a>
          <a class="ml-2">&copy; 2019 Sarjanamalam</a>
        </div>
        <div class="inner">

        </div>
      </footer>
    </div> --}}
    @endsection
