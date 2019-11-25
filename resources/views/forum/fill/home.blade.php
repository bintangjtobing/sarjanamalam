@extends('forum.layouts.frontpage')
@section('title',':: Home')
@section('content')
<div class="row">
    <div class="col-lg-8 col-xs-12 col-md-8">
        <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
        <div class="pull-left">
            <ul class="paginationforum">
                <li class="hidden-xs"><a href="#">1</a></li>
                <li class="hidden-xs"><a href="#">2</a></li>
                <li class="hidden-xs"><a href="#">3</a></li>
                <li class="hidden-xs"><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#" class="active">7</a></li>
                <li><a href="#">8</a></li>
                <li class="hidden-xs"><a href="#">9</a></li>
                <li class="hidden-xs"><a href="#">10</a></li>
                <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                <li><a href="#">1586</a></li>
            </ul>
        </div>
        <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
        <div class="clearfix"></div>
    </div>
</div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status green">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon1.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your
                            prerogative.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            560
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->


            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status red">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon3.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon5.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon6.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The
                            sample ad, which you can see below.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            89
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 15 min</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->


            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status red">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon2.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine
                            Publishers Association.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            456
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 2 days</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->


            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status yellow">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon1.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon6.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">Pinterest Now Worth $3.8 Billion</a></h2>
                        <p>Pinterest's valuation is closing in on $4 billion after its latest funding round of $225
                            million, according to a report.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            78
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->



            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status green">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon1.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your
                            prerogative.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            560
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->


            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status red">&nbsp;</div>
                        </div>
                        <div class="icons">
                            <img src="{{asset('storage/icon/icon3.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon5.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon6.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The
                            sample ad, which you can see below.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            89
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 15 min</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->


            <!-- POST -->
            <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            <div class="status red">&nbsp;</div>
                        </div>

                        <div class="icons">
                            <img src="{{asset('storage/icon/icon2.png')}}" alt="" /><img
                                src="{{asset('storage/icon/icon4.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine
                            Publishers Association.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            456
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 2 days</div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->

        </div>
        @endsection
