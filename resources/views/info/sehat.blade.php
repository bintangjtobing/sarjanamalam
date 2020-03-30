@extends('homepage.company.about')
@section('title','Sarjanamalam Peduli Sehat.')
@section('metadesc','Cek info tentang covid-19 di Indonesia.')
@section('metakey','Covid-19 Indonesia, Sarjanamalam sehat, Sarjanamalam peduli sehat')
@section('content')
<?php $date=date('d M Y') ?>
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1584687818/based/covid-3_zc2hex.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">SIAP SIAGA COVID-19 INDONESIA<br><b>Case Fatality Rate: 4.6%</b></span>
                <h1>UPDATE PER {{$date}} (GLOBAL)</h1>

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
                        <span data-suffix="" data-to="1285" data-from="1155"></span></div>
                    <h3>POSITIF <span class="text-gradient-blue-sarjana">COVID-19</span></h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="64" data-from="59"></span>
                    </div>
                    <h3>SEMBUH</h3>
                </div>

            </div>
            <div class="col-md-4">

                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="114" data-from="102"></span>
                    </div>
                    <h3>Meninggal</h3>
                </div>

            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="6266" data-from="5755"></span></div>
                    <h3>JUMLAH ORANG YANG DIPERIKSA</span></h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="" data-to="5111" data-from="4729"></span>
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
                <div class="">
                    <h2>INFO TERBARU <span class="text-gradient-blue-sarjana">COVID-19</span></h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">

                        <h2>{{$date}}</h3>
                    </div>
                    <div class="col-lg-8">
                        <ul>
                            <li>
                                <h5>Update Virus Corona di Dunia: Dikonfirmasi <b>202 Negara</b>, <b>721.412 Orang
                                        Terinfeksi</b>,
                                    <b>151.005 Sembuh</b></h5><br>
                                <p>Menurut data&nbsp;<em>Worldometers,</em>&nbsp;ada sebanyak 202 negara yang telah
                                    mengonfirmasi kasus positif Covid-19.</p>
                                <p><b>Sementara, angka kasusnya tercatat 721.412 kasus yang terkonfirmasi, dengan 33.956
                                        orang meninggal dunia, dan 151.005 pasien sembuh.</b></p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-12">
                <h4>Data Kasus COVID-19 di Indonesia</h4>
                <p>Informasi diupdate berdasarkan konfirmasi resmi <a
                        href="https://www.covid19.go.id/situasi-virus-corona/" target="/_blank">Badan Nasional
                        Penanggulangan Bencana</a> tahun 2020.</p>
                <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Provinsi</th>
                            <th>Total kasus</th>
                            <th>Sembuh</th>
                            <th>Total Kematian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DKI Jakarta</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">675</td>
                            <td style="font-weight: bold; text-align:center;">45</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">68</td>
                        </tr>
                        <tr>
                            <td>Jawa Barat</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">149</td>
                            <td style="font-weight: bold; text-align:center;">6</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">19</td>
                        </tr>
                        <tr>
                            <td>Banten</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">106</td>
                            <td style="font-weight: bold; text-align:center;">1</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">4</td>
                        </tr>
                        <tr>
                            <td>Jawa Timur</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">90</td>
                            <td style="font-weight: bold; text-align:center;">11</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">7</td>
                        </tr>
                        <tr>
                            <td>Jawa Tengah</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">63</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">7</td>
                        </tr>
                        <tr>
                            <td>Sulawesi Selatan</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">47</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">1</td>
                        </tr>
                        <tr>
                            <td>Daerah Istimewa Yogyakarta</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">22</td>
                            <td style="font-weight: bold; text-align:center;">1</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">2</td>
                        </tr>
                        <tr>
                            <td>Kalimantan Timur</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">17</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Bali</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">10</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">2</td>
                        </tr>
                        <tr>
                            <td>Papua</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">9</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sumatera Utara</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">8</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">1</td>
                        </tr>
                        <tr>
                            <td>Kalimantan Barat</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">8</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Kalimantan Tengah</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">7</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Aceh</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">5</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sumatera Barat</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">5</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Kepulauan Riau</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">5</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">1</td>
                        </tr>
                        <tr>
                            <td>Lampung</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">4</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sulawesi Tenggara</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">3</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Riau</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sumatera Selatan</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Nusa Tenggara Barat</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Kalimantan Utara</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sulawesi Utara</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sulawesi Tengah</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Papua Barat</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">2</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Jambi</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">1</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Kalimantan Selatan</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">1</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Sulawesi Barat</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">1</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Maluku</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">1</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                        <tr>
                            <td>Maluku Utara</td>
                            <td style="font-weight: bold; text-align:center;background-color:#FFEEAA;">1</td>
                            <td style="font-weight: bold; text-align:center;">0</td>
                            <td style="font-weight: bold; text-align:center;background-color:red; color:white">0</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Provinsi</th>
                            <th>Total kasus</th>
                            <th>Sembuh</th>
                            <th>Total Kematian</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-3">
                <div class="">
                    <h2>FAKTA<br><span class="text-gradient-blue-sarjana">COVID-19</span></h2>
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
        <div class="row my-5">
            <div class="col-lg-3">
                <div class="">
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
        <div class="row my-5">
            <div class="col-lg-3">
                <div class="">
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
        <div class="row my-5">
            <div class="col-lg-5">
                <div class="">
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
                <div class="">
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
