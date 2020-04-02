@extends('forum.fill.settings')
@section('content')
<?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@if(session('sukses'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('sukses')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="post-item">
    <div class="card" id="umum">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Pengaturan umum</h3>
                    </div>
                </div>
            </div>
            <div class="card-title" style="border-bottom:0px;">
                <div class="accordion accordion-flat">
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3">
                                        <img src="@if(!auth()->user()->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                            @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                                            alt="Profile picture"
                                            class="img-roundedforum"></a>@if(auth()->user()->verified==1)
                                        <span title="Verified" style="
    position: relative;
    margin-left: -15px;
    margin-top: 25px; border-radius: 50%; top: 15px;
    right: 3px;"><img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1585802082/based/eight-check-verified_ge92d7.png"
                                                alt="Verified" style="width:15px !important; height:15px !important;
                                            margin-left:2px;position:relative;"></span>
                                        @else
                                        @endif<b> Ubah Foto
                                            profil</b></p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_pic/{{$tokens}}" method="post"
                                enctype="multipart/form-data">
                                @if(count($errors)>0)
                                @foreach ($errors->all() as $error)
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" id="alert-success"
                                            role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><b>Choose your picture</b></label>
                                            <input type="file" name="Display_Picture" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <p>Gunakan foto berformat <b>.gif</b>, <b>.jpg</b>,
                                            <b>.png</b>,<b> .jpeg</b>,<b> .svg</b>.<br>File
                                            maksimum
                                            berjumlah 2MB.</p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b>Nama profil</b><br>{{auth()->user()->name}}</p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_name/{{$tokens}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><b>Nama lengkap</b></label>
                                            <input type="text" name="nama_lengkap" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <p>Harap dicatat: Jika Anda mengubah nama Anda di Facebook, Anda tidak dapat
                                            mengubahnya lagi selama 60 hari. Jangan menambahkan huruf besar, tanda baca,
                                            karakter, atau kata acak yang tidak biasa.</p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b>Username</b><br>{{auth()->user()->username}}</p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_username/{{$tokens}}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <p>Username anda sama dengan alamat publik
                                        anda:<br><a
                                            href="https://sarjanamalam.com/{{auth()->user()->username}}">sarjanamalam.com/<span
                                                class="text-gradient-blue-sarjana">{{auth()->user()->username}}</span></a>
                                    </p>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><b>Username</b></label>
                                            <input type="text" name="username" class="form-control"
                                                value="{{auth()->user()->username}}" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b>Ponsel</b><br>{{auth()->user()->ponsel}}</p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_ponsel/{{$tokens}}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><b>Ponsel</b></label>
                                            <input type="text" name="ponsel" pattern="[0-9]{4} [0-9]{4} [0-9]{4}"
                                                maxlength="14" class="form-control" value="{{auth()->user()->ponsel}}"
                                                id="">
                                            <p class="muted-text">Isi dengan format: 0888 8888 8888</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b>Email</b><br>Primary:
                                        <strong>{{auth()->user()->email}}</strong></p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_email/{{$tokens}}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><b>Email</b></label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{auth()->user()->email}}" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card" id="kontak">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Informasi situs sosial</h3>
                    </div>

                </div>
            </div>
            <div class="card-title" style="border-bottom:0px;">
                <div class="accordion accordion-flat">
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b><span><i class="fas fa-globe"></i> </span>
                                            Website</b><br><a
                                            href="http://{{auth()->user()->website}}">{{auth()->user()->website}}</a>
                                    </p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_website/{{$tokens}}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="websites" class="form-control mb-3"
                                                placeholder="www.yourwebsites.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b><span><i class="fas fa-share-alt-square"></i> </span>
                                            Social Links</b></p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_social/{{$tokens}}"
                                method="post">
                                {{ csrf_field() }}
                                @if(Auth()->user()->facebook != '' || Auth()->user()->instagram != '' ||
                                Auth()->user()->twitter != '')
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <p><span><i class="fab fa-facebook-square"></i></span>&nbsp;
                                            <a href="https://facebook.com/{{auth()->user()->facebook}}" style="color:
                                                grey !important; font-weight:600;">{{auth()->user()->facebook}}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <p><span><i class="fab fa-instagram-square"></i></span>&nbsp;
                                            <a href="https://instagram.com/{{auth()->user()->instagram}}" style="color:
                                                grey !important; font-weight:600;">{{auth()->user()->instagram}}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <p><span><i class="fab fa-twitter-square"></i></span>&nbsp;
                                            <a href="https://twitter.com/{{auth()->user()->twitter}}" style="color:
                                                grey !important; font-weight:600;">{{auth()->user()->twitter}}</a>
                                        </p>
                                    </div>
                                </div>
                                @elseif(Auth()->user()->facebook == '' || Auth()->user()->instagram == '' ||
                                Auth()->user()->twitter == '')
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><span
                                                            style="color: grey;"><i class="fab fa-facebook-square"></i>
                                                        </span>
                                                        &nbsp; facebook.com/</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="username"
                                                    aria-describedby="basic-addon3" name="facebook">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><span
                                                            style="color: grey;"><i class="fab fa-instagram-square"></i>
                                                        </span>
                                                        &nbsp; instagram.com/</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="username"
                                                    aria-describedby="basic-addon3" name="instagram">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><span
                                                            style="color: grey;"><i class="fab fa-twitter-square"></i>
                                                        </span>
                                                        &nbsp; twitter.com/</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="username"
                                                    aria-describedby="basic-addon3" name="twitter" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @endif
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card" id="security">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Keamanan dan login</h3>
                    </div>

                </div>
            </div>
            <div class="card-title" style="border-bottom:0px;">
                <div class="accordion accordion-flat">
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b><span><i class="fas fa-key"></i> </span>
                                            Ubah kata sandi</b><br>Sebaiknya gunakan kata sandi yang
                                        kuat yang tidak anda gunakan di tempat lain.</p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="/{{auth()->user()->username}}/settings/update_password/{{$tokens}}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><b>Kata sandi baru</b></label>
                                            <input type="password" name="new_password" class="form-control mb-3"
                                                id="newpass">
                                            <label for=""><b>Verifikasi kata sandi baru</b></label>
                                            <input type="password" name="verified_password" class="form-control"
                                                id="verifiedpass">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">
                            <div class="row settingtab">
                                <div class="col-lg-10">
                                    <p class="mt-3"><b><span><i class="fas fa-shield-alt"></i>
                                            </span>
                                            Gunakan autentifikasi dua faktor</b><br>Kami akan
                                        meminta kode jika kami melihat upaya masuk dari
                                        perangkat atau browser yang tidak dikenal.</p>
                                </div>
                                <div class="col-lg-2 text-right" style="margin-top:1.25rem;">
                                    <span style="font-size: 2rem; color: #777"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </h5>
                        <div class="ac-content">
                            <form action="" method="post">
                                <div class="form-row">
                                    <p>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    var Pass = document.getElementById('newpass');
    var Confirm_pass = document.getElementById('verifiedpass')

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
