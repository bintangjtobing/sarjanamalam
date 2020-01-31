@extends('homepage.company.about')
@section('title',$karir->nama_team . ' - Karir di Sarjanamalam')
@section('metadesc','Halaman karir di sarjanamalam. adalah tempat kamu menemukan karir yang tepat untuk mengembangkan
apa yang kamu miliki. Temukan lingkungan dan orang orang yg tepat di tempat kerja kamu.')
@section('metakey','karir, karir sarjanamalam, jobs, pekerjaan di sarjamalam, lowongan kerja, lowongan di sarjanamalam,
sarjanamalam karir')
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
            <div class="col-lg-4 text-left">
                <a href="#">
                    <h5 class="karirlink_part">{{$part->nama_subcareer}}</h5>
                </a>
                <p>{{$part->deskripsi}}</p>
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
