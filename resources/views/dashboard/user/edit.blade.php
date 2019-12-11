@extends('dashboard.master')
@section('title','Settings User Account')
@section('desc_subpage','Halaman yang biasanya melakukan update data keanggotaan dalam sarjanamalam.')
@inject('userMod', 'App\UserMod')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg 6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Setting up user account</h5>
                <form class="">
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
                                <input name="displaypic" id="exampleFile" type="file" class="form-control-file"
                                    accept="image/*">
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
                                <input name="password" id="exampleEmail11" value="{{$user->verified_password}}"
                                    id="password" type="password" class="form-control" required></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="confirmation_password"
                                    class="">Verification Password</label><input id="confirmation_password"
                                    placeholder="" value="" type="password" class="form-control" required>
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
                                    <option value="@if($user->role=='user')User @endif">User</option>
                                    <option value="@if($user->role=='member')Member @endif">Member</option>
                                    <option value="@if($user->role=='executive')Executive @endif">Executive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class=" position-relative form-check"><input name="check" id="exampleCheck" type="checkbox"
                            class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me
                            out</label></div>
                    <button class="mt-2 btn btn-primary">Simpan perubahan</button>
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
            Confirm_pass.setCustomValidity("Password match!");
        }
    }
    Pass.onchange = validatePassword;
    Confirm_pass.onkeyup = validatePassword;

</script>
@endsection
