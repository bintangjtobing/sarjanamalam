@extends('forum.messages.index')
@section('discover','Messages')
@inject('userMod', 'App\UserMod')
@section('content')
<?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>
<div id="blog">
    <div class="post-item">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-3 text-left" style="padding-right:0px;">
                            <div class="media mb-4">
                                <input type="search" name="" class="form-control" placeholder="Cari pesan..."
                                    id="searchmessages">
                            </div>
                            <div class="scroll-user-active">
                                @foreach ($users as $user)
                                <div class="user media select-media" id="{{$user->id}}">
                                    <img class="mr-3 img-messagesuser" src="@if(!$user->displaypic){{asset('storage/img/default.png')}}
                                        @else
                                {{$user->displaypic}}
                                @endif" alt="Hi! This is {{$user->name}} picture.">
                                    <div class="media-body">
                                        <h6 class="mt-0">{{$user->name}} <span class="badge badge-light">1</span></h5>
                                            <p class="muted-text">{{$user->email}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6" id="messages">
                            
                        </div>
                        <div class="col-lg-3">
                            <div class="media user-about">
                                <img class="mr-3 img-messagesuser-about"
                                    src="https://images.unsplash.com/photo-1535498051285-5613026fae05?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                    alt="Generic placeholder image">
                                <div class="media-body userinfohead">
                                    <h5 class="mt-0">John Doe</h5>
                                    <p class="muted-text">Aktif 1 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="media user-about">
                                <div class="media-body pt-4">
                                    <div class="row">
                                        <div class="col-lg-2 pt-2" data-toggle="tooltip" data-placement="bottom"
                                            title="Information about me">
                                            <span style="font-size:1.25rem;" class="i far fa-question-circle"></span>
                                        </div>
                                        <div class="col-lg-10">
                                            <p><b>mail@sarjanamalam.com</b><br>Email</p>
                                            <p><b>@adminsa</b><br>Username</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
