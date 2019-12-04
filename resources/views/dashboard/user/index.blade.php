@extends('dashboard.master')
@section('title','Dashboard Sarjanamalam - User Management')
@section('desc_subpage','Halaman yang biasanya mengatur ke-anggotaan dalam sarjanamalam.')
@section('faicon','fa-plus')
@section('faicon-desc','Tambah data')
@section('modaldata','/tambahdatauser')
@section('content')
<div class="row">
    <?php $i=1;?>
    <div class="col-md-12 col-lg 6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">User Verified</h5>
                <table id="userverified" class="mb-0 table table-hover display">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usermg as $user)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <th>{{$user->username}}</th>
                            <th>{{$user->email}}</th>
                            <th>{{$user->name}}</th>
                            <th>{{$user->jabatan}}</th>
                            <th class="text-center">
                                @if($user->status=='active')
                                <span style="font-size: 18px; color: #3363AC;"><i
                                        class="fas fa-check-circle"></i></span>
                                @else
                                <span style="font-size: 18px; color: red;"><i class="fas fa-times-circle"></i></span>
                                @endif
                            </th>
                            <th>{{$user->role}}</th>
                            <th>
                                <a href="#">
                                    <span>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-warning">
                                            <i class="far fa-edit btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                                <a href="#">
                                    <span>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                            <i class="far fa-trash-alt btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                            </th>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#userverified').DataTable();
    });

</script>
@endsection
