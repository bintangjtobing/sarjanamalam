<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

        <div id="topbar" class="d-none d-xl-block d-lg-block" style="padding-bottom: 16px;padding-top: 16px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="topbar-dropdown">
                            <div class="title"><i class="fa fa-user"></i><a href="#">Login</a></div>
                            <div class="topbar-form">
                                <form>
                                    <div class="form-group">
                                        <label class="sr-only">Username or Email</label>
                                        <input type="text" placeholder="Username or Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Password</label>
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-inline form-group">
                                        <div class="form-check">
                                            <label>
                                                <input type="checkbox">
                                                <small class="m-l-10"> Remember me</small> </label>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="topbar-dropdown">
                            <a class="title"><img src="{!!asset('storage/logoofficial-mini.png')!!}"
                                    alt="Logo Sarjanamalam." class="forum-logo-sarjanamalam img-fluid"></a>
                        </div>
                        <div class="topbar-dropdown">
                            <a class="title">English <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-list">
                                <a class="list-entry" href="#">French</a>
                                <a class="list-entry" href="#">Spanish</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i> <i class="fa fa-caret-down"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <header id="header" data-fullwidth="true" class="header-alternative">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="index.html">
                            <img src="images/logo-circle.png" class="logo-default">
                            <img src="images/logo-circle-dark.png" class="logo-dark">
                        </a>
                    </div>


                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>


                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
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
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Layout</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-topbar.html">Light</a></li>
                                                    <li><a href="header-topbar-dark.html">Dark</a></li>
                                                    <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                    <li><a href="header-topbar-colored.html">Colored</a></li>
                                                    <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-alternative.html">Alternative</a></li>
                                                    <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                    <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed
                                                                    Logo</a>
                                                            </li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive
                                                                    Logo</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a></li>
                                                    <li><a href="page-title-video.html">Video background</a></li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a></li>
                                                    <li><a href="page-title-background-color.html">Colored
                                                            background</a></li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                                                    <li><a href="page-menu-rounded.html">Rounded</a></li>
                                                    <li><a href="page-menu-outline.html">Outline</a></li>
                                                    <li><a href="page-menu-lines.html">Lines</a></li>
                                                    <li><a href="page-menu-solid.html">Solid</a></li>
                                                    <li><a href="page-menu-light.html">Light</a></li>
                                                    <li><a href="page-menu-dark.html">Dark</a></li>
                                                    <li><a href="page-menu-creative.html">Creative</a></li>
                                                    <li><a href="page-menu.html">Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a></li>
                                                    <li><a href="sidebar.html">Left aligned</a></li>
                                                    <li><a href="sidebar-right.html">Right aligned</a></li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="sidebar-modern.html">Modern</a></li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a></li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a></li>
                                                    <li><a href="footer-dark.html#footer">Dark</a></li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a></li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a></li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a></li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a></li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a></li>
                                                    <li><a href="footer-6.html#footer">Footer 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Options</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="layout-boxed.html">Boxed</a></li>
                                                    <li><a href="layout-modern.html">Modern</a></li>
                                                    <li><a href="layout-frame.html">Frame</a></li>
                                                    <li><a href="layout-wide.html">Wide (default)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="preview/index.html">Layout Demos<span
                                                        class="badge badge-primary">220+</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a>
                                                    </li>
                                                    <li><a href="slider-inspiro-slider.html">Inspiro Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a>
                                                    </li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen
                                                            Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text
                                                            Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5
                                                            Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span
                                                        class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open-subscription.html">Subscription</a>
                                                    </li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a></li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shape-dividers.html">Shape Dividers<span
                                                        class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span
                                                                class="badge badge-danger">NEW</span></a>
                                                    </li>
                                                    <li><a href="#">Label (hot)<span
                                                                class="badge badge-danger">HOT</span></a>
                                                    </li>
                                                    <li><a href="#">Label (popular)<span
                                                                class="badge badge-success">POPULAR</span></a></li>
                                                    <li><a href="#">Label (sale)<span
                                                                class="badge badge-warning">SALE</span></a></li>
                                                    <li><a href="#">Label (info)<span
                                                                class="badge badge-info">INFO</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-according.html">Accordions</a></li>
                                                            <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                            <li><a href="shortcode-animations.html">Animations</a></li>
                                                            <li><a href="shortcode-avatar.html">Avatar</a></li>
                                                            <li><a href="shortcode-audio-video.html">Audio & Video</a>
                                                            </li>
                                                            <li><a href="shortcode-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li><a href="component-bootstrap-switch.html">BS Switch<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-bootstrap-notify.html">BS Notify<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-breadcrumbs.html">Breadcrumbs</a>
                                                            </li>
                                                            <li><a href="shortcode-buttons.html">Buttons</a></li>
                                                            <li><a href="shortcode-background-image.html">Background
                                                                    Image</a>
                                                            </li>
                                                            <li><a href="shortcode-background-overlays.html">Background
                                                                    Overlays</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="component-charts-chartjs.html">Charts<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-calendar.html">Calendar<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-client-logo.html">Clients logos</a>
                                                            </li>
                                                            <li><a href="shortcode-calltoaction.html">Call to action</a>
                                                            </li>
                                                            <li><a href="shortcode-carousel.html">Carousel</a></li>
                                                            <li><a href="shortcode-code.html">Code</a></li>
                                                            <li><a href="shortcode-countdown-timer.html">Countdown
                                                                    Timers</a>
                                                            </li>
                                                            <li><a href="shortcode-countdown.html">Countdown<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-counters.html">Counter Numbers</a>
                                                            </li>
                                                            <li><a href="component-clipboard.html">Clipboard<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-datatable.html">Data Tables<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-daterangepicker.html">Date & Time
                                                                    Pickers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-dropcat-highlight.html">Dropcat &
                                                                    Highlight</a></li>
                                                            <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                                            <li><a href="shortcode-team-members.html">Team members</a>
                                                            </li>
                                                            <li><a href="shortcode-forms.html">Form Controls</a></li>
                                                            <li><a href="shortcode-form-validation.html">Form
                                                                    Validation</a>
                                                            </li>
                                                            <li><a href="shortcode-form-layouts.html">Form Layouts</a>
                                                            </li>
                                                            <li><a href="shortcode-file-upload.html">File upload</a>
                                                            </li>
                                                            <li><a href="shortcode-grid.html">Grid System</a></li>
                                                            <li><a href="shortcode-heading-styles.html">Heading
                                                                    Styles</a></li>
                                                            <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                                            <li><a href="shortcode-icon-lists.html">Icons</a></li>
                                                            <li><a href="shortcode-images.html">Images</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-lightbox.html">Lightbox</a></li>
                                                            <li><a href="shortcode-lists.html">Lists</a></li>
                                                            <li><a href="shortcode-labels-badgets.html">Labels &
                                                                    Badges</a></li>
                                                            <li><a href="shortcode-maps.html">Maps</a></li>
                                                            <li><a href="shortcode-modal.html">Modal</a></li>
                                                            <li><a href="shortcode-modal-strip.html">Modal Strip</a>
                                                            </li>
                                                            <li><a href="shortcode-navs.html">Navbar & Navs</a></li>
                                                            <li><a href="shortcode-paginations.html">Pagination &
                                                                    Pager</a></li>
                                                            <li><a href="shortcode-panels.html">Panels</a></li>
                                                            <li><a href="shortcode-pie-chart.html">Pie charts</a></li>
                                                            <li><a href="shortcode-popover.html">Popover</a></li>
                                                            <li><a href="shortcode-milestone-stats.html">Milestone &
                                                                    Stats</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-pricing-table.html">Pricing
                                                                    tables</a></li>
                                                            <li><a href="shortcode-progress-bar.html">Progress bars</a>
                                                            </li>
                                                            <li><a href="shortcode-parallax.html">Parallax</a></li>
                                                            <li><a href="shortcode-particles.html">Particles<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-responsive-utilities.html">Responsive
                                                                    utilities</a></li>
                                                            <li><a href="component-ion-range-slider.html">Range
                                                                    Slider<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-sections.html">Sections</a></li>
                                                            <li><a href="shortcode-smooth-scrolling.html">Smooth
                                                                    Scrolling</a>
                                                            </li>
                                                            <li><a href="shortcode-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li><a href="shortcode-spinners.html">Spinners<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-toggles-radio-checkboxes.html">Switch
                                                                    Toggle<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-shape-dividers.html">Shape
                                                                    Dividers<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-ratings.html">Ratings<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-tables.html">Tables</a></li>
                                                            <li><a href="shortcode-textbox.html">Text Boxes</a></li>
                                                            <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                            <li><a href="shortcode-testimonial.html">Testimonials</a>
                                                            </li>
                                                            <li><a href="shortcode-toggles.html">Toggles</a></li>
                                                            <li><a href="shortcode-tooltips.html">Tooltips</a></li>
                                                            <li><a href="shortcode-typography.html">Typography</a></li>
                                                            <li><a href="shortcode-text-rotator.html">Text Rotator</a>
                                                            </li>
                                                            <li><a href="shortcode-timeline.html">Timeline<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-video-background.html">Video
                                                                    Background</a>
                                                            </li>
                                                            <li><a href="shortcode-wizard.html">Wizard<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About
                                                    us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a></li>
                                                    <li><a href="page-about-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About
                                                    me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span
                                                                class="badge badge-danger">NEW</span></a></li>
                                                    <li><a href="page-about-me-basic.html">Basic</a></li>
                                                    <li><a href="page-about-me-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact
                                                    us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a></li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a></li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a>
                                                    </li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a></li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a></li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span
                                                    class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-gallery-2.html">Two Columns</a></li>
                                                    <li><a href="page-gallery-3.html">Three Columns</a></li>
                                                    <li><a href="page-gallery-4.html">Four Columns</a></li>
                                                    <li><a href="page-gallery-5.html">Five Columns</a></li>
                                                    <li><a href="page-gallery-6.html">Six Columns</a></li>
                                                    <li><a href="page-gallery-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="page-gallery-wide.html">Wide version</a></li>
                                                    <li><a href="page-gallery-load-more.html">Load more</a></li>
                                                    <li><a href="page-gallery-infinite-scroll.html">Infinity Scroll</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User
                                                    pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a></li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a></li>
                                                    <li><a href="page-user-register.html">Register</a></li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a>
                                                    </li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="page-services.html">Services</a></li>
                                            <li><a href="page-our-team.html">Our team</a></li>
                                            <li><a href="page-our-clients.html">Our clients</a></li>
                                            <li><a href="page-maintenance.html">Maintenance</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                            <li><a href="page-404-parallax.html">404 Page - Parallax</a></li>
                                            <li><a href="page-500.html">500 Page</a></li>
                                            <li><a href="page-fullwidth.html">Fullwidth page</a></li>
                                            <li><a href="page-fullwidth-wide.html">Fullwidth page - Wide</a></li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page
                                                    with
                                                    Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="page-sidebar-right.html">Sidebar Right</a></li>
                                                    <li><a href="page-sidebar-both.html">Sidebar Both</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-site-map.html">Site Map</a></li>
                                            <li><a href="page-faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li><a href="portfolio-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-3.html">Three Columns</a></li>
                                                            <li><a href="portfolio-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-sidebar.html">Sidebar version</a>
                                                            </li>
                                                            <li><a href="portfolio-wide-3.html">Wide version</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-masonry-3.html">Three Columns<span
                                                                        class="badge badge-danger">HOT</span></a></li>
                                                            <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-masonry-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-masonry-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-masonry-sidebar.html">Sidebar
                                                                    version</a>
                                                            </li>
                                                            <li><a href="portfolio-masonry-wide-3.html">Wide version</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li><a href="portfolio-filter-styles.html">Filter Styles</a>
                                                            </li>
                                                            <li><a href="portfolio-load-more.html">Load more</a></li>
                                                            <li><a href="portfolio-load-more-sidebar.html">Load more -
                                                                    Sidebar</a></li>
                                                            <li><a href="portfolio-infinite-scroll.html">Infinity
                                                                    Scroll</a>
                                                            </li>
                                                            <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                            <li><a href="portfolio-gallery-modal.html">Gallery Modal</a>
                                                            </li>
                                                            <li><a href="portfolio-video-modal.html">Video Modal</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="portfolio-sidebar-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li><a href="portfolio-sidebar-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li><a href="portfolio-sidebar-both.html">Both Sidebars</a>
                                                            </li>
                                                            <li><a href="portfolio-slider-3.html">Slider Default</a>
                                                            </li>
                                                            <li><a href="portfolio-no-page-title.html">No Page Title</a>
                                                            </li>
                                                            <li><a href="portfolio-no-page-title-sidebar.html">No Page
                                                                    Title -
                                                                    Sidebar</a></li>
                                                            <li><a href="portfolio-hover-styles.html">Hover Styles</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li><a href="portfolio-page-grid-gallery.html">Grid
                                                                    Gallery</a></li>
                                                            <li><a href="portfolio-page-particles.html">Particles Wide
                                                                    Project</a></li>
                                                            <li><a href="portfolio-page-floating-sidebar.html">Floating
                                                                    Sidebar</a></li>
                                                            <li><a href="portfolio-page-slider.html">Slider version</a>
                                                            </li>
                                                            <li><a href="portfolio-page-background-image.html">Fullscreen
                                                                    image</a></li>
                                                            <li><a href="portfolio-page-background-video.html">Fullscreen
                                                                    Video</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-9 m-t-10">
                                                                        <div class="text-center center">
                                                                            <div class="heading-creative">
                                                                                <strong>20+</strong>
                                                                                Amazing Hover Styles</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3"><a
                                                                            href="portfolio-hover-styles.html"
                                                                            class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View
                                                                            All Hover Styles</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="d-block d-lg-none">
                                                            <li><a class="mega-menu-title"
                                                                    href="portfolio-hover-styles.html">20+ Amazing Hover
                                                                    Styles</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="blog-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="blog-masonry-3.html">Three Columns<span
                                                                        class="badge badge-danger">HOT</span></a></li>
                                                            <li><a href="blog-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="blog-masonry-sidebar.html">Sidebar version</a>
                                                            </li>
                                                            <li><a href="blog-masonry-no-page-title.html">No page
                                                                    title</a></li>
                                                            <li><a href="blog-masonry-wide.html">Wide version</a></li>
                                                            <li><a href="blog-masonry-load-more.html">Load More</a></li>
                                                            <li><a href="blog-masonry-infinite-scroll.html">Infinite
                                                                    Scroll</a>
                                                            </li>
                                                            <li><a href="blog-masonry-filter.html">Filter Categories</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li><a href="blog-1.html">One Column</a></li>
                                                            <li><a href="blog-2.html">Two Columns</a></li>
                                                            <li><a href="blog-3.html">Three Columns</a></li>
                                                            <li><a href="blog-4.html">Four Columns</a></li>
                                                            <li><a href="blog-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-wide.html">Wide version</a></li>
                                                            <li><a href="blog-load-more.html">Load More</a></li>
                                                            <li><a href="blog-infinite-scroll.html">Infinite Scroll</a>
                                                            </li>
                                                            <li><a href="blog-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li><a href="blog-left-image-sidebar-right.html">Right
                                                                    Sidebar</a>
                                                            </li>
                                                            <li><a href="blog-left-image-sidebar-left.html">Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li><a href="blog-left-image-sidebar-both.html">Both
                                                                    Sidebars</a>
                                                            </li>
                                                            <li><a href="blog-left-image-no-sidebar.html">No Sidebar</a>
                                                            </li>
                                                            <li><a href="blog-left-image-no-page-title.html">No page
                                                                    title</a>
                                                            </li>
                                                            <li><a href="blog-left-image-load-more.html">Load More</a>
                                                            </li>
                                                            <li><a href="blog-left-image-infinite-scroll.html">Infinite
                                                                    Scroll</a></li>
                                                            <li><a href="blog-left-image-author-info.html">Author
                                                                    Info</a></li>
                                                            <li><a href="blog-left-image-filter.html">Filter
                                                                    Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="blog-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="blog-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a>
                                                            </li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li><a href="blog-single.html">Default</a></li>
                                                            <li><a href="blog-single-slider.html">Slider</a></li>
                                                            <li><a href="blog-single-video.html">Video</a></li>
                                                            <li><a href="blog-single-audio.html">Audio</a></li>
                                                            <li><a href="blog-single-creative.html">Creative</a></li>
                                                            <li class="mega-menu-title">Comments<span
                                                                    class="badge badge-danger">NEW</span></li>
                                                            <li><a href="blog-comments.html#comments">Default
                                                                    Comments</a></li>
                                                            <li><a href="blog-comments-disqus.html#comments">Disqus
                                                                    Comments</a>
                                                            </li>
                                                            <li><a href="blog-comments-facebook.html#comments">Facebook
                                                                    Comments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li><a href="shop-columns-2.html">Two Columns</a></li>
                                                            <li><a href="shop-columns-3.html">Three Columns</a></li>
                                                            <li><a href="shop-columns-4.html">Four Columns</a></li>
                                                            <li><a href="shop-columns-5.html">Five Columns</a></li>
                                                            <li><a href="shop-columns-6.html">Six Columns</a></li>
                                                            <li><a href="shop-sidebar-sticky.html">Sidebar Sticky</a>
                                                            </li>
                                                            <li><a href="shop-wide.html">Wide version</a></li>
                                                            <li><a href="shop-no-page-title.html">No page title</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="shop-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="shop-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="shop-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="shop-fullwidth.html">Fullwidth (Wide)</a></li>
                                                            <li class="mega-menu-title">Loading Styles</li>
                                                            <li><a href="shop-load-more.html">Load more</a><a
                                                                    href="shop-load-more-sidebar.html">Load Sidebar</a>
                                                            </li>
                                                            <li><a href="shop-infinite-scroll.html">Infinity Scroll</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li><a class="animsition-link" href="shop-cart.html">Shoping
                                                                    Cart</a></li>
                                                            <li><a class="animsition-link"
                                                                    href="shop-cart-empty.html">Shoping
                                                                    Cart - Empty</a></li>
                                                            <li><a class="animsition-link"
                                                                    href="shop-checkout.html">Checkout</a></li>
                                                            <li><a class="animsition-link"
                                                                    href="shop-checkout-completed.html">Checkout
                                                                    Completed</a>
                                                            </li>
                                                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                            <li><a href="shop-wishlist-empty.html">Wishlist Empty</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li><a href="shop-single-product.html">Fullwidth</a></li>
                                                            <li><a href="shop-single-product-sidebar-left.html">Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li><a href="shop-single-product-sidebar-right.html">Right
                                                                    Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-both.html">Both
                                                                    Sidebars</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5 p-l-0">
                                                        <h4 class="text-theme">BIG SALE<small>Up to</small></h4>
                                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                                        <p class="m-b-0">The most happiest time of the day!. Morbi
                                                            sagittis, sem
                                                            quis ipsum dolor sit amet lacinia faucibus.</p><a
                                                            class="btn btn-shadow btn-rounded btn-block m-t-10">SHOP
                                                            NOW!</a><small class="t300">
                                                            <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>


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
                selector: 'textarea',
                branding: false,
                menubar: false,
                setup: function (editor) {
                    editor.on('change', function (e) {
                        editor.save();
                    });
                }
            });

        </script>
</body>

</html>
