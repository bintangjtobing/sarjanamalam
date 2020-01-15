@extends('authen.index')
@section('title','Messages')
@section('aktifinbox','active')
@section('content')
<!-- Default box -->
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <a href="#" class="btn btn-primary btn-block mb-3">Compose</a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item active">
                            <a href="/pesan/{{$tokens}}" class="nav-link">
                                <?php $countinbox = $pesanall->count(); ?>
                                <i class="fas fa-inbox"></i> Inbox
                                <span class="badge bg-primary float-right">{{$countinbox}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-envelope"></i> Sent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt"></i> Drafts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-filter"></i> Junk
                                <span class="badge bg-warning float-right">65</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/trash/{{$tokens}}" class="nav-link">
                                <i class="far fa-trash-alt"></i> Trash
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Labels</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-danger"></i>
                                Important
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-warning"></i> Promotions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-primary"></i>
                                Social
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            @if(session('suksessampah'))
            <div class="alert alert-success alert-dismissable fade show">
                <i class="fas fa-dot-circle"></i> {{session('suksessampah')}}
            </div>
            @endif
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        @if(Request::is('pesan/*'))
                        Pesan masuk
                        @elseif(Request::is('trash/*'))
                        Tempat sampah
                        @elseif(Request::is('sent/*'))
                        Pesan terkirim
                        @elseif(Request::is('drafts/*'))
                        Drafts
                        @else
                        Spam / Junk mail
                        @endif
                    </h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="#">
                                <span style="color: #007bff"><i class="far fa-circle"></i></span> General Tag
                            </a>
                            <a class="btn btn-default btn-sm" href="#">
                                <span style="color: #17a2b8"><i class="far fa-circle"></i></span> Service Assistance Tag
                            </a>
                            <a class="btn btn-default btn-sm" href="#">
                                <span style="color: #dc3545"><i class="far fa-circle"></i></span> Bug Report Tag
                            </a>
                            <a class="btn btn-default btn-sm" href="#">
                                <span style="color: #ffc107"><i class="far fa-circle"></i></span> Security Tag
                            </a>
                        </div>
                        <!-- /.btn-group -->
                        <a class="btn btn-default btn-sm" href="javascript:window.location.href=window.location.href"><i
                                class="fas fa-sync-alt"></i></a>
                        <div class="float-right">
                            {{$pesan->count()}} dari {{$pesanall->count()}} pesan.
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="mailbox-controls">
                        <div class="float-right">
                            <div class="btn-group">
                                {{$pesan->links()}}
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                @if(!$pesan->isEmpty())
                                @foreach ($pesan as $psn)
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        @if($psn->judul_messages=='Pertanyaan umum')
                                        <span style="color: #007bff"><i class="far fa-circle"></i></span>
                                        @elseif($psn->judul_messages=='Bantuan layanan atau produk')
                                        <span style="color: #17a2b8"><i class="far fa-circle"></i></span>
                                        @elseif($psn->judul_messages=='Bug atau kesalahan pada sistem sarjanamalam')
                                        <span style="color: #dc3545"><i class="far fa-circle"></i></span>
                                        @elseif($psn->judul_messages=='Celah keamanan atau penyalahgunaan pada
                                        sarjanamalam')
                                        <span style="color: #ffc107"><i class="far fa-circle"></i></span>
                                        @else
                                        <span style="color: #6c757d"><i class="far fa-circle"></i></span>
                                        @endif
                                    </td>
                                    <td class="mailbox-name"><a
                                            href="/read/{{$psn->messages_id}}">{{$psn->nama_lengkap}}</a></td>
                                    <td class="mailbox-subject"><b>{{$psn->subject}}</b> -
                                        {{str_limit($psn->messages, $limit=100)}}
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">{{$psn->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            @if(Request::is('trash/*'))<a class="btn btn-default btn-sm"><i
                                                    class="fas fa-undo"></i></a>
                                            @elseif(Request::is('pesan/*'))
                                            <a href="/trash-messages/{{$psn->messages_id}}"
                                                class="btn btn-default btn-sm"><i class="fas fa-trash-alt"></i></a>
                                            @else
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <td colspan="7" class="text-center">No data founded</td>
                                @endif
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0 my-2">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></a>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            {{$pesan->count()}} dari {{$pesanall->count()}} pesan.
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>

                    <div class="mailbox-controls">
                        <div class="float-right">
                            <div class="btn-group">
                                {{$pesan->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<script>
    $(function () {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function () {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass(
                    'fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass(
                    'fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })

        //Handle starring for glyphicon and font awesome
        $('.mailbox-star').click(function (e) {
            e.preventDefault()
            //detect type
            var $this = $(this).find('a > i')
            var glyph = $this.hasClass('glyphicon')
            var fa = $this.hasClass('fa')

            //Switch states
            if (glyph) {
                $this.toggleClass('glyphicon-star')
                $this.toggleClass('glyphicon-star-empty')
            }

            if (fa) {
                $this.toggleClass('fa-star')
                $this.toggleClass('fa-star-o')
            }
        })
    })

</script>
@endsection
