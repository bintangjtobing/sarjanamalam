@extends('homepage.company.about')
@section('title','Yeay! Kamu berhasil daftar pada event ini!')
@section('content')
<section class="registerevent-bg">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-12 text-center">
                        <img src="{!!asset('storage/img/kingdom-4.png')!!}" class="imgserved-done" alt="">
                        <h3>Registrasi event telah berhasil!</h3>
                        <p>Telah berhasil registrasi event {{$find->nama_event}}.<br>Jangan lupa untuk menghadiri event
                            ini
                            di tanggal {{$find->tglevent}} jam {{$find->waktu_event}}.<br>
                            Kami menunggu kehadiranmu di event tersebut ya.<br>Terima kasih.<br>
                            <a href="/"><i class="fas fa-caret-left"></i> Back to home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
