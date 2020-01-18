@extends('authen.index')
@section('title','Event Event')
@section('aktifevent','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-12">
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
        </div>
        <div class="row">
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
        </div>
    </div>
</div>
@endsection
