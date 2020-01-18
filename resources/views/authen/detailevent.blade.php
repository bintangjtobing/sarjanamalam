@extends('authen.index')
@section('title','Detail event '.$eventget->nama_event)
@section('content')
<!-- Default box -->
@if(session('sukses'))
<div class="row">
    <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Status berhasil diupdate!</strong> {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Event Detail</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Event Berbiaya?</span>
                                <span
                                    class="info-box-number text-center text-muted mb-0">{{$eventget->harga_event}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Kategori event</span>
                                <span
                                    class="info-box-number text-center text-muted mb-0">{{$eventget->kategori_event}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Daerah event</span>
                                <span class="info-box-number text-center text-muted mb-0">{{$eventget->provinsi}}<span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <p class="text-sm">Status event
                            <b class="d-block">@if($eventget->status=='unapproved')<span style="color:#ffc107"><i
                                        class="fas fa-circle"></i></span> {{$eventget->status}}
                                @elseif($eventget->status=='running')<span style="color:#007bff"><i
                                        class="fas fa-circle"></i></span> {{$eventget->status}}
                                @elseif($eventget->status=='declined')<span style="color:#dc3545"><i
                                        class="fas fa-circle"></i></span> {{$eventget->status}}
                                @else
                                <span style="color:#28a745"><i class="fas fa-circle"></i></span> {{$eventget->status}}
                                @endif</b>
                        </p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="text-sm">Tempat event
                            <b class="d-block">{{$eventget->tempat_event}}, {{$eventget->kota}}</b>
                        </p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="text-sm">Tanggal & waktu event
                            <b class="d-block">{{$eventget->tglevent}} | {{$eventget->waktu_event}}</b>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="post">
                            <h5>Deskripsi event</h5>
                            <hr>
                            <p>
                                {{$eventget->deskripsi_event}}
                            </p>
                            <h5>Data penanggung jawab</h5>
                            <hr>
                            <p>
                                Nama penanggung jawab:<br><b>{{$eventget->nama_pic}}</b><br><br>
                                Email penanggung jawab:<br><b>{{$eventget->email_pic}}</b><br><br>
                                Nomor telepon penanggung jawab:<br><b>{{$eventget->nohp_pic}}</b><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <img class="imgevent-det" src="@if(!$eventget->picevent){!!asset('storage/img/noimg-event.jpg')!!}
                                @else{!!asset('eventstorage/img/'.$eventget->picevent)!!}@endif">
                <br>
                <div class="text-muted">
                    <p class="text-sm">Diselenggarakan oleh:
                        <b class="d-block">{{$eventget->speaker}}</b>
                    </p>
                    <p class="text-sm">Nama penanggung jawab:
                        <b class="d-block">{{$eventget->nama_pic}}</b>
                    </p>
                </div>
                <div class="text-center mt-5 mb-3">
                    <a href="/update/status-event/@if($eventget->status=='unapproved')approved/{{$eventget->event_id}}
                        @elseif($eventget->status=='approved')running/{{$eventget->event_id}}
                        @else unapproved/{{$eventget->event_id}}
                        @endif" class="btn btn-sm @if($eventget->status=='unapproved')btn-success
                        @elseif($eventget->status=='approved')btn-primary
                        @else btn-warning
                        @endif">
                        @if($eventget->status=='unapproved') Approve this event
                        @elseif($eventget->status=='approved') Run this event
                        @else Pause this event
                        @endif
                    </a>
                    <a href="/update/status-event/declined/{{$eventget->event_id}}"
                        class="btn btn-sm btn-danger">Declined</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection
