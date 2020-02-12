@extends('homepage.company.about')
@section('title',$karir->nama_subcareer . ' - Detail Karir di Sarjanamalam')
@section('metadesc','Halaman karir di sarjanamalam. adalah tempat kamu menemukan karir yang tepat untuk mengembangkan
apa yang kamu miliki. Temukan lingkungan dan orang orang yg tepat di tempat kerja kamu.')
@section('metakey','karir, karir sarjanamalam, jobs, pekerjaan di sarjamalam, lowongan kerja, lowongan di sarjanamalam,
sarjanamalam karir')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@section('content')
<section style="background-image:url('{!!asset('storage/img/background-4.png')!!}'); background-position:71% 22%;">
    <div class="container">
        <div class="row m-b-30">
            <div class="col-lg-12">
                <h2><strong>{{$karir->nama_subcareer}} di <span
                            class="text-gradient-blue-sarjana">sarjanamalam.</span></strong></h2>
                <p>Posisi pekerjaan: <b>{!!$karir->nama_subcareer!!}</b><br>
                    Lokasi pekerjaan: <b>{!!$karir->lokasi!!}</b><br>
                    Tanggal buka: <b>{!!date('d - M - Y',strtotime($karir->updated_at))!!}</b></p>
                {{-- <a href="#" class="btn btn-primary">Lihat semua karir dibidang ini</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <p><b>Gambaran pekerjaan
                        {!!$karir->nama_subcareer!!}</b><br>
                    {!!$karir->deskripsi!!}</p>
                <p><b>Kualifikasi minimal :</b><br>{!!$karir->minimal_kualifikasi!!}</p>
                <p><b>Kualifikasi yang direkomendasikan :</b><br>{!!$karir->kualifikasi_rekomendasi!!}</p>
                <p><b>Tanggung jawab pekerjaan :</b><br>{!!$karir->tanggung_jawab!!}</p>
                {{-- <a href="#" class="btn btn-primary">Lihat semua karir dibidang ini</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php $enc_karirid = base64_encode($karir->subcareer_id) ?>
                <a href="/form-pendaftaran-umum/{{$enc_karirid}}/{{$tokens}}"
                    class="btn btn-gradient-blue-sarjana">Daftar di posisi ini</a>
            </div>
        </div>
    </div>
</section>
@endsection
