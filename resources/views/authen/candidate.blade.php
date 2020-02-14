@extends('authen.index')
@section('title','Pelamar management')
@section('aktifpelamar','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card-body">
            <div class="row">
                @if(!$pelamar->isEmpty())
                @foreach ($pelamar as $cnd)
                <?php $enc_id = Crypt::encrypt($cnd->candidate_id); ?>
                <div class="col-sm-4">
                    <a href="/detail-pelamar/{{$enc_id}}">
                        <div class="position-relative p-3 bg-gray" style="height: 180px">
                            <div class="ribbon-wrapper ribbon-xl">
                                <div class="ribbon bg-primary">
                                    {!!$cnd->posisi!!}
                                </div>
                            </div>
                            Hai, nama saya adalah <br />
                            <h3><b>{{$cnd->nama_lengkap}}</b></h3>
                            <small>Silahkan klik untuk melihat info lengkap saya ya.</small>
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
