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
            <div class="col-lg-6 text-left">
                {!!$karir->description!!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 text-left">
                <img class="card-img-top-karir img-fluid" src="{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$karir->features_pic)!!}"
                    alt="Karir {{$karir->nama_team}} di Sarjanamalam">
            </div>
            <div class="col-lg-7 text-left">
                <h3>Peran dalam pekerjaan</h3>
                @if(!$karirjoin->isEmpty())
                @foreach ($karirjoin as $part)
                <?php $enc_karirid = base64_encode($part->subcareer_id) ?>
                <div class="row">
                    <div class="col-lg-6 text-left squarejob">
                        <a href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}">
                            <h4 class="karirlink_part">{{$part->nama_subcareer}}</h4>
                        </a>
                        <p>{!!$part->deskripsi!!}</p>
                        @if($part->status!='Recruitment telah dibuka!')
                        <a href="#" disabled>Belum membuka lowongan.</a>
                        @else
                        <a href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}">Lihat detail deskripsi
                            pekerjaan</a>
                        @endif
                    </div>
                </div>
                @endforeach
                @else
                <p>Belum ada data data pekerjaan</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
