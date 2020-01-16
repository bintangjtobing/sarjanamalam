@extends('homepage.welcomenew')
@section('title','Sarjanamalam. | Hi there!')
@section('metadesc','Hi semua. Yuk ikutan gabung di forum komunitas sarjanamalam. Masuk dulu dan lihat kelebihan
kelebihannya.')
@section('content')
<nav class="navbar navbar-expand-sm navbar-light mt-2">
    <div class="container">
        <div class="d-flex justify-content-end w-100" id="collapsibleNavId">
            <ul class="navbar-nav navbar-mobile ml-auto mt-2 mt-lg-0">
                @if(Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Managements</a>
                </li>
                @else
                <li class="nav-item">
                    <?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
                    <a class="nav-link" href="/signin/{{$tokens}}">Masuk</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="fas fa-ellipsis-v"></span>
                    </a>
                </li>

                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="nav-item-user">
                            <span class="fas fa-user"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="dropdownId">
                        <a class="dropdown-item nav-user-name" href="#"><span class="font-weight-bold ">Bintang
                                Jr Tobing</span></a>
                        <a class="dropdown-item" href="#">Profile Saya</a>
                        <a href="#" class="dropdown-item">Keluar</a>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                <form action="">
                    <h2 class="search-title text-center">Sarjanamalam.</h2>
                    <div class="main-search">

                        <span class="search-icon icon-left fas fa-search"></span>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
