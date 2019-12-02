@extends('forum.layouts.frontpage')
@section('title','Home')
@section('content')
<div class="row">
    <div class="col-lg-8 col-xs-12 col-md-8">
        <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
        <div class="pull-left">
            <ul class="paginationforum">
                <li class="hidden-xs"><a href="#">1</a></li>
                <li class="hidden-xs"><a href="#">2</a></li>
                <li class="hidden-xs"><a href="#">3</a></li>
                <li class="hidden-xs"><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#" class="active">7</a></li>
                <li><a href="#">8</a></li>
                <li class="hidden-xs"><a href="#">9</a></li>
                <li class="hidden-xs"><a href="#">10</a></li>
                <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                <li><a href="#">1586</a></li>
            </ul>
        </div>
        <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
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
                        <small class="text-muted">Yes! Topik diskusi kamu sudah berhasil diterbitkan.</small>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">

                </div>
                <div class="clearfix"></div>
            </div>
            @endif
            <!-- POST -->
            @foreach ($threadsdata as $thread)
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status green">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon1.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="#">{{$thread->subject}}</a></h2>
                        <p>{{$thread->thread}}</p>
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
                    <div class="time"><i class="fa fa-clock-o"></i> {{$thread->created_at}}</div>
                </div>
                <div class="clearfix"></div>
            </div>
            @endforeach
        </div>
        @endsection
