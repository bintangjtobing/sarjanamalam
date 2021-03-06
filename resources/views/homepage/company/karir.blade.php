@extends('homepage.company.about')
@section('title','Karir di sarjanamalam.')
@section('metadesc','Halaman karir di sarjanamalam. adalah tempat kamu menemukan karir yang tepat untuk mengembangkan
apa yang kamu miliki. Temukan lingkungan dan orang orang yg tepat di tempat kerja kamu.')
@section('metakey','karir, karir sarjanamalam, jobs, pekerjaan di sarjamalam, lowongan kerja, lowongan di sarjanamalam,
sarjanamalam karir')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 m-b-60 text-center">
                <h1 class="about-title" style="color: #000; !important"><span class="ti-search"></span> Temukan
                    pekerjaanmu di <strong>sarjanamalam.</strong><br><a href="#">Apa yang ingin kamu kerjakan?</a></h1>
            </div>
        </div>
        <div class="row">
            @foreach ($karir as $karirlist)
            <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64));
            $enc_id = Crypt::encrypt($karirlist->career_id); ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"
                        src="{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$karirlist->features_pic)!!}"
                        alt="Karir {{$karirlist->nama_team}} di Sarjanamalam">
                    <div class="card-body">
                        <h5 class="card-title-strong">{{$karirlist->nama_team}}</h5>
                        <p class="card-text-black">{!!Str::limit($karirlist->description,100)!!}</p>
                        <a href="/pelajari-pekerjaan/{{$enc_id}}/{{$tokens}}" class="card-link-karir mr-5">Pelajari</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection
