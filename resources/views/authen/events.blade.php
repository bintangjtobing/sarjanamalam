@extends('authen.index')
@section('title','Event Event')
@section('aktifevent','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-9 text-left">
                <div class="btn-group">
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #007bff"><i class="fas fa-circle"></i></span> Event sedang berjalan
                    </a>
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #28a745"><i class="fas fa-circle"></i></span> Event telah disetujui untuk
                        diterbitkan
                    </a>
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #dc3545"><i class="fas fa-circle"></i></span> Event ditolak
                    </a>
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #ffc107"><i class="fas fa-circle"></i></span> Event minta persetujuan
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-default btn-sm" href="" data-toggle="modal" data-target="#addnewteam">
                        <span><i class="fas fa-plus"></i></span> Tambah event
                    </a>
                </div>
            </div>
        </div>
        @if(session('suksesevent'))
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{session('suksesevent')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            @if(!$event->isEmpty())
            @foreach ($event as $evnt)
            <div class="col-lg-3 col-6">
                <div class="small-box
                @if($evnt->status=='unapproved')bg-warning
                @elseif($evnt->status=='running')bg-info
                @elseif($evnt->status=='declined')bg-danger
                @else
                bg-success
                @endif">
                    <div class="inner">
                        <h4>{{$evnt->nama_event}}</h4>
                        <p>{{$evnt->kategori_event}}</p>
                    </div>
                    <a href="/detail-event/{{$evnt->event_id}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-lg-12 text-center my-3">
                <h3>No data loaded.</h3>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="addnewteam" tabindex="-1" role="dialog" aria-labelledby="addnewteam" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewteam" style="color:#000;">Tambah event secara manual.
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/tambah-karir-team" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Dibuat oleh</label>
                            <input type="text" name="nama_pic" class="form-control" id=""
                                placeholder="Masukkan nama team">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Penjelasan singkat:</label>
                            <textarea name="description" placeholder="Deskripsi team" class="form-control" id=""
                                cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Masukkan gambar tema tim</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="features_pic" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
