
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    @yield('page-css')
<!-- Custom Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8b03973819.js" crossorigin="anonymous"></script>
</head>
<body>
{{--Preloader start--}}
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>
        </svg>
    </div>
</div>
{{--    Preloader end--}}

{{--    Main wrapper start--}}
<div id="main-wrapper">
{{--        Nav header start--}}
    <div class="nav-header">
        <div class="brand-logo">
            <a href="/admin">
                <b class="logo-abbr"><img src="/assets/images/logo.png" alt=""> </b>
                <span class="logo-compact"><img src="/assets/images/logo-compact.png" alt=""></span>
                <span class="brand-title">
                        <img src="/assets/images/logo-text.png" alt="">
                    </span>
            </a>
        </div>
    </div>
{{--        Nav header end--}}

{{--        Header start--}}
    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                                class="mdi mdi-magnify"></i></span>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard"
                           aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons" style="letter-spacing: 2px">Hello,<b>Admin</b></li>
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="/assets/images/avatar/1.jpg" alt="admin">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li>

                                    <hr class="my-2">

                                    <li>
                                        <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                    </li>
                                    <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
{{--  Header end ti-comment-alt--}}


{{--  Sidebar start--}}
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
{{--                <li class="nav-label">Dashboard</li>--}}
{{--                <li>--}}
{{--                    <a href="/admin" aria-expanded="false">--}}
{{--                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-label">Forms</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/form"><i class="fas fa-cogs"></i>Form Config </a></li>
                    </ul>
                </li>
                <li class="nav-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-users-cog"></i>Admin</a>
                            <ul aria-expanded="false">
                                <li><a href="#">Edit </a></li>
                                <li><a href="/admin/list-admin">List </a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-users"></i>Users</a>
                            <ul aria-expanded="false">
                                <li><a href="/admin/list-user">List User </a></li>
                                <li><a href="/admin/list-user-accept">List User Accept </a></li>
                                <li><a href="/admin/list-user-refuse">List User Refuse </a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-gift"></i>Gifts</a>
                            <ul aria-expanded="false">
                                <li><a href="/admin/list-gift">List Gift </a></li>
                                <li><a href="/admin/list-gift-accept">List Gift Accept </a></li>
                                <li><a href="/admin/list-gift-refuse">List Gift Refuse </a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-th-list"></i>Categories</a>
                            <ul aria-expanded="false">
                                <li><a href="/admin/create-category">Create Category </a></li>
                                <li><a href="/admin/list-category">List Category </a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="far fa-newspaper"></i>Articles</a>
                            <ul aria-expanded="false">
                                <li><a href="#">Edit </a></li>
                                <li><a href="/admin/list-category">List </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
{{--    Sidebar end--}}


{{--        Content body start--}}
    @yield('content')
{{--        Content body end--}}


{{--        Footer start--}}
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018
            </p>
        </div>
    </div>
{{--        Footer end--}}
</div>
{{--    Main wrapper end--}}


{{--    Scripts--}}
<script src="/assets/plugins/common/common.min.js"></script>
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/settings.js"></script>
<script src="/assets/js/gleek.js"></script>
<script src="/assets/js/styleSwitcher.js"></script>
<script src="/assets/js/dashboard/dashboard-1.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
</script>

@yield('page-js')
{{--option--}}
<script>
    (function($) {
        "use strict"
        new quixSettings({
            version: "light", //2 options "light" and "dark"
            layout: "vertical", //2 options, "vertical" and "horizontal"
            navheaderBg: "color_3", //have 10 options, "color_1" to "color_10"
            headerBg: "color_1", //have 10 options, "color_1" to "color_10"
            sidebarStyle: "full", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
            sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
            sidebarPosition: "fixed", //have two options, "static" and "fixed"
            headerPosition: "static", //have two options, "static" and "fixed"
            containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
            direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
        });
    })(jQuery);
</script>
</body>
</html>
