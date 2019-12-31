@extends('dashboard.master')
@section('title','Dashboard Sarjanamalam - Event Management')
@section('desc_subpage','Halaman tempat untuk mengatur event event.')
@section('faicon','fa-plus')
@section('modals','addevent')
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
                <h5 class="card-title">Event Request List</h5>
                <table id="userverified" class="mb-0 table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama event</th>
                            <th>Tanggal acara</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventList as $event)
                        <tr>
                            <td scope="row">{{$i++}}</td>
                            <td>{{$event->nama_event}}</td>
                            <td>{{$event->tglevent}}</td>
                            <td>{{$event->deskripsi_event}}</td>
                            <td>{{$event->kategori_event}}</td>
                            <td>
                                <a href="/edit/{{$event->event_id}}/{{$tokens}}">
                                    <span>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-success">
                                            <i class="fas fa-eye btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                                <a href="/delete/{{$event->event_id}}/{{$tokens}}">
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
<div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="addevent" aria-hidden="true">
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
