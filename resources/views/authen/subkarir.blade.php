@extends('authen.index')
@section('title','Karir management')
@section('aktiftim','active')
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
                    <div class="modal fade" id="addnewteam" tabindex="-1" role="dialog" aria-labelledby="addnewteam"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addnewteam" style="color:#000;">Add a new team of career
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/tambah-karir-team" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" style="color: #000;">Nama team</label>
                                                <input type="text" name="nama_team" class="form-control" id=""
                                                    placeholder="Masukkan nama team">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" style="color: #000;">Penjelasan singkat:</label>
                                                <textarea name="description" placeholder="Deskripsi team"
                                                    class="form-control" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" style="color: #000;">Masukkan gambar tema tim</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="features_pic" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>
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
