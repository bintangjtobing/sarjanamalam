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
        <button id="submit" type="submit" class="ibtn">Login</button></form> <a href="" data-toggle="modal"
    data-target="#forgetPassword">Forget password?</a>

<!-- Modal password -->
<div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog" aria-labelledby="forgetPassword"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forgetPassword"><b>Kembalikan akun anda.</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/reset-account" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <p style="color:#121212; font-weight:300;">Ketik username yang anda daftarkan pertama kali,
                        dan
                        kami akan
                        mengirimkan instruksi reset
                        akun ke email yang berhubungan dengan username anda.</p>
                    <input type="text" name="username" class="form-control form-reset"
                        placeholder="Masukkan username anda" autofocus required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Reset akun</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
