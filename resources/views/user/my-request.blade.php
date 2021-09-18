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
                                        <a href="/my-gift">
                                            <i class="lni-layers"></i>
                                            <span>Bài đăng của tôi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="/my-request">
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
                                        <th>Ảnh món quà</th>
                                        <th>Họ tên người xin</th>
                                        <th>Địa chỉ</th>
                                        <th>Lời nhắn</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($itemRequest as $item)
                                        <tr data-category="active">
                                            <td class="photo"><img class="img-fluid" src="{{$item->gift->images}}"
                                                                   alt="">
                                            </td>
                                            <td>
                                                <h3>{{$item->userRequest->fullName}}</h3>
                                            </td>
                                            <td><span class="adcategories"></span>{{$item->userRequest->address}}</td>
                                            <td><p>{{$item->content}}</p>
                                            </td>
                                            <td>
                                                <div class="btns-actions">
                                                    <form action="/my-request/{{$item->id}}" method="post">
                                                        @csrf
                                                        <button {{$item->button}} class="btn-action btn-view" type="submit"><i class="lni-check-mark-circle"></i></button>
                                                    </form>
                                                    <form action="/my-request/{{$item->id}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button {{$item->button}} class="btn-action btn-delete" type="submit"><i class="lni-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

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
