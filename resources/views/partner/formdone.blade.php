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
                        <h3>Data kamu berhasil kita terima!</h3>
                        <p>Terima kasih sudah meluangkan waktu kamu untuk mengisi data keanggotaan RNHKBP GLUGUR untuk
                            tahun 2020.<br>Kami akan memperbarui data lama kamu ke data keanggotaan terbaru RNHKBP
                            GLUGUR.<br>Follow
                            instagram rnhkbp glugur di <a href="https://instagram.com/rnhkbpglugur"
                                target="_blank">@rnhkbpglugur</a><br>
                            <a href="/"><i class="fas fa-caret-left"></i> Back to home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
