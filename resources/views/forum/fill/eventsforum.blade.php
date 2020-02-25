@extends('forum.layouts.frontpage')
@section('aktifevents','active')
@section('title','Events')
@inject('userMod', 'App\UserMod')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@section('content')
<div class="blog">
    @foreach ($event as $evtData)
    <?php $enc_eventid = base64_encode($evtData->event_id) ?>
    <div class="post-item">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4><a href="/daftar-event/{{$enc_eventid}}/{{$evtData->nama_event}}"
                            style="font-weight: 600;">{{$evtData->nama_event}}</a>
                    </h4>
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="muted-text">Dibuat {{Carbon\Carbon::parse($evtData->created_at)->diffForHumans()}}
                            </p>
                        </div>
                        <div class="col-lg-5 text-right">
                            <span>{{$evtData->kategori_event}}</span>
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <p>{!!str_limit($evtData->deskripsi_event, $limit=120)!!}</p>
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-7 text-left">
                            <span style="font-size: .80rem;" class="mr-3"><a href="#"><i
                                        class="far fa-calendar-alt"></i>
                                    {{$evtData->tglevent}}</a></span><span style="font-size: .80rem;"><a href="#"><i
                                        class="far fa-clock"></i>
                                    {{$evtData->waktu_event}}</a></span>
                        </div>
                        <div class="col-lg-5 text-right">
                            <a style="font-size: .75rem;">
                                @if($evtData->status!='finished')
                                <b>Kursi masih tersedia. <a
                                        href="/daftar-event/{{$enc_eventid}}/{{$evtData->nama_event}}">Daftar?</a></b>
                                @else
                                <b>Event ini telah selesai.</b>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
