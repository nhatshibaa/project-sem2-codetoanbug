@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(user/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Thông tin chi tiết</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ /</a></li>
                            <li class="current">Thông tin chi tiết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section-padding">
        <div class="container">
            <div class="product-info row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="ads-details-wrapper">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            @foreach($item->listPhoto as $url)
                                <div class="item">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{$url}}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2>{{$item->title}}</h2>
                            <div class="details-meta">
                                <span><a href="#"><i class="lni-alarm-clock"></i>{{$item->created_at}}</a></span>
                                <span><a href="#"><i class="lni-map-marker"></i>{{$account->address}}</a></span>
                                {{--                                {{ $account->wardName->name}}, {{ $account->districtName->name}},--}}
                                {{--                                {{ $account->cityName->name}}--}}
                            </div>
                            <p class="mb-4">{!! $item->content !!}</p>
                        </div>
                        <div class="tag-bottom">
                            <div class="float-left">
                                <ul class="advertisement">
                                    <li>
                                        <p><strong><i class="lni-folder"></i> Danh mục:</strong> <a
                                                href="#">{{$item->category->name}}</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p><strong><i class="lni-archive"></i> Trạng thái:</strong> New</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="float-right">
                                <div class="share">
                                    <div class="social-link">
                                        <a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook"
                                           href="#"><i class="lni-facebook-filled"></i></a>
                                        <a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter"
                                           href="#"><i class="lni-twitter-filled"></i></a>
                                        <a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin"
                                           href="#"><i class="lni-linkedin-fill"></i></a>
                                        <a class="google" data-toggle="tooltip" data-placement="top" title="google plus"
                                           href="#"><i class="lni-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <aside class="details-sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Đăng bởi</h4>
                            <div class="agent-inner">
                                <div class="agent-title">
                                    <div class="agent-photo">
                                        <a href="#"><img src="/user/img/author/img.png" alt=""></a>
                                    </div>
                                    <div class="agent-details">
                                        <h3><a href="#">{{$account->fullName}}</a></h3>
                                        <span><i class="lni-phone-handset"></i>{{$account->phone}}</span>
                                    </div>
                                </div>
                                <form action="/gift-detail/{{$item->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="userId" value="{{$account->id}}">
                                    @if(\Illuminate\Support\Facades\Session::has('username'))
                                        <textarea name="content" id="" cols="37" rows="4"
                                                  placeholder="Nội dung"></textarea>
                                        <input type="hidden" value="{{$item->id}}" name="giftId">
                                        <a><input class="btn btn-common fullwidth mt-4" value="Xin" type="submit"></a>
                                    @else
                                        <textarea name="content" id="" cols="37" rows="4"
                                                  placeholder="Content"></textarea>
                                        <a href="/login">
                                            <input class="btn btn-common fullwidth mt-4" value="Xin" type="submit">
                                        </a>
                                    @endif
                                </form>
                            </div>
                        </div>

                        <div class="widget">
                            <h4 class="widget-title">Thêm nhiều quà tặng hơn</h4>
                            <ul class="posts-list">
                                @foreach($list as $item)
                                    <li>
                                        <div class="widget-thumb">
                                            <a href="#"><img src="{{$item->firstImg}}" alt=""/></a>
                                        </div>
                                        <div class="widget-content" style="margin-left: 115px">
                                            <h4><a href="#">{{$item->title}}</a></h4>
                                            <div class="meta-tag">
                                            <span>
                                            <a href="#"><i class="lni-user"></i> {{$account->fullName}}</a>
                                            </span>
                                                <span>
                                            <a href="#"><i class="lni-map-marker"></i> {{$account->address}}</a>
                                            </span>
                                                <span>
                                            <a href="#"><i class="lni-tag"></i> {{$item->category->name}}</a>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
