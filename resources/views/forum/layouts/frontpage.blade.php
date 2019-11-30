<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sarjanamalam Forum :: @yield('title')</title>
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="{{asset('/css/forum/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom -->
    <link href="{{asset('/css/forum/forum.css')}}" rel="stylesheet">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/forum/style.css')}}" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/forum/settings.css')}}" media="screen" />

</head>

<body>

    <div class="container-fluid">

        <!-- Slider -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('storage/img/banner.jpg')}}" alt="slidebg1" data-bgfit="cover"
                            data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Slider -->
        <?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>
        <div class="headernav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="/forum/{{$tokens}}"><img
                                src="{{asset('storage/icon/logoforum.png')}}" alt="" /></a></div>
                    <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                        {{-- <div class="dropdown">
                            <a data-toggle="dropdown" class="amenu" href="#">Title <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                        <div class="wrap">
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt"><input type="text" class="form-control"
                                        placeholder="Search Topics"></div>
                                <div class="pull-right"><button class="btn btn-default" type="button"><i
                                            class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                        <div class="stnt pull-left">

                            <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
                            <form action="/add-new-topic/{{$tokens}}" method="get" class="form">
                                <button class="btn btn-primary">Start New Topic</button>
                            </form>
                        </div>
                        <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                        <div class="avatar pull-left dropdown">
                            <a data-toggle="dropdown" href="#"><img src="{{asset('storage/img/user.jpg')}}"
                                    alt="avatar"><b class="caret"></b></a>
                            <div class="status green">&nbsp;</div>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="/{{Auth()->user()->username}}"
                                        role="menuitem"><strong>{{auth()->user()->name}}</strong></a></li>
                                {{ csrf_field() }}
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="/{{Auth()->user()->username}}">My
                                        Profile</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-3"
                                        href="/logout/{{auth()->user()->id}}{{$tokens}}">Log Out</a></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 breadcrumbf">
                        <a href="#">Sarjanamalam</a> <span class="diviver">&gt;</span> <a href="#">@yield('title')</a>
                    </div>
                </div>

                @yield('content')
                <div class="col-lg-4 col-md-4">

                    <!-- -->
                    <div class="sidebarblock">
                        <h3>Categories</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <ul class="cats">
                                <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                                <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a>
                                </li>
                                <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a>
                                </li>
                                <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- -->
                    <div class="sidebarblock">
                        <h3>Poll of the Week</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <p>Which game you are playing this week?</p>
                            <form action="#" method="post" class="form">
                                <table class="poll">
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color1" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                    Call of Duty Ghosts
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt1" type="radio" name="opt" value="1">
                                            <label for="opt1"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color2" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                    Titanfall
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt2" type="radio" name="opt" value="2" checked>
                                            <label for="opt2"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color3" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                    Battlefield 4
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt3" type="radio" name="opt" value="3">
                                            <label for="opt3"></label>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <p class="smal">Voting ends on 19th of October</p>
                        </div>
                    </div>

                    <!-- -->
                    <div class="sidebarblock">
                        <h3>My Active Threads</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                        </div>
                    </div>


                </div>
            </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
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


    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img
                            src="{{asset('storage/icon/logoforum.png')}}" alt="" /></a></div>
                <div class="col-lg-8 col-xs-9 col-sm-5 ">&copy; Copyrights 2019 <a href="/">Sarjanamalam</a></div>
                <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                    <ul class="socialicons">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>


    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{asset('/js/forum/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/forum/jquery.themepunch.revolution.min.js')}}"></script>

    <script src="{{asset('/js/forum/bootstrap.min.js')}}"></script>


    <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
    <script type="text/javascript">
        var revapi;

        jQuery(document).ready(function () {
            "use strict";
            revapi = jQuery('.tp-banner').revolution({
                delay: 15000,
                startwidth: 1200,
                startheight: 278,
                hideThumbs: 10,
                fullWidth: "on"
            });

        }); //ready

    </script>

    <!-- END REVOLUTION SLIDER -->
</body>

</html>
