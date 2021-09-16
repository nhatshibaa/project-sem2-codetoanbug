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
                <div class="col-lg-12 col-md-12 col-xs-12 page-content">
                    <div class="product-filter">
                        <div class="short-name">
                            <form role="search" id="search-form">
                                <input type="search" class="form-control" autocomplete="off" name="s"
                                       placeholder="Search..." id="search-input" value="">
{{--                                <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i>--}}
{{--                                </button>--}}
                            </form>
                        </div>
                        <div class="container">
                            <div class="Show-item" id="postsFilter">
                                <form action="/category" method="get" name="filter-form">
                                    <select name="categoryId">
                                        <option value="0">Tất cả danh mục</option>
                                        @foreach($category as $listCate)
                                            <option
                                                {{$selectCate == $listCate->id ? 'selected': ''}} value="{{$listCate->id}}">{{$listCate->category_name}}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                            <div id="expandsFilter"></div>
                        </div>
                    </div>
                    <div class="adds-wrapper" style="margin-right: 15%">
                        <div class="tab-content">
                            <div id="list-view" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach($list as $item)
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="featured-box">
                                                <figure>
                                                    <a href="/gift-detail/{{$item->id}}"><img class="img-thumbnail" width="50%" style="margin-left: 50%"
                                                                                              src="{{$item->images}}"
                                                                                              alt="{{$item->title}}"></a>
                                                </figure>
                                                <div class="feature-content">
                                                    <h4><a href="/gift-detail/{{$item->id}}">{{$item->title}}</a></h4>
                                                    <div class="meta-tag">
                                                    <span>
                                                    <a href="#"><i
                                                            class="lni-user"></i>{{$item->account->fullName}}</a>
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

                                                        <a href="/gift-detail/{{$item->id}}"
                                                           class="btn btn-common float-right">View Details</a>
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
    <script>
        var selectCate = document.forms['filter-form']['categoryId'];
        selectCate.onchange = function () {
            document.forms['filter-form'].submit();
        }
    </script>
@endsection
