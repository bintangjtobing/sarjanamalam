@extends('authen.index')
@section('title','Settings User Account')
@section('content')
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
<div class="card card-primary">
    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
    <div class="card-header">
        <h3 class="card-title">{{$user->name}}</h3>
    </div>
    <form action="/update/{{$user->id}}/{{$tokens}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="col-md-12 text-center">
                <h5>Gambar profil</h5>
                <div class="imageoverlay my-4">
                    <img src="{{$user->getAvatar()}}" class="img-edit"
                        onclick="document.getElementById('filepic').click();"><br>
                    <input type="file" name="displaypic" class="filepic" id="filepic" style="display:none;">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="{{$user->name}}"
                        value="{{$user->name}}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="{{$user->username}}"
                        value="{{$user->username}}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="{{$user->email}}"
                        value="{{$user->email}}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Ganti password?</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Kota tempat tinggal</label>
                    <input type="text" name="city" class="form-control" id="kota" placeholder="{{$user->kota}}"
                        value="{{$user->kota}}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Provinsi</label>
                    <select name="state" id="" class="custom-select" required>
                        @foreach ($userget as $userprovinsi)
                        @if($userprovinsi->provinsi!='{{$userprovinsi->province_id}}')
                        <option value="" selected>{{$userprovinsi->nama_provinsi}}</option>
                        @endif
                        @endforeach
                        @foreach ($province as $prov)
                        <option value="{{$prov->province_id}}">{{$prov->nama_provinsi}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" form-group col-md-2">
                    <label for="">Kode pos</label>
                    <input type="text" name="zip" class="form-control" id="kodepos" placeholder="{{$user->kodepos}}"
                        value="{{$user->kodepos}}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="">Tanggal</label>
                    <select name="tanggallahir" class="custom-select" id="tanggallahir" required>
                        <option value="{{$user->tanggallahir}}">{{$user->tanggallahir}}
                        </option>
                        <?php
                                        for ($i=1; $i<=31; $i++)
                                        {
                                            ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                                        }
                                    ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="">Bulan</label>
                    <select name="bulan" id="" class="custom-select" required>
                        <option value="Januari" @if($user->bulanlahir=='Januari')selected @endif>Januari</option>
                        <option value="Februari" @if($user->bulanlahir=='Februari')selected @endif>Februari</option>
                        <option value="Maret" @if($user->bulanlahir=='Maret')selected @endif>Maret</option>
                        <option value="April" @if($user->bulanlahir=='April')selected @endif>April</option>
                        <option value="Mei" @if($user->bulanlahir=='Mei')selected @endif>Mei</option>
                        <option value="Juni" @if($user->bulanlahir=='Juni')selected @endif>Juni</option>
                        <option value="Juli" @if($user->bulanlahir=='Juli')selected @endif>Juli</option>
                        <option value="Agustus" @if($user->bulanlahir=='Agustus')selected @endif>Agustus</option>
                        <option value="September" @if($user->bulanlahir=='September')selected @endif>September
                        </option>
                        <option value="Oktober" @if($user->bulanlahir=='Oktober')selected @endif>Oktober</option>
                        <option value="November" @if($user->bulanlahir=='November')selected @endif>November</option>
                        <option value="Desember" @if($user->bulanlahir=='Desember')selected @endif>Desember</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="">Tahun</label>
                    <select name="tahunlahir" id="" class="custom-select" required>
                        <option value="{{$user->tahunlahir}}">{{$user->tahunlahir}}
                        </option>
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
                <div class="form-group col-md-3">
                    <label for="">Role user</label>
                    <select name="role" id="" class="custom-select">
                        <option value="user" @if($user->role=='user') selected @endif>User</option>
                        <option value="member" @if($user->role=='member') selected @endif>Member</option>
                        <option value="executive" @if($user->role=='executive') selected @endif>Executive
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Posisi Jabatan</label>
                    <select name="jabatan" id="" class="custom-select">
                        <option value="Chief Executive Officer & Founder" @if($user->role=='Chief Executive Officer
                            &
                            Founder') selected @endif>Chief Executive Officer & Founder
                        </option>
                        <option value="Chief Design Officer" @if($user->role=='Chief Design Officer') selected
                            @endif>Chief Design Officer</option>
                        <option value="Chief Operational Officer" @if($user->role=='Chief Operational Officer')
                            selected
                            @endif>Chief Operational Officer
                        </option>
                        <option value="Chief Financial Officer" @if($user->role=='Chief Financial Officer') selected
                            @endif>Chief Financial Officer
                        </option>
                        <option value="Chief Marketing Officer" @if($user->role=='Chief Marketing Officer') selected
                            @endif>Chief Marketing Officer
                        </option>
                        <option value="Manager" @if($user->role=='Manager') selected
                            @endif>Manager
                        </option>
                        <option value="Supervisor" @if($user->role=='Supervisor') selected
                            @endif>Supervisor
                        </option>
                        <option value="Head" @if($user->role=='Head') selected
                            @endif>Head
                        </option>
                        <option value="Employee" @if($user->role=='Employee') selected
                            @endif>Employee
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
