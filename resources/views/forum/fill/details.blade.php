@extends('forum.layouts.frontpage')
@section('title','Details Discussion')
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
                            <p><span class="post-meta-date"><img src="@if(!$thread->displaypic){!!asset('storage/img/default.png')!!}
                                        @else{!!asset('file/profilepic/'.$thread->displaypic)!!}@endif"
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
                    <p>{!!$thread->thread!!}</p>
                </div>
                <hr>
                <div class="card-text">

                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-7 text-left">
                            <span style="font-size: 1rem;" class="mr-3"><a><i class="bookmark far fa-bookmark"></i>
                                    Favorite</a></span>
                            <span style="font-size: 1rem;"><a href=""><i class="far fa-comment"></i>
                                    Respond</a></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h5>Comments ({{$commentData->count()}})</h5>
                        </div>
                    </div>
                    @foreach ($commentData as $comment)
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <p><span class=""><img src="@if(!$comment->displaypic){!!asset('storage/img/default.png')!!}
                                        @else{!!asset('file/profilepic/'.$comment->displaypic)!!}@endif"
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
<div class="post-item">
    <div class="card" id="response">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h3>Your response?</h3>
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
@endforeach

</div>
@endsection
