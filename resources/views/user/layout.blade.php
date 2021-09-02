<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="/user/img/child-icon.png">
    <title>Kids Clothes Free</title>
    <link rel="stylesheet" type="text/css" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/user/fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="/user/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="/user/css/color-switcher.css">
    <link rel="stylesheet" type="text/css" href="/user/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/user/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/user/css/main.css">
    <link rel="stylesheet" type="text/css" href="/user/css/responsive.css">
    @yield('page-css')
</head>
<body>
<!--//layout-->
<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-xs-12">
                </div>
                <div class="col-lg-5 col-md-7 col-xs-12">
                    <div class="roof-social float-right">
                        <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                        <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                        <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                        <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                        <a class="google" href="#"><i class="lni-google-plus"></i></a>
                    </div>
                    <div class="header-top-right float-right">
                        <a href="/login" class="header-top-button"><i class="lni-lock"></i> Đăng nhập</a> |
                        <a href="/register" class="header-top-button"><i class="lni-pencil"></i> Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                        aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="/"><img src="/user/img/img.png" alt="logo" width="150px" height="80px"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/category"  aria-haspopup="true"
                           aria-expanded="false">
                            Danh mục
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/category">Mũ</a>
                            <a class="dropdown-item" href="/category">Quần</a>
                            <a class="dropdown-item" href="/category">Áo</a>
                            <a class="dropdown-item" href="/category">Giày, Dép</a>
                            <a class="dropdown-item" href="/category">Đồ bộ</a>
                            <a class="dropdown-item" href="/category">Váy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">
                            Bài viết
                        </a>
                    </li>
                </ul>
                <div class="post-btn">
                    <a class="btn btn-common" href="/post"><i class="lni-pencil-alt"></i> Đăng bài </a>
                </div>
            </div>
        </div>
        <ul class="mobile-menu">
            <li>
                <a class="active" href="/">
                    Trang chủ
                </a>
            </li>
            <li>
                <a href="/category">Danh mục</a>
            </li>
                <a href="/blog">Blog</a>
            </li>
        </ul>
    </nav>

    @yield('page-header')
</header>


@yield('page-cate')


@yield('content')

<!--layout-->
<footer>

    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <div class="footer-logo"><img src="/user/img/img.png" alt="logo-footer" width="170px"></div>
                        <div class="textwidget">
                            <p>KidsClothesFree ra đời sẽ trở thành một địa chỉ đáng tin cậy từ những người có những bộ quần áo trẻ em đã qua sử dụng hoặc không dùng đến nữa, đến những người có nhu cầu tìm kiếm những bộ quần áo cho những đứa trẻ khi còn hạn chế về tài chính.</p>
                        </div>
                        <ul class="mt-3 footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Hỗ Trợ</h3>
                        <ul class="contact-footer" >
                            <li><a style="color: whitesmoke" href="/about">- Giới thiệu</a></li>
                            <li><a style="color: whitesmoke" href="/blog">- Bài đọc</a></li>
                            <li><a style="color: whitesmoke" href="/policy">- Chính sách & Quy định</a></li>
                            <li><a style="color: whitesmoke" href="/contact">- Liên hệ </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Contact Info</h3>
                        <ul class="contact-footer">
                            <li>
                                <strong><i
                                        class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
                            </li>
                            <li>
                                <strong><i class="lni-envelope"></i></strong><span><a
                                        href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="cdaea2a3b9acaeb98da0aca4a1e3aea2a0">[email&#160;protected]</a> <br> <a
                                        href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="d8abada8a8b7aaac98b5b9b1b4f6bbb7b5">[email&#160;protected]</a></span>
                            </li>
                            <li>
                                <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>


<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>


<script src="/user/js/jquery-min.js"></script>
<script src="/user/js/popper.min.js"></script>
<script src="/user/js/bootstrap.min.js"></script>
<script src="/user/js/jquery.counterup.min.js"></script>
<script src="/user/js/waypoints.min.js"></script>
<script src="/user/js/wow.js"></script>
<script src="/user/js/owl.carousel.min.js"></script>
<script src="/user/js/jquery.slicknav.js"></script>
<script src="/user/js/main.js"></script>
<script src="/user/js/form-validator.min.js"></script>
<script src="/user/js/contact-form-script.min.js"></script>
@yield('page-js')
</body>
</html>
