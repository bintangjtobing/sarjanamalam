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
                <h4 class="about-title" style="color: #000; !important"><span class="ti-search"></span> Temukan
                    pekerjaanmu di <strong>sarjanamalam.</strong><br><a href="#">Apa yang ingin kamu kerjakan?</a></h4>
            </div>
        </div>
        <div class="row">
            @foreach ($karir as $karirlist)
            <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('file/img/karir/'.$karirlist->features_pic)!!}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title-strong">{{$karirlist->nama_team}}</h5>
                        <p class="card-text-black">{{$karirlist->description}}</p>
                        <a href="/pelajari-pekerjaan/{{$karirlist->career_id}}/{{$tokens}}"
                            class="card-link-karir mr-5">Pelajari</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center my-5">
                <h5 style="text-transform:uppercase;"><a href="/teams">Lihat semua bagian</a></h5>
            </div>
        </div>
</section>
@endsection
