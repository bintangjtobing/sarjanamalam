@inject('userMod', 'App\UserMod')
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Messages</title>
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <meta name="title" content="Messages">
    <meta name="description"
        content="Complex search engine, including discussions in the community system. Sarjanamalam can help you in your lectures and daily activities.">
    <meta name="language" content="English">
    <meta name="author" content="Sarjanamalam.">
    <?php $tokens  = bin2hex(openssl_random_pseudo_bytes(64)); ?>

    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{!!asset('css/newforum/newstyle.css')!!}">
    <link href="{!!asset('css/new/css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/red.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/event-style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/new/css/font-awesome.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/themify-icons.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/new/css/custom.css')!!}">

    {{-- METAGRAPH FACEBOOK --}}
    <meta property="fb:admins" content="114499413304839">
    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('metadesc')" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    {{-- HEADER & MENU --}}
    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="header-alternative">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="/">
                            <img src="{!!asset('storage/logoofficial-mini.png')!!}" data-toggle="tooltip"
                                data-placement="bottom" title="Back to homepage" class="logo-default">
                        </a>
                    </div>
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a href="/messages/{{$tokens}}">
                                    <img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1583810435/based/paper-plane_tbosw0.svg"
                                        class="chaticon-forum mx-2" data-toggle="tooltip" data-placement="bottom"
                                        title="Private Messages"></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><img
                                            src="@if(!auth()->user()->displaypic){!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
                                            @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.auth()->user()->displaypic)!!}@endif"
                                            alt="Profile picture"
                                            class="img-roundedforum"></a>@if(auth()->user()->verified==1)
                                    <span title="Verified" style="
    position: relative;
    margin-left: -15px;
    margin-top: 25px; background-color: #fff; border-radius: 50%; top: 15px;
    right: 3px;"><img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1584348883/based/checkmark_ty9wnj.svg"
                                            alt="Verified" style="width:15px !important; height:15px !important;
                                            margin-left:2px;position:relative;"></span>
                                    @else
                                    @endif
                                    <?php $enc_id = Crypt::encrypt(auth()->user()->id); ?>
                                    <ul class="p-dropdown-content">
                                        <?php $enc_id = base64_encode(auth()->user()->id) ?>
                                        <li><a><b>{{auth()->user()->name}}</b></a></li>
                                        <hr>
                                        <li><a href="/{{auth()->user()->username}}">Dashboard Profile</a>
                                        </li>
                                        <li><a href="/{{auth()->user()->username}}/settings">Settings</a>
                                        </li>
                                        <li><a href="/logout/{{auth()->user()->id}}/{{$tokens}}">Sign out</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>


                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div id="mainMenu" class="menu-center menu-lowercase">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li class="dropdown"><a href="#">@yield('discover') <i
                                                class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/forum/{{$tokens}}"
                                                    class="@yield('aktifdw-threads')">Threads</a></li>
                                            <li><a href="/search-events/{{$tokens}}"
                                                    class="@yield('aktifdw-events')">Events</a>
                                            </li>
                                            <li><a href="/jobs/{{$tokens}}" class="@yield('aktifdw-jobs')">Jobs</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <form action="" method="get"><input type="search" class="search-for"
                                                placeholder="Search topic here..." name="get_value" id="" value="">
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <section id="page-content" class="sidebar-both">
            <div class="container-fluid">
                <div class="row">
                    <div class="content col-lg-12">
                        @yield('content')
                    </div>

                </div>
            </div>
        </section>
    </div>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Sarjanamalam",
            "url": "https://sarjanamalam.com/tentang-sarjana-malam",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://sarjanamalam.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }

    </script>
    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>
    <script src="{!!asset('js/functions.js')!!}"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'>
    </script>
    <script src="{!!asset('js/gmap3.min.js')!!}"></script>
    <script src="{!!asset('js/map-styles.js')!!}"></script>
    <script src="{!!asset('css/new/plugins/js/infinite-scroll.min.js')!!}"></script>

    {{-- Javacript started --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#newwrite',
            toolbar: false,
            statusbar: false,
            branding: false,
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            toolbar: true,
            statusbar: false,
            branding: false,
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var receiver_id = '';
        var my_id = "{{Auth::id()}}";
        $(document).ready(function () {
            // ajax  setup  form csrf  token
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            // PUSHER APP
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('22899963d46555aef8ea', {
                cluster: 'ap2',
                forceTLS: true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function (data) {

                // alert(JSON.stringify(data));
                if (my_id == data.from) {
                    $('#' + data.to).click();
                } else if (my_id == data.to) {
                    if (receiver_id == data.from) {
                        // Jika receiver selected, reload the selected user
                        $('#' + data.from).click();
                    } else {
                        // if receiver is not selected, add notif to that user
                        var pending = parseInt($('#' + data.from).find('.badge-light').html());
                        if (pending) {
                            $('#' + data.from).find('.badge-light').html(pending + 1);
                        } else {
                            $('#' + data.from).append(
                                '<span class="pending badge badge-light">1</span>');
                        }
                    }
                }
            });

            $('.user').click(function () {
                $('.user').removeClass('activechat');
                $(this).addClass('activechat');
                $(this).find('.badge-light').remove();
                receiver_id = $(this).attr('id');
                // alert(receiver_id);
                $.ajax({
                    type: "get",
                    url: '/message/' + receiver_id,
                    data: '',
                    cache: false,
                    success: function (data) {
                        $('#messages').html(data);
                        scrolltoBottomFunc();

                    }
                });
            });
            $(document).on('keyup', '.input-text input', function (e) {


                var message = $(this).val();
                // mengecek jika  enter key ditekan dan message tidak kosong begitu juga  dengan receiver is selected.
                if (e.keyCode == 13 && message != '' && receiver_id != '') {
                    $(this).val(''); // ketika ditekan tombol enter, text box akan kosong

                    var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                    $.ajax({
                        type: "post",
                        url: "/message/post",
                        data: {
                            "_token": "{{csrf_token()}}",
                            receiver_id,
                            message
                        },

                        cache: false,
                        success: function (data) {},
                        error: function (jqXHR, status, err) {},
                        complete: function () {
                            scrolltoBottomFunc();
                        }
                    });
                    // alert()
                }
            });
        });
        // make scroll down auto
        function scrolltoBottomFunc() {
            $('.scroll-box').animate({
                scrollTop: $('.scroll-box').get(0).scrollHeight
            }, 50);
        }

    </script>

</body>

</html>
