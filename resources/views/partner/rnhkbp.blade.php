@extends('homepage.company.about')
@section('title','e-Forms RNHKBP GLUGUR')
@section('metadesc','Tempat registrasi ulang formulir keanggotaan dengan partner (RNHKBP GLUGUR)')
@section('metakey','formulir rnhkbpglugur, eform rnhkbpglugur')
@section('content')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@section('content')
<section>
    <div class="container">
        <div class="row m-b-30">
            <div class="col-lg-12">
                <h3><strong>e-Forms RNHKBP GLUGUR</strong></h3>
                <small>Formulir registrasi/daftar ulang keanggotaan Remaja Naposobulung HKBP GLUGUR tahun 2020.</small>
            </div>
        </div>
        <form action="/submit-eForms/{{$tokens}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Formulir</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="status_formulir" id="" class="custom-select">
                            <option value="Anggota Baru">Anggota Baru</option>
                            <option value="Daftar Ulang/Anggota Lama">Daftar Ulang/Anggota Lama</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Keanggotaan Bergereja</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="keanggotaan" class="custom-select" required>
                            <option value="-">-</option>
                            <option value="Asli Jemaat HKBP GLUGUR">Asli Jemaat HKBP GLUGUR</option>
                            <option value="Jemaat luar HKBP GLUGUR">Jemaat luar HKBP GLUGUR</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Nama Lengkap</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Tempat, Tanggal Lahir</b></p>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <select name="tempat_lahir" class="custom-select" required>
                            <option selected>-</option>
                            <option value="Medan">Medan
                            </option>
                            <option value="Jakarta">Jakarta
                            </option>
                            <option value="Surabaya">Surabaya
                            </option>
                            <option value="Makassar">Makassar
                            </option>
                            <option value="Palembang">Palembang
                            </option>
                            <option value="Riau">Riau
                            </option>
                            <option value="Pekanbaru">Pekanbaru
                            </option>
                            <option value="Lombok">Lombok
                            </option>
                            <option value="Bali">Bali
                            </option>
                            <option value="Semarang">Semarang
                            </option>
                            <option value="Batam">Batam
                            </option>
                            <option value="Papua">Papua
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="date" name="tanggal_lahir" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Sektor</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="sektor" class="custom-select" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="-">-</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Alamat domisili</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <textarea name="alamat" cols="30" rows="10" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Email</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Nomor HP</b><br>Contoh: 0812-xxxx-xxxx</p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="tel" name="nohp" class="form-control" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}"
                            required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Instagram</b><br>Gunakan hanya username, contoh: rnhkbpglugur</p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" name="instagram" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-t-30">
                    <h3>Saya yang bertanda tangan dibawah ini,</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="scroll-box">
                        <p>Bersedia mengikuti dan melaksanakan kegiatan yang telah dibentuk secara bersama didalam
                            organisasi Remaja dan Naposobulung HKBP Glugur.</p>
                        <p>Bersedia membayar uang iuran jika telah terdaftar sebagai keanggotaan sesuai dengan ketentuan
                            yang telah disepakati bersama sama
                            dengan Badan Pengurus Harian (BPH) maupun anggota Remaja dan Naposobulung HKBP Glugur.</p>
                        <p>Tidak memberikan biaya pada ke pihak manapun terkait dengan pendaftaran keanggotaan baru
                            maupun pendaftaran ulang ke dalam organisasi Remaja dan Naposobulung HKBP Glugur.</p>
                        <p>e-Forms ini dibuat oleh <b>Sarjanamalam. (PT KITA SARJANA MALAM)</b> dan selalu merekam
                            traffic pengguna jika melakukan aktifitas dalam situs ini.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <input type="checkbox" name="checkboxre" id="checkboxre" required> Saya bersedia.
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 text-right">
                    <button type="submit" class="btn btn-gradient-blue-sarjana">KIRIM DATA KAMU</button>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection
