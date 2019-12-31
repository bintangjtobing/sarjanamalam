@extends('dashboard.master')
@section('title','Dashboard Sarjanamalam - Blog')
@section('desc_subpage','Halaman untuk posting berita terbaru dari sarjanamalam.')
@section('faicon','fa-plus')
@section('modals','addblog')
@section('btncreate','blog')
@section('linkbtncreate','/addblog/{{$tokens}}')
@section('content')
@if(session('sukses'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>{{session('sukses')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="row">
    <?php $i=1;?>
    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
    <div class="col-md-12 col-lg 6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Blog Queue</h5>
                <table id="userverified" class="mb-0 table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul blog</th>
                            <th>Isi blog</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($blogList->isNotEmpty())
                        @foreach ($blogList as $blog)
                        <tr>
                            <td scope="row">{{$i++}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td>{{$blog->isiblog}}</td>
                            <td>{{$blog->created_by}}</td>
                            <td>{{$blog->kategori_blog}}</td>
                            <td>
                                <a href="/view/{{$blog->blog_id}}/{{$tokens}}">
                                    <span>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-success">
                                            <i class="fas fa-eye btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                                <a href="/delete/{{$blog->blog_id}}/{{$tokens}}">
                                    <span>
                                          <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                            <i class="far fa-trash-alt btn-icon-wrapper"></i>
                                        </button>
                                    </span>
                                </a>
                            </td>
                            @endforeach
                            @else
                            <td colspan="6" class="text-center">No data found!</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#userverified').DataTable({
            scrollY: 300,
        });
    });

</script>
@endsection
