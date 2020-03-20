@extends('homepage.company.about')
@section('title','Sarjanamalam Peduli Sehat.')
@section('metadesc','Cek info tentang covid-19 di Indonesia.')
@section('metakey','Covid-19 Indonesia, Sarjanamalam sehat, Sarjanamalam peduli sehat')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1584687818/based/covid-3_zc2hex.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">SIAP SIAGA COVID-19 INDONESIA<br><b>Case Fatality Rate: 4.2%</b></span>
                <h1>UPDATE PER 20 MARET 2020 (GLOBAL)</h1>

            </div>
        </div>
    </div>

</div>
<section>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:2rem; margin-bottom:7rem !important;">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="309" data-from="0"></span></div>
                    <h3>POSITIF <span class="text-gradient-blue-sarjana">COVID-19</span></h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="15" data-from="0"></span>
                    </div>
                    <h3>SEMBUH</h3>
                </div>

            </div>
            <div class="col-md-4">

                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="25" data-from="0"></span>
                    </div>
                    <h3>Meninggal</h3>
                </div>

            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="1898" data-from="0"></span></div>
                    <h3>JUMLAH ORANG YANG <span class="text-gradient-blue-sarjana">DIPERIKSA</span></h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="1570" data-from="0"></span>
                    </div>
                    <h3>NEGATIF <span class="text-gradient-blue-sarjana">COVID-19</span></h3>
                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>INFO TERBARU <span class="text-gradient-blue-sarjana">COVID-19</span></h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <?php $date=date('d M Y') ?>
                        <h2>{{$date}}</h3>
                    </div>
                    <div class="col-lg-8">
                        <ul>
                            <li>
                                <h5>Wabah Corona Renggut nyaris 10 Ribu jiwa, BNPB kembali ingatkan jaga jarak (Sumber:
                                    Detik)</h5>
                            </li>
                            <li>
                                <h5>Ma'ruf Amin imbau mudik lebaran diganti silaturahmi lewat media sosial (Sumber: IDN
                                    Times)</h5>
                            </li>
                            <li>
                                <h5>Traveler Indonesia diimbau segera pulang dan batasi pergi ke luar negeri (Sumber:
                                    Kompas.com)</h5>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>FAKTA <span class="text-gradient-blue-sarjana">COVID-19</span></h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">

                        <ul>
                            <li>
                                <h4>Menular lewat cairan ludah, bersin, batuk</h4>
                            </li>
                            <li>
                                <h4>Melalui kontak jarak dekat</h4>
                            </li>
                            <li>
                                <h4>Menular dari sentuhan barang terkontaminasi</h4>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <div class="row my-4">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>SIAPA AJA <span class="text-gradient-blue-sarjana">YANG RENTAN</span></h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">

                        <ul>
                            <li>
                                <h4>Usia lanjut (>40 tahun)</h5>
                            </li>
                            <li>
                                <h4>Punya riwayat darah tinggi, kanker, diabetes, jantung dan paru-paru</h4>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <div class="row my-4">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>JANGAN PANIK. <span class="text-gradient-blue-sarjana">CEGAH DENGAN INI</span></h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">

                        <ul>
                            <li>
                                <h4>Hindari menyentuh mata, hidung, mulut</h5>
                            </li>
                            <li>
                                <h4>Cuci tangan kurang lebih dari 20 detik pakai air, sabun, atau hand sanitizer</h4>
                            </li>
                            <li>
                                <h4>Hindari keramaian</h4>
                            </li>
                            <li>
                                <h4>Bersihkan gadget dengan tisu alkohol</h4>
                            </li>
                            <li>
                                <h4>Memakai alat makan pribadi</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="row my-4">
            <div class="col-lg-5">
                <div class="heading-text heading-section">
                    <h2>LANGKAH SAAT <span class="text-gradient-blue-sarjana">KAMU TERINFEKSI</span></h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">

                        <ul>
                            <li>
                                <h4>Kenakan masker dengan benar</h5>
                            </li>
                            <li>
                                <h4>Pakai tisu jika bersin/batuk</h4>
                            </li>
                            <li>
                                <h4>Tidak beraktifitas di keramaian</h4>
                            </li>
                            <li>
                                <h4>Hindari kontak fisik dengan orang</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="heading-text heading-section">
                    <h2>LANGKAH SAAT <span class="text-gradient-blue-sarjana">SEKITARMU TERINFEKSI</span></h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">

                        <ul>
                            <li>
                                <h4>Segera hubungi pusat kesehatan jika ada yang mengalami bersin, batuk, demam >37.4
                                    derajat, Sakit tenggorokan, Sesak nafas.</h5>
                            </li>
                            <li>
                                <h4>Pakai masker jika berhadapan dengan anggota keluarga yang sakit</h4>
                            </li>
                            <li>
                                <h4>Bersihkan area rumah setiap hari</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section style="padding:0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Sumber: <b>Center for Disease Control and Prevention & World Health Organization</b></p>
            </div>
        </div>
    </div>
</section>

@endsection
