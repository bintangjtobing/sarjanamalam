@extends('authen.index')
@section('title','Blog management')
@section('aktifblog','active')
@section('content')
<div class="content">
    <div class="container-fluid">
        @if(session('sukses'))
        <div class="row my-1">
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Well done!</strong> {{session('sukses')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <div class="row mb-2">
            <div class="col-lg-1">
                <div class="card">
                    <div class="card-body">
                        <a href="" data-toggle="modal" data-target="#addblog">
                            <div class="card-title"><span style="font-size:2.5rem;"><i class="fas fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @if(!$blog->isEmpty())
            @foreach ($blog as $blogList)
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('file/img/blog/'.$blogList->coverimg)!!}"
                        alt="{{$blogList->blog_title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$blogList->blog_title}}</h5>
                        <p class="card-text">{!!str_limit($blogList->isiblog, $limit=60)!!}</p>
                        <div class="btn-group" role="group">
                            <a href="#" class="btn btn-primary" title="Lihat blog detail"><i class="fas fa-eye"></i></a>
                            <a href="#" title="Edit blog" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="/delete-blog/{{$blogList->blog_id}}" title="Delete blog" class="btn btn-danger"><i
                                    class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No data founded here.</p>
            @endif
        </div>
    </div>
</div>
<!-- Modal tambah blog -->
<div class="modal fade" id="addblog" tabindex="-1" role="dialog" aria-labelledby="addblog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addblog" style="color:#000;">Tambah berita penting baru dari sarjanamalam.
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/blog/tambah" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" style="color: #000;">Judul blog</label>
                            <input type="text" name="blog_title" class="form-control" id="judul"
                                placeholder="Masukkan judul berita" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #000;">Kategori blog</label>
                            <select name="kategori_blog" class="custom-select" id="kategori_blog" required>
                                <option value="Feature Update">Features Update</option>
                                <option value="What's happening?">What's happening?</option>
                                <option value="Meet with sarjanamalam.">Meet with sarjanamalam.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Ceritakan:</label>
                            <textarea name="isiblog" class="form-control" id="isiblog" cols="30" rows="8"
                                required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="" style="color: #000;">Masukkan gambar blog</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="coverimg" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Upload an image</label>
                                </div>
                            </div>
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
