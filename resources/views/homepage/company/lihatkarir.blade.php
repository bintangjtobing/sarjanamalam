@extends('homepage.company.about')
@section('title',$karir->nama_team . ' - Karir di Sarjanamalam')
@section('metadesc','Halaman karir di sarjanamalam. adalah tempat kamu menemukan karir yang tepat untuk mengembangkan
apa yang kamu miliki. Temukan lingkungan dan orang orang yg tepat di tempat kerja kamu.')
@section('metakey','karir, karir sarjanamalam, jobs, pekerjaan di sarjamalam, lowongan kerja, lowongan di sarjanamalam,
sarjanamalam karir')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@section('content')
<section>
    <div class="container">
        <div class="row m-b-60">
            <div class="col-lg-6 text-left">
                <h2>{{$karir->nama_team}}</h2>
                {{-- <a href="#" class="btn btn-primary">Lihat semua karir dibidang ini</a> --}}
            </div>
            <div class="col-lg-4 text-left">
                <p>{{$karir->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Bagian bagian pekerjaan</h3>
            </div>
        </div>
        <div class="row m-t-30">
            @if(!$karirjoin->isEmpty())
            @foreach ($karirjoin as $part)
            <?php $enc_karirid = base64_encode($part->subcareer_id) ?>

            <div class="col-lg-4 text-left squarejob">
                <a href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}">
                    <h4 class="karirlink_part">{{$part->nama_subcareer}}</h4>
                </a>
                <p>{{$part->deskripsi}}</p>
                @if($part->status!='Recruitment telah dibuka!')
                <a href="#" disabled>Belum membuka lowongan.</a>
                @else
                <a href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}">Lihat detail deskripsi
                    pekerjaan</a>
                @endif
            </div>
            @endforeach
            @else
            <div class="col-lg-12 text-center">
                <p>Belum ada data data pekerjaan</p>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
