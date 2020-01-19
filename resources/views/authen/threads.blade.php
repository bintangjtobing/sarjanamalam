@extends('authen.index')
@section('title','Threads Management')
@section('aktifthreads','active')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <?php $i = 1; ?>
            <div class="card-body">
                <table id="tableJs" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width:10px;">#</th>
                            <th>Subjek Threads</th>
                            <th>Threads</th>
                            <th>Pengirim</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($threads as $item)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item->subject}}</td>
                            <td>{{str_limit($item->thread, $limit=70)}}
                            </td>
                            <td>{{$item->created_by}}</td>
                            <td><a href="/delete-threads/{{$item->id}}" class="btn btn-danger btn-sm"><i
                                        class="fas fa-trash"></i></a>
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
