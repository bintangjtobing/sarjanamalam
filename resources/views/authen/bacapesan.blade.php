@extends('authen.index')
@section('title','Messages')
@section('aktifinbox','active')
@section('content')
<!-- Default box -->
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
<section class="content">
    <div class="container-fluid">
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
                                    <?php $countinbox = $pesanget->count(); ?>
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

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Read Mail from: {{$pesanget->nama_lengkap}}
                        </h3>

                        <div class="card-tools">
                            <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h5>Message subject: {{$pesanget->subject}} @if($pesanget->judul_messages=='Pertanyaan
                                umum')
                                <span style="color: #007bff"><i class="fas fa-tag"></i></span>
                                @elseif($pesanget->judul_messages=='Bantuan layanan atau produk')
                                <span style="color: #17a2b8"><i class="fas fa-tag"></i></span>
                                @elseif($pesanget->judul_messages=='Bug atau kesalahan pada sistem sarjanamalam')
                                <span style="color: #dc3545"><i class="fas fa-tag"></i></span>
                                @elseif($pesanget->judul_messages=='Celah keamanan atau penyalahgunaan pada
                                sarjanamalam')
                                <span style="color: #ffc107"><i class="fas fa-tag"></i></span>
                                @else
                                <span style="color: #6c757d"><i class="fas fa-tag"></i></span>
                                @endif</h5>

                            <h6>Email: {{$pesanget->email}}
                                <span class="mailbox-read-time float-right">{{$pesanget->created_at}}</span></h6>
                        </div>
                        <!-- /.mailbox-read-info -->
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                <a href="/trash-messages/{{$pesanget->messages_id}}" class="btn btn-default btn-sm"
                                    data-toggle="tooltip" data-container="body" title="Delete">
                                    <i class="far fa-trash-alt"></i></a>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                    data-container="body" title="Reply">
                                    <i class="fas fa-reply"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                    data-container="body" title="Forward">
                                    <i class="fas fa-share"></i></button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                                <i class="fas fa-print"></i></button>
                        </div>
                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <p>{{$pesanget->messages}}</p>

                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.card-body -->
                    {{-- <div class="card-footer bg-white">
                        <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                            <li>
                                <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                                <div class="mailbox-attachment-info">
                                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                        Sep2014-report.pdf</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                        <span>1,245 KB</span>
                                        <a href="#" class="btn btn-default btn-sm float-right"><i
                                                class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                                <div class="mailbox-attachment-info">
                                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App
                                        Description.docx</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                        <span>1,245 KB</span>
                                        <a href="#" class="btn btn-default btn-sm float-right"><i
                                                class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png"
                                        alt="Attachment"></span>

                                <div class="mailbox-attachment-info">
                                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                        photo1.png</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                        <span>2.67 MB</span>
                                        <a href="#" class="btn btn-default btn-sm float-right"><i
                                                class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png"
                                        alt="Attachment"></span>

                                <div class="mailbox-attachment-info">
                                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                        photo2.png</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                        <span>1.9 MB</span>
                                        <a href="#" class="btn btn-default btn-sm float-right"><i
                                                class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- /.card-footer -->
                    {{-- <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                            <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
                        </div>
                        <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                        <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                    </div> --}}
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</section>
@endsection
