@extends('homepage.company.about')
@section('title','Event sarjanamalam.')
@section('aktiftentang','active')
@section('metadesc','Event sarjanamalam. adalah suatu halaman yang berisi event event menarik dan bermanfaat yang akan
membekali calon sarjana. Seminar')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@section('metakey','event sarjanamalam, event, komunitas, forum, seminar sarjanamalam, seminar')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 m-b-60 text-center">
                <h1 class="about-title">Event's sarjanamalam.</h1>
                <h2 class="h2-title">Meriahkan eventmu diforum <b alt="sarjanamalam.">#sarjanamalam.</b><br>jangkau
                    banyak peserta dan dukung kemampuan kamu dengan ikutin salah satu event yang kita bagikan disini
                </h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="heading m-b-40">
            <h2><strong>Event Schedule</strong></h2>
            <span class="lead">Jadwal jadwal event yang tersedia selama 3 bulan kedepan.</span>
        </div>
        <div class="row m-t-60">
            <div class="col-md-12 m-b-20">
                <h3>Event lokal</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($event as $eventitem)
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('eventstorage/img/'.$eventitem->picevent)!!}"
                        alt="Event image">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{$eventitem->tglevent}} | {{$eventitem->waktu_event}}
                        </h6>
                        <h5 class="card-title">{{$eventitem->nama_event}}</h5>
                        <p class="card-text">{{$eventitem->harga_event}}</p>
                        <p class="card-text">{!!str_limit($eventitem->deskripsi_event, $limit=100)!!}<br> <b>Mau tau
                                kelanjutannya dan penasaran akan event tsb?</b></p>
                    </div>
                    @if($eventitem->status!='finished')
                    <div class="card-body">
                        Kursi masih tersedia! <a href="/daftar-event/{{$eventitem->event_id}}">Daftar?</a>
                    </div>
                    @else
                    <div class="card-body">
                        <b>Event ini telah selesai.</b><br>Jangan ketinggalan event event menarik lainnya dengan cara
                        <a href="/daftar/{{$tokens}}">mendaftar menjadi
                            keanggotaan</a> <span class="text-gradient-blue-sarjana">Sarjanamalam.</span>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="row m-t-60">
            <div class="col-md-12 m-b-20">
                <h3>Event nasional</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/12.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/14.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/17.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/18.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/12.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/14.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/17.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/18.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020 13:00 WIB</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">

                        Masih tersedia! <a href="#">Daftar?</a>

                    </div>
                </div>
            </div>
        </div> --}}
    </div>

</section>
<section id="section2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="heading m-b-40">
                    <h2 class="about-title">Event sarjanamalam.</h2>
                    {{-- <span class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> --}}
                </div>
                <p> Sarjanamalam membantu kamu untuk mempublikasikan acara partner kami melalui media sosial, website.
                    Bukan hanya membantu mempublikasikan, kita juga membantu dalam proses daftar mendaftar bagi siapapun
                    yang ingin
                    datang
                    ke acara event yang telah kamu ajukan ke Sarjanamalam.</p>
                <p> Tidak hanya itu, kami juga akan memberikan
                    data pendaftaran secara transparan kepada event planner dan kami akan menyesuaikan sesuai dengan
                    permintaan partner yang telah bekerja sama dengan kami dalam event media partner ini.</p>
                </p>
                <div class="seperator">EVENT INFO NUMBERS</div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="3000" data-refresh-interval="50"
                                    data-to="{{$eventcount->count()}}" data-from="0" data-seperator="true"></span>
                            </div>
                            <p>EVENT TERDAFTAR</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="4550" data-refresh-interval="50"
                                    data-to="{{$eventfinish->count()}}" data-from="0" data-seperator="true"></span>
                            </div>
                            <p>EVENT YANG SUDAH BERJALAN</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background-image:url('{!!asset('storage/img/eventbanner_ex.jpg')!!}')"
                    class="call-to-action background-image">
                    <h3 class="text-light">
                        Request event dan meriahkan acaramu dengan hadirnya banyak peserta.
                    </h3>
                    <p class="text-light">
                        Cukup isi formulir dengan klik tombol "Request ad event" dibawah, dan tunggu kabar setuju untuk
                        memulai iklan dari
                        sarjanamalam untuk menjangkau banyak peserta.
                    </p>
                    <a class="btn btn-outline btn-light" href="/request-ad-event">Request ad event</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
