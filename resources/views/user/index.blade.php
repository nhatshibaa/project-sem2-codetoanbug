@extends('user.layout')

@section('page-header')
    <div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                    <div class="contents">
                        <h1 class="head-title">Chào mừng đến <span class="year">Kids Clothes For Free</span></h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-cate')
    <section id="categories">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-xs-12">
                    <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
                        <div class="item">
                            <a href="/category">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="/user/img/category/dresses.png" alt="">
                                        </div>
                                        <h4>Váy Đầm</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/category">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="/user/img/category/pants.png" alt="">
                                        </div>
                                        <h4>Quần</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/category">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="/user/img/category/shirt.png" alt="">
                                        </div>
                                        <h4>Áo</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/category">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="/user/img/category/hats.png" alt="">
                                        </div>
                                        <h4>Mũ</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/category">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="/user/img/category/set.png" alt="">
                                        </div>
                                        <h4>Đồ bộ</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/category">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="/user/img/category/shoes.png" alt="" >
                                        </div>
                                        <h4>Giày Dép</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Bài Đăng Mới Nhất</h1>
            <div class="row">
                @foreach($list as $item)
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="featured-box">
                            <figure>
                                <img class="img-fluid" src="{{$item->firstImg}}" alt="{{$item->title}}">
                            </figure>
                            <div class="feature-content">
                                <div class="product">
                                    <a href="#">{{$item->category->name}}</a>
                                </div>
                                <h4><a href="/gift-detail/{{$item->id}}">{{$item->title}}</a></h4>
                                <div class="meta-tag">
                                    <span><a href="#"><i class="lni-user"></i>{{$item->account->fullName}}</a></span>
                                    <span><a href="#"><i class="lni-map-marker"></i>{{$item->account->address}}</a></span>
                                </div>
                                <p class="dsc">{{$item->description}}.</p>
                                <div class="listing-bottom">
                                    <a href="/gift-detail/{{$item->id}}" class="btn btn-common float-right">Xem Chi Tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="blog" class="section-padding">

        <div class="container">
            <h2 class="section-title">
                Blogs
            </h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="/blog-detail">
                                <img src="user/img/blog/img-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="meta-tags">
                            <span class="user float-left"><a href="#"><i
                                        class="lni-user"></i> Posted By Admin</a></span>
                                <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
                            </div>
                            <h3>
                                <a href="/blog-detail">Recently Launching Our Iphone X</a>
                            </h3>
                            <p>
                                Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt
                                reiciendis, molestias omnis soluta.
                            </p>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="/blog-detail">
                                <img src="user/img/blog/img-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="meta-tags">
                            <span class="user float-left"><a href="#"><i
                                        class="lni-user"></i> Posted By Admin</a></span>
                                <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
                            </div>
                            <h3>
                                <a href="/blog-detail">How to get more ad views</a>
                            </h3>
                            <p>
                                Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt
                                reiciendis, molestias omnis soluta.
                            </p>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="/blog-detail">
                                <img src="user/img/blog/img-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="meta-tags">
                            <span class="user float-left"><a href="#"><i
                                        class="lni-user"></i> Posted By Admin</a></span>
                                <span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
                            </div>
                            <h3>
                                <a href="/blog-detail">Writing a better product description</a>
                            </h3>
                            <p>
                                Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt
                                reiciendis, molestias omnis soluta.
                            </p>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="subscribes section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="subscribes-inner">
                        <div class="icon">
                            <i class="lni-pointer"></i>
                        </div>
                        <div class="sub-text">
                            <h3>Subscribe to Newsletter</h3>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form>
                        <div class="subscribe">
                            <input class="form-control" name="EMAIL" placeholder="Enter your Email" required=""
                                   type="email">
                            <button class="btn btn-common" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection





