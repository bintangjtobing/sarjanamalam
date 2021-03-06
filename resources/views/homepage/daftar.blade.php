@extends('homepage.signin')
@section('activereg','active')
@section('titleweb',"Focus on what you're talking about | Sarjanamalam.")
@section('desctitle','Buat akun baru sarjanamalam kamu. Gabung bersama forum dan bahas tentang apa yang kamu alami dan
kamu ingin cari tau.')
@section('contentauth')
<?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
@if(session('sukses'))
<div class="form-row">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
@if(count($errors)>0)
@foreach ($errors->all() as $error)
<div class="form-row">
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade show" id="alert-success" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endforeach
@endif
<form action="/create-account/{{$tokens}}" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-6">
            <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama lengkap" required autofocus>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8">
            <input type="text" name="datebirthday" placeholder="Tanggal lahir" class="form-control" required>
        </div>
        <div class="col-md-4">
            <select name="gender" class="custom-select" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required
                pattern=".{8,}" oninvalid="setCustomValidity('Minimal character password adalah 8 abjad/angka. ')"
                onchange="try{setCustomValidity('')}catch(e){}">
        </div>
        <div class="col-md-6">
            <input class="form-control" type="password" name="ver_password" id="ver_password"
                placeholder="Ulangi password" required pattern=".{8,}"
                oninvalid="setCustomValidity('Minimal character password adalah 8 abjad/angka. ')"
                onchange="try{setCustomValidity('')}catch(e){}">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12">
            <div class="form-button">
                <button id="submit" type="submit" class="ibtn">Register</button>
            </div>
        </div>
    </div>
</form>
<script>
    function showPass() {
        var Pass = document.getElementById('password');
        if (Pass.type === "password") {
            Pass.type = "text";
        } else {
            Pass.type = "password";
        }
    }

</script>
<script>
    var Pass = document.getElementById('password');
    var Confirm_pass = document.getElementById('ver_password')

    function validatePassword() {
        if (Pass.value != Confirm_pass.value) {
            Confirm_pass.setCustomValidity("Password tidak sama. Ulangi kembali password kamu.");
        } else {
            Confirm_pass.setCustomValidity("");
        }
    }
    Pass.onchange = validatePassword;
    Confirm_pass.onkeyup = validatePassword;

</script>
@endsection
