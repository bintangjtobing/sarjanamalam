@extends('dashboard.master')
@section('title','Dashboard Sarjanamalam - User Management')
@section('desc_subpage','Halaman yang biasanya mengatur ke-anggotaan dalam sarjanamalam.')
@section('faicon','fa-plus')
@section('modals','addmember')
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
<div class="row">
    <?php $i=1;?>
    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
    <div class="col-md-12 col-lg 6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">User Verified</h5>
                <table id="userverified" class="mb-0 table table-hover table-responsive">
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
                            <td scope="row">{{$i++}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->jabatan}}</td>
                            <td class="text-center">
                                @if($user->status=='active')
                                <span style="font-size: 18px; color: #3363AC;"><i
                                        class="fas fa-check-circle"></i></span>
                                @else
                                <span style="font-size: 18px; color: red;"><i class="fas fa-times-circle"></i></span>
                                @endif
                            </td>
                            <td>{{$user->role}}</td>
                            <td>
                                <a href="/edit/{{$user->id}}/{{$tokens}}">
                                    <span>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-warning">
                                            <i class="far fa-edit btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                                <a href="/delete/{{$user->id}}/{{$tokens}}">
                                    <span>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                            <i class="far fa-trash-alt btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                            </td>
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
        $('#userverified').DataTable({
            scrollY: 300,
        });
    });

</script>
<!-- Large modal -->
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="addmember" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
