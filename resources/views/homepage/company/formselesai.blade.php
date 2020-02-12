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
                        <h3>Lamaran kamu berhasil kita terima!</h3>
                        <p>Kami akan menyeleksi lamaran ini dan menghubungi anda lewat email ataupun telepon untuk
                            mengundang anda menghadiri tahap
                            interview.<br>
                            <a href="/"><i class="fas fa-caret-left"></i> Back to home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
