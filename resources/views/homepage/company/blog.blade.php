@extends('homepage.company.about')
@section('title','Blog sarjanamalam.')
@section('metadesc','Temukan semua yang terbaru tentang produk, teknolog, budaya, update-an tentang aplikasi situs
sarjanamalam. kami di blog resmi kami.')
@section('metakey','blog sarjanamalam, blog, berita terbaru sarjanamalam,update sarjanamalam,tentang sarjanamalam')
@section('ogtype','article')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="page-title">
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="#">Tentang sarjanamalam.</a>
                    </li>
                    <li class="active"><a href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>


        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @if(!$blog->isEmpty())
            @foreach ($blog as $blist)
            <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
            <a href="/read-blog/{{$blist->blog_id}}/{{$tokens}}">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="/read-blog/{{$blist->blog_id}}/{{$tokens}}">
                                <img alt="{{$blist->blog_title}} image cover blog sarjanamalam"
                                    src="{!!asset('file/img/blog/'.$blist->coverimg)!!}">
                            </a>
                            <span class="post-meta-category"><a href="">{{$blist->kategori_blog}}</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i
                                    class="fa fa-calendar-o"></i>{{date('M d, Y',strtotime($blist->created_at))}}</span>
                            {{-- <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                    Comments</a></span> --}}
                            <h2>{{$blist->blog_title}}
                            </h2>
                            <p>{{str_limit($blist->isiblog, $limit=60)}}</p>
                            <a href="/read-blog/{{$blist->blog_id}}/{{$tokens}}" class="item-link">Read More <span
                                    class="ti-angle-right"></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </a>
            @else
            <p>No data loaded</p>
            @endif
        </div>


        <div id="pagination" class="infinite-scroll">
            <a href="#"></a>
        </div>

    </div>

</section>
@endsection
