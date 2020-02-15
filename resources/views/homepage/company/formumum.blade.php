@extends('homepage.company.about')
@section('title','Form pendaftaran umum '.$karir->nama_subcareer.' - Sarjanamalam')
@section('metadesc','Form pendaftaran umum '.$karir->nama_subcareer.' - Sarjanamalam')
@section('metakey','karir, karir sarjanamalam, jobs, pekerjaan di sarjamalam, lowongan kerja, lowongan di sarjanamalam,
sarjanamalam karir')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
<?php $enc_karirid = base64_encode($karir->subcareer_id) ?>
@section('content')
<section>
    <div class="container">
        <div class="row m-b-30">
            <div class="col-lg-12">
                <p class="breadcumb-form"><a href="/tentang-sarjana-malam">Tentang</a> <span
                        style="font-size:0.55rem;"><i class="fas fa-circle mx-2"></i></span> <a
                        href="/karir-sarjanamalam"> Karir</a> <span style="font-size:0.55rem;"><i
                            class="fas fa-circle mx-2"></i></span> <a
                        href="/detail-pekerjaan/{{$enc_karirid}}/{{$tokens}}"> {!!$karir->nama_subcareer!!}</a> <span
                        style="font-size:0.55rem;"><i class="fas fa-circle mx-2"></i></span> <a href="">
                        Form Pendaftaran
                        Umum</a></p>
                <h3><strong>FORMULIR PENDAFTARAN</strong></h3>
            </div>
        </div>
        <form action="/apply-form-job/{{$tokens}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Posisi</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" class="form-control" name="posisi" value="{!!$karir->nama_subcareer!!}"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Sumber informasi lowongan</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="sumber_informasi" class="custom-select" required>
                            <option value="-">-</option>
                            <option value="Iklan SMS">Iklan SMS</option>
                            <option value="Top Karir">Top Karir</option>
                            <option value="Linkedin">Linkedin</option>
                            <option value="Line Jobs">Line Jobs</option>
                            <option value="Jobstreet">Jobstreet</option>
                            <option value="Kalibrr">Kalibrr</option>
                            <option value="Jobs.id">Jobs.id</option>
                            <option value="Teman / Keluarga">Teman / Keluarga</option>
                            <option value="Poster / Flyer / Informasi Universitas">Poster / Flyer / Informasi
                                Universitas</option>
                            <option value="Informasi Social Media (WA, FB, Instagram, dll)">Informasi Social Media (WA,
                                FB, Instagram, dll)</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Kota seleksi</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="kota" class="custom-select" required>
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
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Nama lengkap</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" name="nama_lengkap" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>No KTP</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" name="noktp" class="form-control" pattern="[0-9]{16}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Tempat, Tanggal Lahir</b></p>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input type="text" name="tempat_lahir" placeholder="Tempat lahir" class="form-control" required>
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
                    <p><b>Jenis kelamin</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="jenis_kelamin" class="custom-select" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Agama</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="agama" class="custom-select" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kong Hu Cu">Kong Hu Cu</option>
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
                        <textarea name="alamat_domisili" cols="30" rows="10" required></textarea>
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
                    <p><b>Status perkawinan</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="status_perkawinan" class="custom-select" required>
                            <option value="Lajang">Lajang</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p><b>Pendidikan terakhir</b></p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="pendidikan_akhir" class="custom-select" required>
                            <option value="SMP/SMA/SMK/SMU">SMP/SMA/SMK/SMU</option>
                            <option value="Akademi">Akademi</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="D1/D2/D3">D1/D2/D3</option>
                            <option value="Pasca">Pasca</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-10">
                    <div class="form-group">
                        <p><b>Ceritakan kepada kami, mengapa kami harus menerima kamu?</b></p>
                        <textarea name="about" cols="30" rows="10" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 text-right">
                    <button type="submit" class="btn btn-gradient-blue-sarjana">KIRIM LAMARAN</button>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection
