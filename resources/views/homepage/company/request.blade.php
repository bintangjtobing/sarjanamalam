@extends('homepage.company.about')
@section('title','Request ad Event di sarjanamalam.')
@section('aktiftentang','active')
@section('metadesc','Event sarjanamalam. adalah suatu halaman yang berisi event event menarik dan bermanfaat yang akan
membekali calon sarjana. Seminar')
@section('metakey','event sarjanamalam, event, komunitas, forum, seminar sarjanamalam, seminar')
@section('content')
<section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="form-row">
                    @if(session('sukses'))
                    <div class="form-group col-md-12 m-b-5">
                        <div class="alert alert-success" role="alert">
                            <strong><i class="fas fa-bell"></i> Permintaan sharing event kamu berhasil
                                dikirim!</strong><br>{{session('sukses')}}
                            Terima
                            kasih.
                        </div>
                    </div>
                    @endif
                </div>
                <form action="/post-event" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>Informasi detail event</h3>
                    <div class="h5 mb-4">Mohon isi formulir event nya dengan lengkap dan jelaskan deskripsi event dengan
                        detail dan padat.<br>Agar kami tau bahwa event anda memang nyata dan kami pun dengan mudah
                        menyetujui permintaan tersebut.</div>
                    <div class="line"></div>
                    <h3>Informasi penanggung jawab</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nama penanggung jawab</label>
                            <input type="text" class="form-control" name="nama_pic"
                                placeholder="Masukkan nama penanggung jawab" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="surname">Email penanggung jawab</label>
                            <input type="email" class="form-control" name="email_pic" placeholder="Masukkan email"
                                required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="surname">Nomor yang bisa dihubungi</label>
                            <input type="text" class="form-control" name="nohp_pic" placeholder="Masukkan nomor telepon"
                                required>
                        </div>
                    </div>
                    <div class="line"></div>
                    <h3>Informasi detail event</h3>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Upload gambar poster/flyer</label>
                            <div class="fallback">
                                <input name="picevent" type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Nama event</label>
                            <input type="text" class="form-control" name="nama_event" placeholder="Masukkan nama event"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Deskripsi event</label>
                            <textarea name="deskripsi_event" id="" class="form-control" cols="30" rows="10"
                                placeholder="Masukkan deskripsi event dengan detail" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="gender">Kategori event</label>
                            <select aria-required="true" name="kategori_event"
                                class="form-control form-control-sm required ticket-type" required>
                                <option selected>Kategori Event</option>
                                <option value="Seminar">Seminar</option>
                                <option value="Workshop">Workshop</option>
                                <option value="Festival">Festival</option>
                                <option value="Olimpiade">Olimpiade</option>
                                <option value="Kompetisi">Kompetisi</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="gender">Tanggal event berlangsung</label>
                            <input class="form-control" type="date" name="tglevent" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="gender">Waktu event berlangsung</label>
                            <input class="form-control" type="time" name="waktu_event" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Provinsi">Provinsi</label>
                            <select name="provinsi" id="" class="custom-select" required>
                                <option value="ACEH">Aceh</option>
                                <option value="SUMATERA BARAT">Sumatera Barat</option>
                                <option value="SUMATERA UTARA">Sumatera Utara</option>
                                <option value="RIAU">Riau</option>
                                <option value="JAMBI">Jambi</option>
                                <option value="SUMATERA SELATAN">Sumatera Selatan</option>
                                <option value="BENGKULU">Bengkulu</option>
                                <option value="LAMPUNG">Lampung</option>
                                <option value="KEPULAUAN BANGKA BELITUNG">Bangka Belitung</option>
                                <option value="KEPULAUAN RIAU">Kep. Riau</option>
                                <option value="DKI JAKARTA">DKI Jakarta</option>
                                <option value="JAWA BARAT">Jawa Barat</option>
                                <option value="JAWA TENGAH">Jawa Tengah</option>
                                <option value="DI YOGYAKARTA">D.I Yogyakarta</option>
                                <option value="JAWA TIMUR">Jawa Timur</option>
                                <option value="BANTEN">Banten</option>
                                <option value="BALI">Bali</option>
                                <option value="NUSA TENGGARA BARAT">Nusa Tenggara Barat</option>
                                <option value="NUSA TENGGARA TIMUR">Nusa Tenggara Timur</option>
                                <option value="KALIMANTAN BARAT">Kalimantan Barat</option>
                                <option value="KALIMANTAN TENGAH">Kalimantan Tengah</option>
                                <option value="KALIMANTAN SELATAN">Kalimantan Selatan</option>
                                <option value="KALIMANTAN TIMUR">Kalimantan Timur</option>
                                <option value="KALIMANTAN UTARA">Kalimantan Utara</option>
                                <option value="SULAWESI UTARA">Sulawesi Utara</option>
                                <option value="SULAWESI TENGAH">Sulawesi Tengah</option>
                                <option value="SULAWESI SELATAN">Sulawesi Selatan</option>
                                <option value="SULAWESI TENGGARA">Sulawesi Tenggara</option>
                                <option value="GORONTALO">Gorontalo</option>
                                <option value="SULAWESI BARAT">Sulawesi Barat</option>
                                <option value="MALUKU">Maluku</option>
                                <option value="MALUKU UTARA">Maluku Utara</option>
                                <option value="PAPUA BARAT">Papua Barat</option>
                                <option value="PAPUA">Papua</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Kota</label>
                            <input type="text" name="kota" id="" class="form-control"
                                placeholder="Masukkan kota berlangsungnya event" required>
                            <small class="mute-text">*Kota yang dimasukkan bisa lebih dari 1</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Tempat berlangsungnya event</label>
                            <input type="text" class="form-control" name="tempat_event"
                                placeholder="Nama tempat berlangsungnya event" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Instansi / organisasi penyelenggara event</label>
                            <input type="text" class="form-control" name="speaker"
                                placeholder="Nama instansi / organisasi penyelenggara event" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Biaya event</label>
                            <select name="harga_event" class="custom-select" required>
                                <option selected>Pilih opsi:</option>
                                <option value="Gratis">Gratis (Tidak ada dana yang diperlukan)</option>
                                <option value="Berbayar">Berbayar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Catatan opsional</label>
                            <textarea name="optional_info" class="form-control" id="" cols="30" rows="5"
                                placeholder="Catatan opsional:"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary btn-md">Kirim request ad event!</button>
                        </div>
                    </div>
                </form>
                <div class="line"></div>

            </div>
        </div>
    </div>
</section>
<script>
    Dropzone.autoDiscover = false;
    //Form 1
    var form2 = $('#fileUpload1');
    form2.dropzone({
        url: "http://polo/files/post",
        addRemoveLinks: true,
        maxFiles: 1,
        maxFilesize: 10,
        acceptedFiles: "image/*",
    });
    //Form 2
    var form2 = $('#fileUpload2');
    form2.dropzone({
        url: "http://polo/files/post",
        maxFilesize: 5,
        acceptedFiles: "image/*",
        previewsContainer: "#formFiles2",
        previewTemplate: $("#formTemplate2").html(),
    });
    //Form 3
    var form3 = $('#fileUpload3');
    form3.dropzone({
        url: "http://polo/files/post",
        maxFilesize: 5,
        acceptedFiles: "image/*",
        previewsContainer: "#formFiles3",
        previewTemplate: $("#formTemplate3").html(),
        clickable: ".dropzone-attach-files"
    });

</script>
@endsection
