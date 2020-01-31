@extends('homepage.company.about')
@section('title','Partnership - Sarjanamalam.')
@section('metadesc','Partnership - Sarjanamalam.')
@section('metakey','partnership sarjanamalam, sponsor sarjana, jadi bagian dari sarjanamalam, partnership')
@section('content')
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

    <div class="slide" style="background-image:url('{!!asset('storage/img/partnership.jpg')!!}')">
        <div class="container">
            <div class="slide-captions">

                <h2 class="text-light">Berkolaborasi dengan <b>sarjanamalam</b></h2>
                <h4 class="m-b-40 text-light"><b>#YukBerkolaborasi!</b> Kami sangat terbuka pada kamu untuk bersedia
                    <br>berkolaborasi bersama <b>sarjanamalam</b>.</h4>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <h4 class="text-gradient-blue-sarjana">Manfaat yang didapatkan</h4>
                <h2>Tetapkan tujuan anda berkolaborasi dengan kami.</h2>
                <p class="lead">Buat anda yang ingin berkolaborasi dengan kami, kami siap menjadi partner anda dalam
                    melakukan branding, ataupun kerjasama lain yang mungkin bisa kita realisasikan bersama.</p>

            </div>
            <div class="col-lg-6 offset-1 m-t-40">
                <div class="row">

                    <div class="col-lg-6">
                        <h4><i class="far fa-life-ring"></i> Diskon 90%<br>Domain & Hosting</h4>
                        <p><span class="text-gradient-blue-sarjana">Sarjanamalam</span> memberikan diskon cuma-cuma
                            untuk layanan hosting dan domain untuk kebutuhan
                            partner
                            kami.*</p>
                    </div>


                    <div class="col-lg-6">
                        <h4><i class="far fa-gem"></i> Hadiah pemenang</h4>
                        <p>Kami juga memberikan hadiah untuk penanya terbaik dan kebutuhan lainnya.*</p>
                    </div>


                    <div class="col-lg-6">
                        <h4><i class="fas fa-bullhorn"></i> Publikasi acara</h4>
                        <p><span class="text-gradient-blue-sarjana">Sarjanamalam</span> membantu kamu untuk
                            mempublikasikan acara partner kami melalui media sosial, website.</p>
                    </div>


                    <div class="col-lg-6">
                        <h4><i class="fas fa-coffee"></i> Kerja sama lainnya</h4>
                        <p>Jika anda mempunyai ide kerja sama lainnya, jangan sungkan untuk menghubungi tim <span
                                class="text-gradient-blue-sarjana">sarjanamalam</span> untuk realisasi ide tersebut.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="p-t-150 p-b-200"
    style="background-image:url('{!!asset('storage/img/background-4.png')!!}'); background-position:71% 22%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="m-b-10">Cara pengajuan</h2>
                        <p class="lead">Kami tidak akan membuat proses pengajuan kamu sulit. Kami akan selalu membuat
                            inovasi dalam kemudahan berkolaborasi dengan partner kami. </p>
                    </div>
                    <div class="col-lg-12 m-b-30">
                        <p>Cukup dengan mengisi formulir yang berada disebelah kanan, tunggu hingga kami memvalidasi
                            serta menghubungi anda melalui email/telepon untuk proses konfirmasi kerjasama.</p>
                        <p>Jika pengajuan sudah selesai, <span class="text-gradient-blue-sarjana">sarjanamalam</span>
                            akan melakukan MOU/perjanjian kerja sama bersama partner.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-1">
                <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
                <form action="/partnership/ajukan-permohonan/{{$tokens}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(session('suksesajukan'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Akhirnya selesai.. </strong> {{session('suksesajukan')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name">Nama lengkap</label>
                            <input type="text" aria-required="true" required name="namalengkap"
                                class="form-control required name" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" aria-required="true" required name="email"
                                class="form-control required email" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nohp">No HP / Telp</label>
                            <input type="text" aria-required="true" required name="nohp"
                                class="form-control required email" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="institusi">Institusi / Perusahaan</label>
                        <input type="text" name="institusi" id="" required class="form-control required">
                    </div>
                    <div class="form-group">
                        <label for="">Lampiran Proposal</label>
                        <input type="file" name="lampiran" id="" class="form-control">
                        <text class="muted-text">Silahkan lampirkan proposal penawaran kerja sama, sponsorship dan
                            lainnya.</text>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-light" type="submit" id="form-submit"><i
                                class="fa fa-paper-plane"></i>&nbsp;Ajukan kolaborasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section>
    <div class="container" id="meetwithsarjanamalam">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Tanya dan Jawab</h3>
                <p>Pertanyaan yang sering diajukan ke kami terkait Partnership <span
                        class="text-gradient-blue-sarjana">Sarjanamalam</span></p>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>
                            Apa itu
                            Partnership Sarjamalam?
                        </h5>
                        <div style="" class="ac-content">Partnership Sarjanamalam adalah program kerja sama dan
                            sponsorship dari Sarjanamalam dengan feedback dan manfaat yang berguna bagi kedua belah
                            pihak dan telah dinegosiasi dari kedua partner baik itu dari pihak Sarjanamalam dan partner.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Siapa saja yang bisa bergabung dalam
                            program Partnership?</h5>
                        <div style="display: none;" class="ac-content">Sarjanamalam juga sedang dalam tahap perkembangan
                            yang berarti kami sangat terbuka untuk bisa memberikan peluang bagi siapa saja yang mau ikut
                            berkolaborasi dengan kami. Baik itu gabung dalam partnership kami ataupun gabung dalam tahap
                            pengembangan kami.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Apakah kami bisa bergabung dalam
                            Partnership hanya dalam bentuk dana?</h5>
                        <div style="display: none;" class="ac-content">Bisa! Perihal sponsorship dana akan didiskusikan
                            dengan tim redaksi lebih lanjut terkait dukungan yang diberikan.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Berapa lama jangka waktu kerja sama
                            yang telah diajukan?</h5>
                        <div style="display: none;" class="ac-content">Jangka waktu yang diberikan oleh Sarjanamalam
                            untuk saat ini merupakan jangka waktu yang fleksibel. Namun, kita sangat mendukung segala
                            program positif dan kami akan berusaha agar partner yang ingin bekerja sama tidak menunggu
                            terlalu lama.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Bagaimana cara mengundang Sarjanamalam
                            untuk menjadi pembicara?</h5>
                        <div class="ac-content" style="display: none;">Kamu bisa mengirimkan proposal atau mengajukan
                            acara kamu di formulir diatas dan melakukan konfirmasi ke email support@sarjanamalam yang
                            nantinya kami akan bantu rekomendasi pembicara dari pihak Sarjanamalam untuk hadir ke acara
                            anda.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Apakah saya wajib melampirkan
                            proposal?</h5>
                        <div class="ac-content" style="display: none;">Sarjanamalam merekomendasikan untuk melampirkan
                            proposal program penawaran kerjasama. Hal ini dikarenakan sarjanamalam akan melakukan riset
                            pengetahuan terlebih dahulu terkait proposal yang diajukan partner.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
