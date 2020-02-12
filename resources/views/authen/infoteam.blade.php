@extends('authen.index')
@section('title','Detail team '. $subfo->nama_subcareer)
@section('content')
@if(session('sukses'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success fade show alert-dismissable">
            <strong>Berhasil!</strong> {!!session('sukses')!!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail kualifikasi pekerjaan</h3>

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
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                <div class="row">
                    <div class="col-12">
                        <h1><b>{{$subfo->nama_subcareer}}</b></h1>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>@if($subfo->status!='Recruitment telah dibuka!')
                                    <span style="color:red;"><i class="fas fa-circle"></i>
                                    </span>{!!$subfo->status!!}
                                    @else
                                    <span style="color:green;"><i class="fas fa-circle"></i></span>
                                    {!!$subfo->status!!}@endif
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p>Lokasi pekerjaan: {!!$subfo->lokasi!!}</p>
                            </div>
                            <div class="col-sm-4">
                                @foreach ($subinfo as $sub)
                                <p>Bagian tim: <b>@if($sub->career_id){!!$sub->nama_team!!}@endif</b></p>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="post">
                            <h5><b>Deskripsi pekerjaan</b></h5>
                            <p>
                                {!!$subfo->deskripsi!!}
                            </p>
                        </div>
                        <div class="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>Minimal kualifikasi</b></h5>
                                    <p>
                                        {!!$subfo->minimal_kualifikasi!!}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5><b>Rekomendasi Kualifikasi</b></h5>
                                    <p>
                                        {!!$subfo->kualifikasi_rekomendasi!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post">
                            <h5><b>Tanggung jawab pekerjaan</b></h5>
                            <p>{!!$subfo->tanggung_jawab!!}</p>
                        </div>
                        <div class="post">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="/trash-career/{{$subfo->subcareer_id}}" class="btn btn-danger"><i
                                            class="fas fa-trash-alt"></i></a>
                                    @if($subfo->status!='Recruitment telah dibuka!')
                                    <a href="/open-career/{{$subfo->subcareer_id}}" class="btn btn-success"><i
                                            class="fas fa-check"></i>&nbsp; Open
                                        Recruitment</a>
                                    @else
                                    <a href="/close-career/{{$subfo->subcareer_id}}" class="btn btn-secondary"><i
                                            class="fas fa-times"></i>&nbsp; Close
                                        Recruitment</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                {{-- <p class="text-muted">{!!!!}</p>
                <br> --}}
                {{-- <div class="text-muted">
                    <p class="text-sm">Client Company
                        <b class="d-block">Deveint Inc</b>
                    </p>
                    <p class="text-sm">Project Leader
                        <b class="d-block">Tony Chicken</b>
                    </p>
                </div>

                <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Functional-requirements.docx</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                            Email-from-flatbal.mln</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Contract-10_12_2014.docx</a>
                    </li>
                </ul>
                <div class="text-center mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
