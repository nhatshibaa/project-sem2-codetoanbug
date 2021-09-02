@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(/user/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Categories</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                    <aside>

                        <div class="widget_search">
                            <form role="search" id="search-form">
                                <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                                <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
                            </form>
                        </div>

                        <div class="widget categories">
                            <h4 class="widget-title">All Categories</h4>
                            <ul class="categories-list">
                                <li>
                                    <a href="#">
                                        <i class="lni-dinner"></i>
                                        Trousers<span class="category-counter">(5)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-control-panel"></i>
                                        Shirt<span class="category-counter">(8)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-github"></i>
                                        Dress <span class="category-counter">(2)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-coffee-cup"></i>
                                        Shoes and Sandals <span class="category-counter">(3)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-home"></i>
                                        Hat <span class="category-counter">(4)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-pencil"></i>
                                        Suit <span class="category-counter">(5)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-9 col-md-12 col-xs-12 page-content">
                    <div class="product-filter">
                        <div class="Show-item">
                            <span>Show Items</span>
                            <form class="woocommerce-ordering" method="post">
                                <label>
                                    <select name="order" class="orderby">
                                        <option selected="selected" value="menu-order">Hats</option>
                                        <option value="popularity">Pants</option>
                                        <option value="popularity">Suits</option>
                                        <option value="popularity">Dresses</option>
                                        <option value="popularity">Shoes</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="adds-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade">
                                <div class="row">
                                    @foreach($list as $item)
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="featured-box">
                                                <figure>
                                                    <div class="icon">
                                                        <span class="bg-green"><i class="lni-heart"></i></span>
                                                        <span><i class="lni-bookmark"></i></span>
                                                    </div>
                                                    <img class="img-fluid" src="{{$item->images}}" alt="{{$item->title}}">
                                                </figure>
                                                <div class="feature-content">
                                                    <div class="product">
                                                        <a href="#">{{$item->category->name}}</a>
                                                    </div>
                                                    <h4><a href="#">{{$item->title}}</a></h4>
                                                    <div class="meta-tag">
                                                        <span><a href="/gift-detail"><i class="lni-user"></i>{{$item->account->fullName}}</a></span>
                                                        <span><a href="/gift-detail"><i class="lni-map-marker"></i>{{$item->account->address}}</a></span>
                                                    </div>
                                                    <p class="dsc">{{$item->description}}.</p>
                                                    <div class="listing-bottom">
                                                        <a href="/gift-detail" class="btn btn-common float-right">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="list-view" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach($list as $item)
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="featured-box">
                                                <figure>
                                                    <div class="icon">
                                                        <span class="bg-green"><i class="lni-heart"></i></span>
                                                        <span><i class="lni-bookmark"></i></span>
                                                    </div>
                                                    <a href="/gift-detail"><img class="img-fluid" src="{{$item->images}}" alt="{{$item->title}}"></a>
                                                </figure>
                                                <div class="feature-content">
                                                    <h4><a href="/gift-detail">{{$item->title}}</a></h4>
                                                    <div class="meta-tag">
                                                    <span>
                                                    <a href="#"><i class="lni-user"></i>{{$item->account->fullName}}</a></a>
                                                    </span>
                                                        <span>
                                                    <a href="#"><i class="lni-map-marker"></i>{{$item->account->address}}</a>
                                                    </span>
                                                        <span>
                                                    <a href="#"><i class="lni-tag"></i>{{$item->category->name}}</a>
                                                    </span>
                                                    </div>
                                                    <p class="dsc">{{$item->description}}.</p>
                                                    <div class="listing-bottom">

                                                        <a href="/gift-detail" class="btn btn-common float-right">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('vendor.pagination.bootstrap-4', ['paginator' => $list])
                </div>
            </div>
        </div>
    </div>
@endsection


