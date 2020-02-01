@extends('homepage.company.about')
@section('title','Event sarjanamalam.')
@section('aktiftentang','active')
@section('metadesc','Event sarjanamalam. adalah suatu halaman yang berisi event event menarik dan bermanfaat yang akan
membekali calon sarjana. Seminar')
@section('metakey','event sarjanamalam, event, komunitas, forum, seminar sarjanamalam, seminar')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 m-b-60 text-center">
                <h1 class="about-title">Event's sarjanamalam.</h1>
                <h2 class="h2-title">Meriahkan eventmu diforum <b alt="sarjanamalam.">#sarjanamalam.</b><br>jangkau
                    banyak peserta dan kembangin kemampuan peserta dengan ikutin salah satu event berikut</h2>
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
                    <div class="card-body">

                        Kursi masih tersedia! <a href="/daftar-event/{{$eventitem->event_id}}">Daftar?</a>
                    </div>
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
                    <span class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                </div>
                <p> orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                </p>
                <div class="seperator">EVENT INFO NUMBERS</div>
                <div class="row text-center">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="3000" data-refresh-interval="50"
                                    data-to="{{$eventcount->count()}}" data-from="600" data-seperator="true"></span>
                            </div>
                            <p>EVENT TERDAFTAR</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="4550" data-refresh-interval="50"
                                    data-to="14825" data-from="48" data-seperator="true"></span> </div>
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
