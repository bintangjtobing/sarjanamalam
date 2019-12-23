@extends('homepage.company.about')
@section('title','Tentang sarjanamalam.')
@section('aktiftentang','active')
@section('metadesc','Halaman tentang sarjanamalam. dibuat untuk memperkenalkan sarjanamalam. kepada kamu secara ringkas
dan mudah dipahami.')
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
            <div class="col-lg-3"><a href="#" class="btn btn-rounded">Menjadi bagian dari kami</a> </div>
        </div>
    </div>
</section>

<section class="p-t-100 p-b-100" data-bg-parallax="images/parallax/4.jpg">
    <div class="bg-ourstories"></div>
    <div class="container xs-text-center sm-text-center text-light">
        <div class="row">
            <div class="col-lg-5 p-b-60">
                <h2>Cerita kami</h2>
                <p class="lead">Bagian yang terbaik dari terbentuknya kami sekarang adalah menikmati apa yang kami
                    lakukan dari awal hingga saat ini.</p>
                <a href="/cerita-sarjana-malam" class="btn btn-light btn-outline btn-rounded">Telusuri cerita
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
                <h4 class="m-b-20">Produk kami</h4>
                <div class="accordion fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title">Forum komunitas</h5>
                        <div class="ac-content ac-active">We’re POLO, a creative agency located in the heart of New
                            York city. A true story, that never been told!.
                            <br />
                            <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">Mesin pencari</h5>
                        <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam
                            <br />
                            <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="m-b-20">Berita terbaru sarjanamalam.</h4>
                <div class="post-thumbnail-list">
                    <div class="post-thumbnail-entry">
                        <img src="{!!asset('storage/blog/11.jpg')!!}" alt="">
                        <div class="post-thumbnail-content">
                            <a href="#">Suspendisse consectetur fringilla</a>
                            <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                            <span class="post-category"><i class="fas fa-tag"></i> Technology</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img src="{!!asset('storage/blog/16.jpg')!!}" alt="">
                        <div class="post-thumbnail-content">
                            <a href="#">Beautiful nature, and rare feathers!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                            <span class="post-category"><i class="fas fa-tag"></i> Lifestyle</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img src="{!!asset('storage/blog/17.jpg')!!}" alt="">
                        <div class="post-thumbnail-content">
                            <a href="#">The most happiest time of the day!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                            <span class="post-category"><i class="fas fa-tag"></i> Lifestyle</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img src="{!!asset('storage/blog/18.jpg')!!}" alt="">
                        <div class="post-thumbnail-content">
                            <a href="#">Fringilla Lorem ipsum dolor sit amet</a>
                            <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                            <span class="post-category"><i class="icon-activity"></i> Lifestyle</span>
                        </div>
                    </div>
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
                <a href="/lokasi-sarjanamalam"><img src="{!!asset('storage/blog/2.jpg')!!}">
                    <h4>Lokasi sarjanamalam.</h4>
                    <p>Temukan kami</p>
                </a>
            </div>
        </div>

    </div>
</section>
<section class="p-t-18 p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 m-b-30">
                        <h4>Ikuti kami di sosial media</h4>
                        <div class="social-icons social-icons-light social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="https://facebook.com/sarjanamalamdotcom"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a href="https://twitter.com/sarjanamalamcom"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-instagram"><a href="https://instagram.com/sarjanamalamdotcom"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
