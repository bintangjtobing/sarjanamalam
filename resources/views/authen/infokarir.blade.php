@extends('authen.index')
@section('title','Detail karir '.$karirget->nama_team)
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>{{$karirget->nama_team}}</strong></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                    <div class="col-12">
                        <h3>Bagian bagian team</h3>
                        <p>Jumlah bagian tim: {{$subinfo->count()}}</p>
                        <hr>
                        <div class="post">
                            @if(!$subinfo->isEmpty())
                            @foreach ($subinfo as $sub)
                            <h5><b><span style="font-size:0.95rem;"><i class="fas fa-circle"></i></span>
                                    {{$sub->nama_subcareer}}</b></h5>
                            <p>
                                {!!$sub->deskripsi!!}
                            </p>
                            <p>
                                <a href="/subkarir-info/{{$sub->subcareer_id}}" class="link-black text-sm"><i
                                        class="fas fa-link mr-1"></i> Lihat detail
                                    pekerjaan</a>
                            </p>
                            @endforeach
                            @else
                            <h5>Tidak ada bagian didalam tim ini.</h5>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <img src="{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$karirget->features_pic)!!}" class="imgevent-det"
                    alt="{{$karirget->nama_team}}">
                <h5><strong>{{$karirget->nama_team}}</strong></h5>
                <p class="text-muted">Deskripsi:<br>{!!$karirget->description!!}</p>
                <br>
                {{-- <div class="text-muted">
                    <p class="text-sm">Client Company
                        <b class="d-block">Deveint Inc</b>
                    </p>
                    <p class="text-sm">Project Leader
                        <b class="d-block">Tony Chicken</b>
                    </p>
                </div>

                <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Functional-requirements.docx</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                            Email-from-flatbal.mln</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Contract-10_12_2014.docx</a>
                    </li>
                </ul>
                <div class="text-center mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
