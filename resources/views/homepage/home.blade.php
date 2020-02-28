@extends('homepage.welcomenew')
@inject('userMod', 'App\UserMod')
@section('title','Sarjanamalam. | Hi there!')
@section('metadesc','Layanan berbasis situs web aplikasi, yang berguna untuk memudahkan pengguna dalam mencari tempat
untuk saling berbagi ide dan saling berinteraksi untuk merealisasikan ide tersebut.')
@section('content')
<nav class="navbar navbar-expand-sm navbar-light mt-2">
    <div class="container">
        <div class="d-flex justify-content-end w-100" id="collapsibleNavId">
            <ul class="navbar-nav navbar-mobile ml-auto mt-2 mt-lg-0">
                <?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
                @if(Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" href="/forum/{{$tokens}}">Forum</a>
                </li>
                @if(auth()->user()->role=='executive')
                <li class="nav-item">
                    <a class="nav-link" href="/restricted/{{$tokens}}">Managements</a>
                </li>
                @endif
                @else
                <li class="nav-item">
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
                        aria-haspopup="true" aria-expanded="false" style="padding-top: 3px;">
                        <div class="nav-item-user">
                            <span><img src="@if(!auth()->user()->displaypic){!!asset('storage/img/default.png')!!}
                                @else{!!asset('file/profilepic/'.auth()->user()->displaypic)!!}@endif"
                                    class="img-profile-user" alt="User Image"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="dropdownId">
                        <a class="dropdown-item nav-user-name" href="#"><span
                                class="font-weight-bold ">{{auth()->user()->name}}</span></a>
                        <a class="dropdown-item" href="#">Profile Saya</a>
                        <a href="/logout/{{auth()->user()->id}}/{{$tokens}}" class="dropdown-item">Keluar</a>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div>
                <form action="/search?" method="GET">
                    @csrf
                    <h2 class="search-title text-gradient-blue-sarjana" style="line-height: 1.65;">Sarjanamalam.</h2>
                    <div class="main-search">
                        <span class="search-icon icon-left fas fa-search"></span>
                        <input type="search" name="get_value" class="form-control" autofocus>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
