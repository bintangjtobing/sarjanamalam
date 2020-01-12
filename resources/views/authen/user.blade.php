@extends('authen.index')
@section('title','User Configuration')
@section('aktifuser','active')
@section('content')
<!-- Default box -->
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">User configuration</h3>

        <div class="card-tools">
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkategori">
                <i class=" fas fa-plus-circle"></i> Tambah data pengguna
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
        {{-- MODAL TAMBAH KATEGORI --}}
        <div class="modal fade" id="tambahkategori">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #000 !important;">Tambah data pengguna</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/tambah-data-user" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-6" style="color: #000 !important;">
                                    <label for="username">Nama pengguna</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Masukkan nama pengguna" autofocus required>
                                </div>
                                <div class="form-group col-md-6" style="color: #000 !important;">
                                    <label for="kategori">Username pengguna</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Masukkan username" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" style="color:#000 !important">
                                    <label for="email">Email pengguna</label>
                                    <input type="email" name="email" id="" class="form-control"
                                        placeholder="Masukkan email pengguna" required>
                                </div>
                                <div class="form-group col-md-6" style="color:#000 !important">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukkan password" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" style="color:#000 !important">
                                    <label for="role">Role pengguna</label>
                                    <select name="role" id="role" class="custom-select">
                                        <option value="" selected>Pilih role pengguna:</option>
                                        <option value="executive">Executive</option>
                                        <option value="user">user</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6" style="color:#000 !important">
                                    <label for="status">Status</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                            value="aktif">
                                        <label class="form-check-label" for="inlineRadio1">Aktif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                            value="inactive">
                                        <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- END MODAL TAMBAH KATEGORI --}}
</div>
<?php $i=1 ?>
<div class="card-body">
    <table id="tableJs" class="table table-bordered table-hover">
        {{-- ALERT  --}}
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="far fa-check-circle"></i> Berhasil!</strong> {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- END ALERT --}}
        <thead>
            <tr>
                <th width="10px">No.</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($usermg->count()>0)
            @foreach ($usermg as $user)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$user->name}}
                </td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><a href="/delete/{{$user->id}}/{{$tokens}}" class="btn btn-danger btn-sm"><i
                            class="fas fa-trash"></i></a>
                    <a href="/edit/{{$user->id}}/{{$tokens}}" class="btn btn-warning btn-sm"><i
                            class="far fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">No data founded!</td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

<!-- /.card-footer-->
</div>
@endsection
