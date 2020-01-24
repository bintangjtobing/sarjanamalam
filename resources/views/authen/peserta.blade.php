@extends('authen.index')
@section('title','Peserta terdaftar')
@section('aktifpeserta','active')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Peserta terdaftar</h3>
            </div>
            <!-- /.card-header -->
            <?php $i = 1; ?>
            <div class="card-body">
                <table id="tableJs" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width:10px;">#</th>
                            <th>Nama peserta</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Event yang diikuti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peopleget as $item)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item->nama_lengkap}}</td>
                            <td>{{$item->email}}
                            </td>
                            <td>{{$item->nohp}}</td>
                            <td>{{$item->reserved}}</td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="width:10px;">#</th>
                            <th>Subjek Threads</th>
                            <th>Threads</th>
                            <th>Pengirim</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
