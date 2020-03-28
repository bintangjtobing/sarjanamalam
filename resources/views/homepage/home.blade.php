@extends('homepage.welcomenew')
@inject('userMod', 'App\UserMod')
@section('title','Sarjanamalam. | Hi there!')
@section('metadesc','Layanan berbasis situs web aplikasi, yang berguna untuk memudahkan pengguna dalam mencari tempat
untuk saling berbagi ide dan saling berinteraksi untuk merealisasikan ide tersebut.')
@section('content')
<nav class="navbar navbar-expand-sm navbar-light py-2"
    style="background-color:#fff; box-shadow: 0 0 10px 0 rgba(154, 161, 171, .35);">
    <div class="container">
        <div class="d-flex justify-content-end w-100" id="collapsibleNavId">
            <ul class="navbar-nav navbar-mobile ml-auto mt-2 mt-lg-0">
                <?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/forum/{{$tokens}}">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/messages/{{$tokens}}">
                        Messages</a>
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
                            <span><img
                                    src="@if(!auth()->user()->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                                    class="img-profile-user" alt="User Image"></span>@if(auth()->user()->verified==1)
                            <span title="Verified" style="
    position: relative;
    margin-left: -15px;
    margin-top: 25px; background-color: #fff; border-radius: 50%;"><img
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1584348883/based/checkmark_ty9wnj.svg"
                                    alt="Verified"
                                    style="width:15px !important; height:15px !important; margin-left:2px;"></span>
                            @else
                            @endif
                        </div>
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="dropdownId" style="margin-top:.5rem;">
                        <a class="dropdown-item nav-user-name" href="#"><span
                                class="font-weight-bold">{{auth()->user()->name}}</span></a>
                        <?php
                        $getId = auth()->user()->id;
                        $enc_id = base64_encode($getId); ?>
                        <a class="dropdown-item" href="/{{auth()->user()->username}}">Profile Saya</a>
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
                {{-- <form action="/search?" method="GET"> --}}
                @csrf
                {{-- <h2 class="search-title text-gradient-blue-sarjana" style="line-height: 1.65;">Sarjanamalam.</h2> --}}
                {{-- Get a real time --}}
                <?php
                    date_default_timezone_set("Asia/Jakarta");
                    $timeNow = date('H:i');
                    $Hour = date('H');

                    ?>
                <span class="text-gradient-white-sarjana"
                    style="font-size: 6rem; line-height:0.3em;">{{$timeNow}}</span>
                <h2 class="search-title text-gradient-white-sarjana" id="titlecallback" style="line-height: 1.65;">
                    @if(($Hour >= 01) && ($Hour<=11)) {{'Selamat pagi,'}} @elseif(($Hour>=11) && ($Hour<=15))
                            {{'Selamat siang,'}} @elseif(($Hour>=15)&& ($Hour<=18)) {{'Selamat sore,'}}
                                @else{{'Selamat malam,'}} @endif @if(Auth::check()){{auth()->user()->name}} @else gengs!
                                @endif</h2> <div class="main-search">
                                <div class="search-group">
                                    <span class="search-icon icon-left fas fa-search"></span>
                                    <input type="text" id="search" name="get_value" class="form-control"
                                        placeholder="Temukan pembahasan disini..." autofocus>
                                </div>
                                {{-- <table class="table table-bordered table-hover text-left">
                                    <tbody>
                                    </tbody>
                                </table> --}}
                                <div id="result"></div>
            </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
</div>

@endsection
