@extends('authen.index')
@section('title','Karir management')
@section('aktifkarir','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        @if(session('sukseskarir'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Well done!</strong> {{session('sukseskarir')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay">
                        <a href="" data-toggle="modal" data-target="#addnewteam"><i class="fas fa-3x fa-plus"></i></a>
                    </div>
                    <!-- end loading -->
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="addnewteam" tabindex="-1" role="dialog"
                        aria-labelledby="addnewteam" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addnewteam" style="color:#000;">Tambah bagian pekerjaan
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/tambah-subkarir" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="" style="color: #000;">Nama bagian pekerjaan</label>
                                                <input type="text" name="nama_subcareer" class="form-control" id=""
                                                    placeholder="Masukkan nama bagian pekerjaan" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" style="color: #000;">Tim bagian:</label>
                                                <select name="career_id" id="" class="custom-select" required>
                                                    <option selected>Pilih bagian tim:</option>
                                                    @foreach ($karir as $karirname)
                                                    <option value="{{$karirname->career_id}}">{{$karirname->nama_team}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="" style="color: #000;">Penjelasan singkat:</label>
                                                <textarea name="deskripsi" placeholder="Tentang pekerjaan"
                                                    class="form-control" id="" cols="30" rows="5" required></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" style="color: #000;">Minimal kualifikasi</label>
                                                <textarea name="minimal_kualifikasi"
                                                    placeholder="Sebutkan minimal kualifikasi" id="" cols="30" rows="5"
                                                    class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="" style="color: #000;">Kualifikasi yang
                                                    direkomendasikan</label>
                                                <textarea name="kualifikasi_rekomendasi"
                                                    placeholder="Sebutkan kualifikasi yang direkomendasikan" cols="30"
                                                    rows="4" class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" style="color: #000;">Tanggung jawab posisi ini</label>
                                                <textarea name="tanggung_jawab"
                                                    placeholder="Sebutkan kualifikasi yang direkomendasikan" cols="30"
                                                    rows="4" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" style="color: #000;">Lokasi</label>
                                                <input type="text" name="lokasi"
                                                    placeholder="Sebutkan lokasi bagian pekerjaan" id=""
                                                    class="form-control" required>
                                                <small style="color: #000;" class="mute-text">Lokasi bisa lebih dari
                                                    2.</small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner">
                        <h3>Tambah bagian karir?</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Tambah bagian karir <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            @foreach ($subkarir as $subkarirlst)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4><b>{{$subkarirlst->nama_subcareer}}</b></h4>

                        <p>{{$subkarirlst->deskripsi}}</p>
                    </div>
                    <a href="/subkarir-info/{{$subkarirlst->subcareer_id}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
