@extends('authen.index')
@section('title','Event Event')
@section('aktifevent','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-9 text-left">
                <div class="btn-group">
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #007bff"><i class="fas fa-circle"></i></span> Event sedang berjalan
                    </a>
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #28a745"><i class="fas fa-circle"></i></span> Event telah disetujui untuk
                        diterbitkan
                    </a>
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #dc3545"><i class="fas fa-circle"></i></span> Event ditolak
                    </a>
                    <a class="btn btn-default btn-sm" href="#">
                        <span style="color: #ffc107"><i class="fas fa-circle"></i></span> Event minta persetujuan
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-default btn-sm" href="" data-toggle="modal" data-target="#addnewteam">
                        <span><i class="fas fa-plus"></i></span> Tambah event
                    </a>
                </div>
            </div>
        </div>
        @if(session('sukses'))
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{session('sukses')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            @if(!$event->isEmpty())
            @foreach ($event as $evnt)
            <div class="col-lg-3 col-6">
                <div class="small-box
                @if($evnt->status=='unapproved')bg-warning
                @elseif($evnt->status=='running')bg-info
                @elseif($evnt->status=='declined')bg-danger
                @else
                bg-success
                @endif">
                    <div class="inner">
                        <h4>{{$evnt->nama_event}}</h4>
                        <p>Kategori event: <b>{{$evnt->kategori_event}}</b><br>Status: <b>{{$evnt->status}}</b></p>
                    </div>
                    @if($evnt->status!='finished')
                    <a href="/detail-event/{{$evnt->event_id}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                    @else
                    <a href="/detail-event/{{$evnt->event_id}}" class="small-box-footer"><b>Event ini telah
                            selesai</b></a>
                    @endif
                </div>
            </div>
            @endforeach
            @else
            <div class="col-lg-12 text-center my-3">
                <h3>No data loaded.</h3>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="addnewteam" tabindex="-1" role="dialog" aria-labelledby="addnewteam" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewteam" style="color:#000;">Tambah event secara manual.
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/tambah-event" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Dibuat oleh</label>
                            <input type="text" name="nama_pic" class="form-control" value="{{auth()->user()->name}}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Masukkan gambar flyer/poster</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="picevent" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" style="color: #000;">Nama event</label>
                            <input type="text" name="nama_event" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #000;">Kategori event</label>
                            <select aria-required="true" name="kategori_event" class="custom-select" required>
                                <option selected>Kategori Event</option>
                                <option value=" Seminar">Seminar</option>
                                <option value="Workshop">Workshop</option>
                                <option value="Festival">Festival</option>
                                <option value="Olimpiade">Olimpiade</option>
                                <option value="Kompetisi">Kompetisi</option>
                            </select>
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
                            <label for="gender">Tanggal event berlangsung</label>
                            <input class="form-control" type="date" name="tglevent" required>
                        </div>
                        <div class="form-group col-md-6">
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
                        <div class="form-group col-md-4">
                            <label for="">Tempat berlangsungnya event</label>
                            <input type="text" class="form-control" name="tempat_event"
                                placeholder="Nama tempat berlangsungnya event" required>
                        </div>
                        <div class="form-group col-md-6">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
