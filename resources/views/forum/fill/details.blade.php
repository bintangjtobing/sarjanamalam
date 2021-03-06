@extends('forum.layouts.frontpage')
@section('title','Details Discussion')
@section('discover','Detail Threads')
@section('aktifthreads','active')
@inject('userMod', 'App\UserMod')
@section('content')
<div id="blog">
    @foreach ($data_thread as $thread)
    <div class="post-item">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <p><span class="post-meta-date"><img
                                        src="@if(!$thread->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                        @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$thread->displaypic)!!}@endif"
                                        alt="img-profile-user" class="img-fluid thread-profilepic">
                                    {{$thread->name}}</span></p>
                        </div>

                    </div>
                </div>
                <div class="card-title">
                    <?php $enc_id = Crypt::encrypt($thread->id); ?>
                    <h4><a href="/details/{{$enc_id}}/" style="font-weight: 600;">{{$thread->subject}}</a> </h4>
                    <p class="muted-text">Dibuat
                        {{Carbon\Carbon::parse($thread->created_at)->diffForHumans()}} &nbsp; <span><a href="#"><i
                                    class="far fa-eye"></i>
                                @if($thread->view_count>999){{$thread->view_count/1000}}
                                views
                                @elseif($thread->view_count>1){{$thread->view_count}}
                                views
                                @else {{$thread->view_count}} view @endif</a></span></p>
                </div>
                <div class="card-text">
                    @if(!$thread->photofeatures == '')
                    <img class="imgthreads-forum" src="{!!asset('file/forum/'.$thread->photofeatures)!!}"
                        alt="{{$thread->subject}} thumbnail image">
                    @else
                    @endif
                    <p>{!!$thread->thread!!}</p>
                </div>
                <hr>
                <div class="card-text">
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h5>Responses ({{$commentData->count()}})</h5>
                        </div>
                    </div>
                    @foreach ($commentData as $comment)
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <p><span class=""><img
                                        src="@if(!$comment->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                        @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$comment->displaypic)!!}@endif"
                                        alt="img-profile-user" class="img-fluid thread-profilepic">
                                </span><b>{{$comment->name}}</b>&nbsp;{{'@'.$comment->username}} &#9679;
                                {{Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</p>
                            <p>{!!$comment->comments!!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@if(session('suksesresponse'))
<div class="post-item">
    <div class="card">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><span style="font-size: 3rem; color: #4aa5e7;"><i
                                    class="fas fa-check-circle"></i></span><br><span
                                class="text-gradient-blue-sarjana">Berhasil!</span>
                            {{session('suksesresponse')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(Auth::check())
<div class="post-item">
    <div class="card">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h3>Pendapatmu?</h3>
                    </div>
                </div>
            </div>
            <form action="/response-comments/{{$enc_id}}" method="post">
                {{ csrf_field() }}
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-12 text-left mb-3">
                            <textarea name="commenttext" id="" placeholder="Tulis disini" autofocus></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Terima kasih telah berkontribusi respon di Sarjanamalam!<br>Pastikan kamu merespon
                                topik
                                dengan detail dan bagikan apa yang kamu bisa!<br><b>Dan hindari</b>, untuk
                                beriklan, membahas pembahasan sara dan hal yang tidak diperbolehkan di
                                Sarjanamalam.<br>Untuk lebih lengkapnya, lihat <a href="#">peraturan, serta tips
                                    yang
                                    berlaku dalam merespon topik.</a>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <div class="form-group">
                                <button type="submit" class="btn btn-gradient-blue-sarjana">Submit your
                                    response</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="post-item">
    <div class="card">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4><b>Ayo kita bahas selengkapnya di forum ini.</b></h4>
                    </div>
                </div>
            </div>
            <form action="/response-comments/{{$enc_id}}" method="post">
                {{ csrf_field() }}
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-6 my-3">
                            <form action="/signin">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Login
                                    Account</button>
                            </form>
                        </div>
                        <div class="col-lg-6 my-3">
                            <form action="/register">
                                <button type="submit" class="btn btn-success btn-block btn-lg">Create Your
                                    Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection
