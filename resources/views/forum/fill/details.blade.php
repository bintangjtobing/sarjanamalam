@extends('forum.layouts.frontpage')
@section('title','Details Discussion')
@inject('userMod', 'App\UserMod')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <!-- POST -->

            @foreach ($data_thread as $thread)
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
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="#">{{$thread->subject}}</a></h2>
                        <p>{!!$thread->thread!!}</p>
                        <small class="text-muted">Diposting oleh {{$thread->created_by}}</small>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
                <div class="postinfobot">

                    <div class="likeblock pull-left">
                        <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
                        <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>3</a>
                    </div>

                    <div class="prev pull-left">
                        <a href="#"><i class="fa fa-reply"></i></a>
                    </div>
                    <?php $date=date('d-M-Y', strtotime($thread->created_at));
                        $time = date('h:i A', strtotime($thread->created_at))?>
                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : {{$date}} @ {{$time}}
                    </div>

                    <div class="next pull-right">
                        <a href="#"><i class="fa fa-share"></i></a>

                        <a href="#"><i class="fa fa-flag"></i></a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

            @endforeach

        </div>
        @endsection
