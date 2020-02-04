@extends('homepage.company.about')
@section('title',$blog->blog_title.' - Blog sarjanamalam.')
@section('metadesc','Temukan semua yang terbaru tentang produk, teknolog, budaya, update-an tentang aplikasi situs
sarjanamalam. kami di blog resmi kami.')
@section('metakey','blog sarjanamalam, blog, berita terbaru sarjanamalam,update sarjanamalam,tentang sarjanamalam,
'.$blog->blog_title)
@section('ogtype','article')
@section('content')
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">

            <div class="content col-lg-9">

                <div id="blog" class="single-post">

                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{!!asset('file/blog/'.$blog->coverimg)!!}">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2>{{$blog->blog_title}}</h2>
                                {{-- <div class="post-meta">
                                    <span class="post-meta-date"><i
                                            class="fa fa-calendar-o"></i>{{date('M d, Y',strtotime($blog->created_at))}}</span>

                                <span class="post-meta-category"><a href=""><i
                                            class="fa fa-tag"></i>{{$blog->kategori_blog}}</a></span>
                                <div class="post-meta-share">
                                    <a class="btn btn-xs btn-slide btn-facebook fb-share-button"
                                        data-href="{{Request::url()}}" data-layout="button_count">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div> --}}
                            <p>{!!$blog->isiblog!!}</p>
                        </div>
                        {{-- <div class="post-tags">
                                <a href="#">Life</a>
                                <a href="#">Sport</a>
                                <a href="#">Tech</a>
                                <a href="#">Travel</a>
                            </div> --}}
                        {{-- <div class="respond-form" id="respond">
                                <div class="respond-comment">
                                    Leave a <span>Comment</span></div>
                                <form class="form-gray-fields">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="name">Name</label>
                                                <input class="form-control required" name="senderName"
                                                    placeholder="Enter name" id="name" aria-required="true" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="email">Email</label>
                                                <input class="form-control required email" name="senderEmail"
                                                    placeholder="Enter email" id="email" aria-required="true"
                                                    type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="website">Website</label>
                                                <input class="form-control website" name="senderWebsite"
                                                    placeholder="Enter Website" id="website" aria-required="false"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="upper" for="comment">Your comment</label>
                                                <textarea class="form-control required" name="comment" rows="9"
                                                    placeholder="Enter comment" id="comment"
                                                    aria-required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group text-center">
                                                <button class="btn" type="submit">Submit Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
@endsection
