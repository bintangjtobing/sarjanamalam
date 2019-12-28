@extends('homepage.company.about')
@section('title','Karir di sarjanamalam.')
@section('metadesc','Halaman karir di sarjanamalam. adalah tempat kamu menemukan karir yang tepat untuk mengembangkan
apa yang kamu miliki. Temukan lingkungan dan orang orang yg tepat di tempat kerja kamu.')
@section('metakey','karir, karir sarjanamalam, jobs, pekerjaan di sarjamalam, lowongan kerja, lowongan di sarjanamalam,
sarjanamalam karir')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 m-b-60 text-center">
                <h4 class="about-title" style="color: #000; !important"><span class="ti-search"></span> Temukan
                    pekerjaanmu di <strong>sarjanamalam.</strong><br><a href="#">Apa yang ingin kamu kerjakan?</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"
                        src="{!!url('https://c.pxhere.com/images/7f/22/9ae20530cde6a2147aefa48db34e-1433059.jpg!d')!!}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title-strong">Teknologi & Developer</h5>
                        <p class="card-text-black">Kembangkan produk, fitur, dan alat masa depan untuk milyaran
                            pengguna.</p>
                        <a href="#" class="card-link-karir mr-5">Pelajari</a><a href="#" class="card-link-karir">Lihat
                            pekerjaan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"
                        src="{!!url('https://c.pxhere.com/photos/96/14/secretary_office_sales_telephony_call_screen_phone-770914.jpg!d')!!}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title-strong">Sales, Services & Support</h5>
                        <p class="card-text-black">Lengkapi bisnis dengan alat yang tepat untuk membantu mereka tumbuh.
                        </p>
                        <a href="#" class="card-link-karir mr-5">Pelajari</a><a href="#" class="card-link-karir">Lihat
                            pekerjaan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"
                        src="{!!url('https://c.pxhere.com/photos/46/15/analysis_analytics_business_chart_charts_computer_concept_data-1366141.jpg!d')!!}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title-strong">Marketing & Communications</h5>
                        <p class="card-text-black">Pelajari dan berinteraksi lah dengan pengguna.</p>
                        <a href="#" class="card-link-karir mr-5">Pelajari</a><a href="#" class="card-link-karir">Lihat
                            pekerjaan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center my-5">
                <h5 style="text-transform:uppercase;"><a href="/teams">Lihat semua bagian</a></h5>
            </div>
        </div>
</section>
@endsection
