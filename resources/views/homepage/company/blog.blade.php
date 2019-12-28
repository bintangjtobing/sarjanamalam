@extends('homepage.company.about')
@section('title','Blog sarjanamalam.')
@section('metadesc','Temukan semua yang terbaru tentang produk, teknolog, budaya, update-an tentang aplikasi situs
sarjanamalam. kami di blog resmi kami.')
@section('metakey','blog sarjanamalam, blog, berita terbaru sarjanamalam,update sarjanamalam,tentang sarjanamalam')
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

            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="{!!asset('storage/blog/12.jpg')!!}">
                        </a>
                        <span class="post-meta-category"><a href="">Lifestyle</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Standard post with a single image
                            </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-video">
                        <iframe width="560" height="320" src="https://www.youtube.com/embed/Z0zNRfZZMow" frameborder="0"
                            allowfullscreen></iframe>
                        <span class="post-meta-category"><a href="">Video</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">This is a example post with YouTube</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More </a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-slider">
                        <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true"
                            data-autoplay="true" data-lightbox="gallery">
                            <a href="{!!asset('storage/blog/11.jpg')!!}" data-lightbox="gallery-image">
                                <img alt="" src="{!!asset('storage/blog/16.jpg')!!}">
                            </a>
                            <a href="{!!asset('storage/blog/16.jpg')!!}" data-lightbox="gallery-image">
                                <img alt="" src="{!!asset('storage/blog/11.jpg')!!}">
                            </a>
                        </div>
                        <span class="post-meta-category"><a href="">Technology</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet. Pulvinar euismod antesagittis ante
                            posuere ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-video">
                        <iframe src="https://player.vimeo.com/video/198559065?title=0&byline=0&portrait=0" width="560"
                            height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen></iframe>
                        <span class="post-meta-category"><a href="">Video</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">This is a example post with Vimeo video</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.
                            Cagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id
                            ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-audio">
                        <a href="#">
                            <img alt="" src="{!!asset('storage/blog/audio-bg.jpg')!!}">
                        </a>
                        <span class="post-meta-category"><a href="">Audio</a></span>
                        <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                            <source src="audio/beautiful-optimist.mp3" type="audio/mp3" />
                        </audio>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="{!!asset('storage/blog/17.jpg')!!}">
                        </a>
                        <span class="post-meta-category"><a href="">Science</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Standard post with a single image
                            </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.
                        </p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="{!!asset('storage/blog/18.jpg')!!}">
                        </a>
                        <span class="post-meta-category"><a href="">Science</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Standard post with a single image
                            </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-slider">
                        <div class="carousel dots-inside arrows-visible arrows-only" data-autoplay="2600"
                            data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true"
                            data-autoplay="true" data-lightbox="gallery">
                            <a href="{!!asset('storage/blog/19.jpg')!!}" data-lightbox="gallery-image">
                                <img alt="" src="{!!asset('storage/blog/19.jpg')!!}">
                            </a>
                            <a href="{!!asset('storage/blog/20.jpg')!!}" data-lightbox="gallery-image">
                                <img alt="" src="{!!asset('storage/blog/20.jpg')!!}">
                            </a>
                        </div>
                        <span class="post-meta-category"><a href="">Technology</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="{!!asset('storage/blog/14.jpg')!!}">
                        </a>
                        <span class="post-meta-category"><a href="">Lifestyle</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Standard post with a single image
                            </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                            porta feugiat.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>

        </div>


        <div id="pagination" class="infinite-scroll">
            <a href="#"></a>
        </div>

    </div>

</section>
@endsection
