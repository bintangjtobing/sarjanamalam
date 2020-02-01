@extends('homepage.company.about')
@section('title','Tentang sarjanamalam.')
@section('aktiftentang','active')
@section('metadesc','Halaman tentang sarjanamalam. dibuat untuk memperkenalkan sarjanamalam. kepada kamu secara ringkas
dan mudah dipahami.')
@section('metakey','tentang sarjanamalam, about sarjanamalam, tentang kami, lebih banyak tentang kami')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 m-b-60 text-center">
                <h4 class="about-title">Tentang sarjanamalam.</h4>
                <h2 class="h2-title">Misi kami adalah <b>memudahkan anda</b> dalam <b>perkuliahan</b> dan
                    <b>berbagi</b>
                    permasalahan
                    dan
                    <b>menemukan solusi</b></h2>
            </div>
        </div>
    </div>
</section>

<section class="background-grey text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3 style="font-weight: 400;">Banyak ide kreatif? Ayo mulai bersama</h3>
            </div>
            <div class="col-lg-3"><a href="/karir-sarjanamalam" class="btn btn-rounded">Menjadi bagian dari kami</a>
            </div>
        </div>
    </div>
</section>

<section class="p-t-100 p-b-100">
    <div class="bg-ourstories"></div>
    <div class="container xs-text-center sm-text-center text-light">
        <div class="row">
            <div class="col-lg-5 p-b-60">
                <h2>Cerita kami</h2>
                <p class="lead">Bagian yang terbaik dari terbentuknya kami sekarang adalah menikmati apa yang kami
                    lakukan dari awal hingga saat ini.</p>
                <a href="/cerita-sarjanamalam" class="btn btn-light btn-outline btn-rounded">Telusuri cerita
                    kami</a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 center text-center">
                <h4 class="m-b-10">Lebih lanjut</h4>
                <h2 class="bluesarjana">Tentang sarjanamalam.</h2>
                <p class="lead m-b-60 p-para">Suatu usaha yang bergerak dibidang bisnis teknologi dan informasi yang
                    berfokus pada ranah <b>forum</b> dan <b>mesin pencari yang kompleks</b>.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="m-b-20">Apa yang ada pada kami?</h4>
                <div class="accordion fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title">Forum komunitas</h5>
                        <div class="ac-content ac-active">Komunitas online merupakan sebuah komunitas yang terbentuk
                            secara virtual. Sarjanamalam menyediakan wadah untuk membentuk komunitas virtual ini.<br>
                            Pengguna sarjanamalam dapat saling berinteraksi dan membentuk komunitas yang dapat
                            memudahkan setiap pengguna untuk saling bertukar informasi dan gagasan. </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">Mesin pencari</h5>
                        <div class="ac-content">Layaknya mesin pencari terdahulu, sarjanamalam hadir sebagai program
                            komputer yang dirancang sebagai mesin pencarian seluruh informasi yang terdapat dalam
                            internet. Mesin pencari rakitan sarjanamalam akan memudahkan setiap penggunanya untuk
                            mencari data, warta dan informasi yang mereka inginkan secara tepat dan akurat. </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">Event media partner</h5>
                        <div class="ac-content">Sarjanamalam sebagai sebuah usaha yang bergerak dalam bidang teknologi
                            dan informasi dapat membangun kerjasama dengan berbagai event. Kerja sama ini diharapkan
                            dapat meningkatkan kredibilitas event.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="m-b-20">Berita terbaru sarjanamalam.</h4>
                <div class="post-thumbnail-list">
                    @foreach ($blog as $blogList)
                    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
                    <div class="post-thumbnail-entry">
                        <img src="{!!asset('file/img/blog/'.$blogList->coverimg)!!}" alt="">
                        <div class="post-thumbnail-content">
                            <a href="/read-blog/{{$blogList->blog_id}}/{{$tokens}}">{{$blogList->blog_title}}</a>
                            <span class="post-date"><span class="ti-alarm-clock"></span>
                                {{date('M, Y',strtotime($blogList->created_at))}}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">

        <div class="grid-layout grid-2-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <div class="grid-item">
                <a href="/karir-sarjanamalam"><img src="{!!asset('storage/blog/1.jpg')!!}">
                    <h4>Karir di sarjanamalam.</h4>
                    <p>Gabung bersama kami</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="/hubungi-sarjanamalam"><img src="{!!asset('storage/blog/2.jpg')!!}">
                    <h4>Hubungi kami</h4>
                    <p>Katakan halo</p>
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
