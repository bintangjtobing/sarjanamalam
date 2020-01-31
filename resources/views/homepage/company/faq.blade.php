@extends('homepage.company.about')
@section('title','F.A.Q - Sarjanamalam')
@section('metadesc','Frequently Asked Question atau pertanyaan yang sering muncul di lingkungan sarjanamalam.')
@section('metakey','faq, qna, pertanyaan, mau nanya sarjanamalam, tanya jawab sarjanamalam, faq sarjanamalam')
@section('content')
<section>
    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
    <div class="container" id="meetwithsarjanamalam">
        <div class="row m-b-40">
            <div class="col-lg-12 text-center">
                <h3>Frequently Asked Question</h3>
                <p>Pertanyaan yang sering diajukan ke kami terkait <span
                        class="text-gradient-blue-sarjana">Sarjanamalam</span></p>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3>Pertanyaan umum</h3>
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>
                            Apa itu Sarjanamalam?
                        </h5>
                        <div style="" class="ac-content">Sarjanamalam adalah platform yang tepat untuk kamu yang mencari
                            dan menyediakan wadah untuk menambah relasi yang mempunyai satu kesamaan.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>
                            Bagaimana cara menjadi keanggotaan Sarjanamalam.
                        </h5>
                        <div style="" class="ac-content">Sangat mudah. Kamu hanya mendaftar pada formulir yang telah
                            disediakan, atau klik <a href="/daftar/{{$tokens}}">disini</a>. Daftar dan verifikasikan
                            email
                            kamu untuk membuktikan bahwa akun tersebut
                            tidaklah palsu.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>
                            Cara menambahkan postingan di forum
                        </h5>
                        <div style="" class="ac-content">Setelah kamu telah mendaftar sebagai keanggotaan di
                            Sarjanamalam. Kamu telah dapat menerbitkan pembahasan ataupun merespon pembahasan yang telah
                            terbit di forum tersebut.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h3>Program Partnership</h3>
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>
                            Apa itu
                            Partnership Sarjanamalam?
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
