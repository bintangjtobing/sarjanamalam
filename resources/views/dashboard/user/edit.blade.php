@extends('dashboard.master')
@section('title','Settings User Account')
@section('desc_subpage','Halaman yang biasanya melakukan update data keanggotaan dalam sarjanamalam.')
@inject('userMod', 'App\UserMod')
@section('content')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@if(session('sukses'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>{{session('sukses')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12 col-lg 6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Setting up user account</h5>
                <form action="/update/{{$user->id}}/{{$tokens}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <img src="{{$userMod->getAvatar()}}" class="img-edit">
                            <h5 class="card-title">{{$user->name}}</h5>
                            <div class="page-title-subheading"><strong>{{$user->jabatan}}</strong></div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="card-title-h3">
                        Personal biodata settings
                    </h3>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group"><label for="exampleFile" class="">Your Display
                                    Picture</label><br>
                                <input name="displaypicture" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">Update gambar profil kamu disini.</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="exampleEmail11" class="">Email</label>
                                <input name="email" id="exampleEmail11" value="{{$user->email}}" type="email"
                                    class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" value="{{$user->username}}" id=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="exampleEmail11" class="">Password</label>
                                <input name="password" id="password" value="{{$user->verified_password}}"
                                    type="password" class="form-control" required></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="confirmation_password"
                                    class="">Verification Password</label><input id="confirmation_password"
                                    placeholder="" value="" type="password" class="form-control"
                                    name="confirmation_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input
                            name="address" id="exampleAddress" placeholder="1234 Main St" value="{{$user->alamat}}"
                            type="text" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleCity"
                                    class="">City</label><input name="city" value="{{$user->kota}}" type="text"
                                    class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleState"
                                    class="">State</label><input name="state" value="{{$user->provinsi}}" type="text"
                                    class="form-control"></div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input
                                    name="zip" id="exampleZip" type="text" class="form-control"
                                    value="{{$user->kodepos}}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <div class="positive-relative form-group">
                                <label for="">Tanggal Lahir</label>
                                <select name="tanggallahir" id="" class="custom-select">
                                    <option value="">Tanggal</option>
                                    <?php
                                        for ($i=1; $i<=31; $i++)
                                        {
                                            ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="positive-relative form-group">
                                <label for="">Bulan Lahir</label>
                                <select name="bulanlahir" id="" class="custom-select">
                                    <option value="">Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="positive-relative form-group">
                                <label for="">Tahun Lahir</label>
                                <select name="tahunlahir" id="" class="custom-select">
                                    <option value="">Tahun</option>
                                    <?php
                                    $currentlyear = date('Y');
                                    $earliest=1950;
                                    $latestY=date('Y');
                                    foreach (range($latestY,$earliest)as $i){
                                        ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="card-title-h3">
                        Security & Permissions Settings
                    </h3>
                    <div class="form-row">
                        <div class="col-md-2">
                            <div class="positive-relative form-group">
                                <label for="">Role permissions</label>
                                <select name="role" id="" class="custom-select">
                                    <option value="user" @if($user->role=='user') selected @endif>User</option>
                                    <option value="member" @if($user->role=='member') selected @endif>Member</option>
                                    <option value="executive" @if($user->role=='executive') selected @endif>Executive
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="positive-relative form-group">
                                <label for="">Posisi Jabatan</label>
                                <select name="jabatan" id="" class="custom-select">
                                    <option value="Chief Executive Officer & Founder">CEO & Founder</option>
                                    <option value="Chief Design Officer">CDO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" position-relative form-check"><input name="check" id="exampleCheck" type="checkbox"
                            class="form-check-input" required><label for="exampleCheck" class="form-check-label">Tell me
                            if something weird happens</label></div>
                    <button class="mt-2 btn btn-primary" type="submit">Simpan perubahan</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    var Pass = document.getElementById('password');
    var Confirm_pass = document.getElementById('confirmation_password')

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
