@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Bài đăng của tôi</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ /</a></li>
                            <li class="current">Bài đăng của tôi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
                    <aside>
                        <div class="sidebar-box">
                            <div class="user">
                                <figure>
                                    <a href="#"><img src="/user/img/author/img.png" alt="" width="100px"></a>
                                </figure>
                                <div class="usercontent">
                                    <h3>Hello {{\Illuminate\Support\Facades\Session::get('username')}}</h3>

                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>
                                    <li>
                                        <a class="active" href="/my-gift">
                                            <i class="lni-layers"></i>
                                            <span>Bài đăng của tôi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/my-request">
                                            <i class="lni-layers"></i>
                                            <span>Yêu cầu xin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout">
                                            <i class="lni-enter"></i>
                                            <span>Đăng xuất</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="page-content">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title">Bài đăng của tôi</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <table class="table table-responsive dashboardtable tablemyads">
                                    <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tiêu đề</th>
                                        <th>Danh mục</th>
                                        <th>Mô tả</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="photo"><img class="img-fluid" src="/user/img/product/img1.jpg"
                                                               alt="">
                                        </td>
                                        <td>
                                            <a href=""><h3>HP Laptop 6560b core i3 3nd generation</h3></a>
                                        </td>
                                        <td><span class="adcategories">Laptops & PCs</span></td>
                                        <td>
                                            <p>ạdbabicibciwbckscnsjhcai</p>
                                        </td>
                                        <td><span class="adstatus adstatusexpired">pending</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
