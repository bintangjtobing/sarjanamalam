@extends('homepage.company.about')
@section('title','Daftar event '. $eventdaf->nama_event)
@section('metadesc','Event sarjanamalam. adalah suatu halaman yang berisi event event menarik dan bermanfaat yang akan
membekali calon sarjana. Seminar')
@section('metakey','event sarjanamalam, event, komunitas, forum, seminar sarjanamalam, seminar, registrasi event')
@section('content')
<section class="registerevent-bg">
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
                    <h3>Sedikit lagi, kamu akan terdaftar di event ini!</h3>
                    <div class="h5 mb-4">Mohon isi biodata kamu untuk pendataan peserta event
                        <b>{{$eventdaf->nama_event}}</b>.
                    </div>
                    <div class="line"></div>
                    <div class="form-row">
                        <h3>Kilas balik Informasi event</h3>
                    </div>
                    <div class="line"></div>
                    <h3>Biodata peserta</h3>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name">Nama lengkap peserta</label>
                            <input type="text" class="form-control" name="nama_pic"
                                placeholder="Masukkan nama penanggung jawab" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="surname">Email aktif peserta</label>
                            <input type="email" class="form-control" name="email_pic" placeholder="Masukkan email"
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="surname">Nomor yang bisa dihubungi</label>
                            <input type="text" class="form-control" name="nohp_pic" placeholder="Masukkan nomor telepon"
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Dapat informasi event ini darimana?</label>
                            <select name="informasidari" id="" class="custom-select">
                                <option value="Sosial media sarjanamalam.">Sosial media sarjanamalam.</option>
                                <option value="Situs website sarjanamalam.">Situs website sarjanamalam.</option>
                                <option value="Media cetak/Koran/Majalah dll...">Media cetak/Koran/Majalah dll...
                                </option>
                                <option value="Sosial media lainnya...">Sosial media lainnya...</option>
                                <option value="Lain lain">Lain lain</option>
                            </select>
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
@endsection
