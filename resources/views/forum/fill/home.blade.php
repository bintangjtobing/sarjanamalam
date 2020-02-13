@extends('forum.layouts.frontpage')
@section('title','Home')
@inject('userMod', 'App\UserMod')
@section('content')
<div class="row">
    <div class="col-lg-8 col-xs-12 col-md-8">
        <div class="pull-center">
            <ul class="paginationforum">
                {{$threadsdata->links()}}
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            @if(session('suksestambahdiskusi'))
            <div class="post greenpost">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a><span style="font-size:2.25rem;"><i class="far fa-check-circle"></i></span>
                                Congratulations!</a></h2>
                        <small class="text-muted">{{session('suksestambahdiskusi')}}</small>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">

                </div>
                <div class="clearfix"></div>
            </div>
            @endif
            <!-- POST -->
            @if(count($threadsdata)>0)
            @foreach ($threadsdata as $thread)
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <span><img src="@if(!auth()->user()->displaypic){!!asset('storage/img/default.png')!!}
                                @else{!!asset('file/profilepic/'.auth()->user()->displaypic)!!}@endif"
                                    class="img-profile-user" alt="User Image"></span>
                            <div class="status
                                @if(auth()->user()->status=='active') green
                                @else
                                    red
                                @endif
                            ">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>
                            <img src="{{asset('storage/icon/icon1.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" />
                            @if($thread->created_by==auth()->user()->name )
                            <a href="/delete-threads/{{$thread->id}}/verify/{{$tokens}}"><span
                                    style="font-size: 18px; color: #df5b5b;"><i class="fas fa-times-circle"
                                        data-toggle="tooltip" data-placement="bottom"
                                        title="Hapus topik"></i></span></a>
                            @endif
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="/details/{{$thread->id}}/">{{$thread->subject}}</a></h2>
                        <p>{!!str_limit($thread->thread, $limit=60)!!}</p>
                        <small class="text-muted">Diposting oleh {{$thread->created_by}}</small>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            560
                            <div class="mark"></div>
                        </div>
                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <?php $tanggalformat = date('d-m-Y',strtotime($thread->created_at)) ?>
                    <div class="time"><i class="fa fa-clock-o"></i> {{$tanggalformat}}</div>
                </div>
                <div class="clearfix"></div>
            </div>
            @endforeach
            @else
            <div class="post greenpost">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a>
                                Yahh... Belum ada postingan topik pembahasan nih! @emojione(':cry:')</a></h2>
                        <small>Yuk buat topik pembahasan seputar apapun.<a data-toggle="modal"
                                data-target="#newDiscussion">Mulai diskusi baru</a></small>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">

                </div>
                <div class="clearfix"></div>
            </div>
            @endif
        </div>
        @endsection
