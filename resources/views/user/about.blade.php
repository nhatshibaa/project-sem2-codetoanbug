@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(user/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">About Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-image">
                        <img src="https://st-raovat.vnecdn.net/v7/images/illustration.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    @foreach($contents as $content)
                        {!! $content -> aboutUsPage !!}
                    @endforeach()
                </div>
            </div>
        </div>
    </section>
@endsection
{{--<div class="about-text">--}}
{{--    <h1 class="title-page">Giới thiệu</h1>--}}

{{--    <p>VnExpress Rao Vặt là nền tảng trực tuyến giúp kết nối người mua và người bán, hình thành cộng đồng mua bán trực tuyến lớn mạnh, uy tín.</p>--}}
{{--    <p>Đối với người mua, ưu thế của VnExpress Rao Vặt đến từ số lượng danh mục đa dạng, từ bất động sản, ôtô, xe máy, đồ điện tử cho đến, thời trang, làm đẹp, nội thất… Kết hợp giữa tiến bộ về công nghệ và sự thấu hiểu người dùng, mọi nhu cầu mua sắm được đáp ứng chỉ trong vài thao tác trên một môi trường an toàn, minh bạch và dễ sử dụng.</p>--}}
{{--    <p>Đối với người bán, VnExpress Rao Vặt tạo cơ hội tiếp cận đến hơn 50 triệu độc giả của VnExpress, Ngôi Sao, iOne. Chuyên trang tối ưu hàng loạt gói rao và đề xuất những vị trí tin rao để người bán tăng hiệu suất bán hàng, nhanh chóng tiếp cận đối tượng người dùng mục tiêu.</p>--}}

{{--</div>--}}
