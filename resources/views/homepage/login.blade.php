@extends('homepage.signin')
@section('activelog','active')
@section('titleweb',"Focus on what you're talking about | Sarjanamalam.")
@section('desctitle','Masuk ke akun sarjanamalam kamu. Gabung bersama forum dan bahas tentang apa yang kamu alami dan
kamu ingin cari tau.')
@section('contentauth')
<?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
@if(session('gagal'))
<div class="form-row">
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong><br>{{session('gagal')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<form action="/get-verification/{{$tokens}}" method="post">
    @csrf
    <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
    <input class="form-control" type="password" name="password" placeholder="Password" required>
    {{-- <input type="checkbox" id="chk1"><label for="chk1">Remeber me</label> --}}
    <div class="form-button">
        <button id="submit" type="submit" class="ibtn">Login</button> <a href="#">Forget password?</a>
    </div>
</form>
@endsection
