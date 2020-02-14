@extends('authen.index')
@section('title','Pelamar management')
@section('aktifpelamar','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card-body">
            @if(session('sukses'))
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Well done!</strong> {{session('sukses')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                @if(!$pelamar->isEmpty())
                @foreach ($pelamar as $cnd)
                <?php $enc_id = Crypt::encrypt($cnd->candidate_id); ?>
                <div class="col-sm-4">
                    <a href="/detail-pelamar/{{$enc_id}}">
                        <div class="position-relative p-3 bg-white" style="height: 180px">
                            <div class="ribbon-wrapper ribbon-xl">
                                <div class="ribbon bg-primary">
                                    {!!$cnd->posisi!!}
                                </div>
                            </div>
                            Hai, nama saya adalah <br />
                            <h3><b>{{$cnd->nama_lengkap}}</b></h3>
                            <small>Silahkan klik untuk melihat info lengkap saya ya.</small>
                            <br>
                            <div class="mt-4">
                                @if($cnd->status_interview=='Belum dilihat')
                                <span><i class="fas fa-eye-slash"></i></span> {{$cnd->status_interview}}
                                @elseif($cnd->status_interview=='Sudah dilihat')
                                <span><i class="fas fa-eye"></i></span> {{$cnd->status_interview}}
                                @elseif($cnd->status_interview=='Diterima')
                                <span style="color:green;"><i class="fas fa-check-circle"></i></span>
                                {{$cnd->status_interview=='Diterima'}}
                                @else
                                <span style="color:red;"><i class=" fas fa-times-circle"></i></span> Ditolak
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3>Belum ada yang melamar nih.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
