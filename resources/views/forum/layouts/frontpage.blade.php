@inject('userMod', 'App\UserMod')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sarjanamalam Forum :: @yield('title')</title>
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <meta name="title" content="Sarjanamalam Forum :: @yield('title')">
    <meta name="description"
        content="Complex search engine, includinpg discussions in the community system. Sarjanamalam can help you in your lectures and daily activities.">
    <meta name="keywords" content="sarjanamalam, sarjana, malam, forum sarjana, forum sarjana malam, forum,">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="title" content="Sarjanamalam Forum">
    <meta name="description"
        content="Complex search engine, including discussions in the community system. Sarjanamalam can help you in your lectures and daily activities.">
    <meta name="keywords" content="sarjanamalam, sarjana, malam, forum sarjana, forum sarjana malam, forum,">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Sarjanamalam.">

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
                                src="{{asset('storage/icon/webicon-2.png')}}" class="weblogoforum"></a>
                    </div>
                    <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
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
                            {{-- <form action="/add-new-topic/{{$tokens}}" method="get" class="form">
                            <button class="btn btn-primary">Start New Topic</button>
                            </form> --}}
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#newDiscussion">Start New Topic</button>
                        </div>
                        {{-- MODAL NEW TOPIC --}}
                        <div class="modal fade" id="newDiscussion" tabindex="-1" role="dialog"
                            aria-labelledby="newDiscussion" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="newDiscussion">Topik Diskusi Baru</h5>
                                        <small class="text-muted">Isi informasi dibawah untuk memulai diskusi
                                            baru.</small>
                                    </div>
                                    <form action="/verify-add-new-topic/{{$tokens}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="subject" id="subject" class="form-control"
                                                        placeholder="Judul diskusi">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <select name="category" class="form-control custom-select">
                                                        <option selected disabled>Pilih kategori</option>
                                                        @foreach ($category_data as $cat)
                                                        <option value="{{$cat->category_id}}">
                                                            {{$cat->category}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <textarea name="threads" id="" cols="30" rows="10"
                                                        class="form-control"
                                                        placeholder="Tulis disini pembahasan diskusimu..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-custom-sarjana"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- END MODAL NEW TOPIC --}}
                        <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                        <div class="avatar pull-left dropdown">
                            <a data-toggle="collapse" href="#" data-target=".navHeader">
                                <span><img src="@if(!auth()->user()->displaypic){!!asset('storage/img/default.png')!!}
                                @else{!!asset('file/profilepic/'.auth()->user()->displaypic)!!}@endif"
                                        class="img-profile-user" alt="User Image"></span>
                                <b class="caret"></b>
                            </a>
                            <div class="status @if(auth()->user()->status=='active') green
                                @else
                                    red
                                @endif">&nbsp;</div>
                            <ul class="dropdown-menu navHeader" role="menu">
                                <li role="presentation"><a href="/{{auth()->user()->username}}"
                                        role="menuitem"><strong>{{auth()->user()->name}}</strong></a></li>
                                {{ csrf_field() }}
                                {{-- <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="/{{Auth()->user()->username}}">My
                                Profile</a></li> --}}
                                <li role="presentation"><a role="menuitem" tabindex="-3"
                                        href="/logout/{{auth()->user()->id}}">Log Out</a></li>
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
                        <a href="/home">Sarjanamalam</a> › <a href="#">@yield('title')</a>
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
                                @foreach ($category_data as $cat)
                                <li><a href="#">{{$cat->category}} <span
                                            class="badge pull-right">{{$cat->count}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!--ACTIVE THREADS -->
                    <div class="sidebarblock">
                        <h3>My Active Threads</h3>
                        @if(count($threadsActive)>0)
                        @foreach ($threadsActive as $threads)
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">{{$threads->subject}}</a>
                        </div>
                        @endforeach
                        @else
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Gada topik yang aktif @emojione(':disappointed:')</a>
                        </div>
                        @endif
                    </div>

                    <!-- POLL OF THE WEEK-->
                    {{-- <div class="sidebarblock">
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
                    </div> --}}




                </div>
            </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <div class="pull-left">
                    <ul class="paginationforum">

                        {{$threadsdata->links()}}
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <?php $year = date('Y') ?>
                <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img
                            src="{{asset('storage/icon/logoforum.png')}}" alt="" /></a></div>
                <div class="col-lg-8 col-xs-9 col-sm-5 ">&copy; Copyrights {{$year}} <a href="/home">Sarjanamalam</a>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                    <ul class="socialicons">
                        <li><a href="https://facebook.com/sarjanamalamdotcom" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li><a href="https://instagram.com/sarjanamalamdotcom" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/sarjanamalamcom" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


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
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>

    <!-- END REVOLUTION SLIDER -->
</body>

</html>
