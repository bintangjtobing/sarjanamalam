@extends('forum.layouts.frontpage')
@section('aktifthreads','active')
@section('discover','Threads')
@section('aktifdw-threads','active')
@section('title','Home')
@inject('userMod', 'App\UserMod')
@section('content')
<?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>
<div id="blog">
    @if(session('suksestambahdiskusi'))
    <div class="post-item">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p><span style="font-size: 3rem; color: #4aa5e7;"><i
                                        class="far fa-check-circle"></i></span><br><span
                                    class="text-gradient-blue-sarjana">Berhasil!</span>
                                {{session('suksestambahdiskusi')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<div class="page-title">
    <div class="accordion accordion-shadow">
        <div class="ac-item ac-active">
            <h5 class="ac-title my-3"><i class="fa fa-rocket"></i> Bagikan topik baru</h5>
            <div class="ac-content">
                <form action="/verify-add-new-topic/{{$tokens}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Judul topik pembahasan</label>
                            <input type="text" name="subject" id="subject" class="form-control mb-3" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Pilih kategori topik</label>
                            <select name="category" class="form-control mb-3" required>
                                @foreach ($category_data as $cat)
                                <option value="{{$cat->category_id}}">{{$cat->category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <textarea name="threads" id="newwrite" placeholder="Tulis disini" cols="30" rows="10"
                                autofocus required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-gradient-blue-sarjana">Buat
                                    topik</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="blog">
    @foreach ($threadsdata as $thread)
    <div class="post-item">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-8 text-left">
                            <p><span class="post-meta-date"><img
                                        src="@if(!$thread->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                        @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$thread->displaypic)!!}@endif"
                                        alt="img-profile-user" class="img-fluid thread-profilepic">
                                    <a href="/{{$thread->username}}"
                                        style="color: #3c3c3c !important; font-weight:600;">{{$thread->name}}</a></span>
                                @if($thread->verified==1)
                                <span title="Verified"><img
                                        src="https://res.cloudinary.com/sarjanamalam/image/upload/v1584348883/based/checkmark_ty9wnj.svg"
                                        alt="Verified"
                                        style="width:15px !important; height:15px !important; margin-left:.10rem;"></span>
                                @else
                                @endif
                            </p>
                        </div>
                        <div class="col-lg-4 text-right">
                            <span class="text-gradient-blue-sarjana">#{{$thread->category}}</span>
                        </div>
                    </div>
                </div>
                <div class="card-title">
                    <?php $enc_id = Crypt::encrypt($thread->id); ?>
                    <h4><a href="/details/{{$enc_id}}/" style="font-weight: 600;">{{$thread->subject}}</a> </h4>
                    <p class="muted-text">Dibuat {{Carbon\Carbon::parse($thread->created_at)->diffForHumans()}}</p>
                </div>
                <div class="card-text">
                    <p>{!!str_limit($thread->thread, $limit=120)!!}</p>
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-lg-7 text-left">
                            {{-- <span style="font-size: .75rem;" class="mr-3"><a href="#"><i class="fas fa-bookmark"></i>
                                    1,985
                                    favorited</a></span> --}}
                            <span style="font-size: .75rem;" class="mr-2"><a href="#"><i class="far fa-eye"></i>
                                    @if($thread->view_count>999){{$thread->view_count/1000}}
                                    views
                                    @elseif($thread->view_count>1){{$thread->view_count}}
                                    views
                                    @else {{$thread->view_count}} view @endif</a></span>
                            <span style="font-size: .75rem;"><a href="#"><i class="fas fa-comment"></i>
                                    {{$commentData->count()}} response</a></span>

                        </div>
                    </div>
                </div>
                <div class="card-text my-3">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            {{-- <span style="font-size: 1rem;" class="mr-3"><a><i class="bookmark far fa-bookmark"></i>
                                    Favorite</a></span> --}}
                            <span style="font-size: 1rem;"><a href="/details/{{$enc_id}}"><i class="far fa-comment"></i>
                                    Gabung pembahasan</a></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<ul class="pagination">
    {{$threadsdata->links()}}
</ul>
@endsection
