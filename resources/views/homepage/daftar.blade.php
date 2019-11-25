@extends('homepage.welcome')
@section('title','- Buat akun!')
@section('content')
<div class="cover-container-fluid d-flex w-100 h-100 p-4 flex-column">
    <div class="daftar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3><strong>Buat akun!</strong></h3>
                    <p>Bergabung bersama teman-teman <strong>sarjanamalam</strong>.<br>Dan berbagilah.</p>
                </div>
            </div>
            <hr>
            <br>
            @if(session('sukses'))
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Congratulations!</h4>
                        <p>Yeay! Kamu berhasil mendaftar keanggotaan di <strong>Sarjanamalam</strong>!</p>
                        <p class="mb-0">Tinggal selangkah lagi, kamu hanya upload 1 berita pertama kamu. Jika menarik,
                            berita kamu bisa langsung diangkat di Instagram milik <strong><a
                                    href="https://instagram.com/sarjanamalamdotcom" target="_blank"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="Follow us on Instagram!">sarjanamalam</a></strong> loh.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif
            <?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>
            <form action="/create-account/{{$tokens}}" method="post">
                {{ csrf_field() }}
                <div class="register row">
                    <div class="col-md-6">
                        <div class="form-row">
                            <div class="form-group">
                                <small class="form-text">Nama lengkap</small>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                    placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <small class="form-text">Username</small>
                                <input type="text" name="username" placeholder="Username" id="username"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <small class="form-text">Email</small>
                            <input type="email" name="email" placeholder="Email" id="email" class="form-control emailcl"
                                required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <small class="form-text">Password</small>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" required pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <small class="form-text">Ulangi password</small>
                                <input type="password" name="confirmation_password" placeholder="Ulangi password"
                                    id="confirmation_password" class="form-control" required pattern=".{6,}">
                            </div>
                            <small class="smallwarn">
                                Gunakan minimal 8 password dengan campuran huruf, angka dan simbol.
                            </small>
                        </div>
                        <button type="submit" class="btn btn-sarjana">Create an account!</button><br>
                        <small>Sudah punya akun? <a href="/signin/{{$tokens}}">Login sekarang</a></small>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection
