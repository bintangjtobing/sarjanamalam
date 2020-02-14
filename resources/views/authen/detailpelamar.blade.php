@extends('authen.index')
@section('title','Pelamar management')
@section('aktifpelamar','active')
<?php $enc_id = Crypt::encrypt($pelamar->candidate_id); ?>
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Info lengkap {!!$pelamar->nama_lengkap!!} - Pelamar</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
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
                                    <span class="info-box-text text-center text-muted">Jenis Kelamin</span>
                                    <span class="info-box-number text-center text-muted mb-0">
                                        @if($pelamar->jenis_kelamin!='Wanita')
                                        <i class="fas fa-male"></i> Pria
                                        @else
                                        <i class="fas fa-female"></i> Wanita
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Tempat, Tanggal Lahir</span>
                                    <span
                                        class="info-box-number text-center text-muted mb-0">{{$pelamar->tempat_lahir}},
                                        {{$pelamar->tanggal_lahir}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Status Pernikahan</span>
                                    <span
                                        class="info-box-number text-center text-muted mb-0">{{$pelamar->status_perkawinan}}<span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>Details Candidate</h4>
                            <div class="post">
                                <div class="user-block">

                                </div>
                                <h5><b>{{$pelamar->nama_lengkap}}</b></h5>
                                <span class="description">Email : {{$pelamar->email}}<br>Nomor Telepon :
                                    {{$pelamar->nohp}}<br>Alamat domisili :
                                    {!!strip_tags($pelamar->alamat_domisili)!!}<br>Kota yang dipilih :
                                    {{$pelamar->kota}}<br>Pendidikan terakhir : {{$pelamar->pendidikan_akhir}}</span>
                                <hr>
                                <!-- /.user-block -->
                                <h5>Mengapa <b>sarjanamalam</b> harus menerima dia?</h5>
                                <p>
                                    {!!$pelamar->about!!}
                                </p>
                            </div>
                            <div class="post">
                                <h5><b>Hubungi untuk interview?</b></h5>
                                <a href="/trash-pelamar/{{$enc_id}}" class="btn btn-danger">Tolak</a>
                                <a href="/terima-pelamar/{{$enc_id}}" class="btn btn-primary">Terima</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection
