@extends('forum.layouts.frontpage')
@section('aktifjobs','active')
@section('discover','Jobs')
@section('aktifdw-jobs','active')
@section('title','Events')
@inject('userMod', 'App\UserMod')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@section('content')
<div class="blog mb-3">
    <h3><b>Find your <span class="text-gradient-blue-sarjana">jobs</span> here.</b></h3>
</div>
<div class="blog">
    @foreach ($jobs as $jobData)
    <?php $enc_karirid = base64_encode($jobData->subcareer_id) ?>
    <div class="post-item">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4><a href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}"
                            style="font-weight: 600;">{{$jobData->nama_subcareer}}</a>
                    </h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="muted-text">Lamaran dibuka sejak
                                {{Carbon\Carbon::parse($jobData->created_at)->diffForHumans()}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <p>{!!Str::limit($jobData->deskripsi, 120)!!}</p>
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <span style="font-size: .80rem;"><a
                                    href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}">Lihat
                                    data detail pekerjaan</a></<span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
