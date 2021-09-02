@extends('user.layout')

@section('page-css')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
@endsection
@section('page-header')
    <div class="page-header" style="background: url(...);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Đăng bài</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ /</a></li>
                            <li class="current">Đăng bài</li>
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
            <div class="row page-content" style="padding-left: 15%">
                <div class="col-sm-12 col-md-8 col-lg-10">
                    <div class="inner-box">
                        <div class="dashboard-box">
                            <h2 class="dashbord-title">Thông tin bài đăng</h2>
                        </div>
                        <form class="dashboard-wrapper" action="/post" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group mb-3 col-8">
                                    <label class="control-label">Tiêu đề</label>
                                    <input class="form-control input-md" name="title" placeholder="Tiêu đề"
                                           type="text">
                                    @error('title')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 tg-inputwithicon col-4">
                                    <label class="control-label">Danh mục</label>
                                    <div class="tg-select form-control">
                                        <select name="category">
                                            <option value="">Danh mục</option>
                                            <option value="1">Mũ</option>
                                            <option value="2">Áo</option>
                                            <option value="3">Quần</option>
                                            <option value="4">Giày, dép</option>
                                            <option value="5">Đồ bộ</option>
                                            <option value="6">Váy</option>
                                        </select>
                                    </div>
                                    @error('category')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 tg-inputwithicon col-4">
                                    <label class="control-label">Độ tuổi</label>
                                    <div class="tg-select form-control">
                                        <select name="ageRange">
                                            <option value="">Độ tuổi</option>
                                            <option value="1">1-2</option>
                                            <option value="2">2-3</option>
                                            <option value="3">3-4</option>
                                            <option value="4">4-5</option>
                                            <option value="5">5-6</option>
                                            <option value="6">6-7</option>
                                            <option value="7">7-8</option>
                                            <option value="8">8-9</option>
                                            <option value="9">9-10</option>
                                            <option value="10">10-11</option>
                                            <option value="11">11-12</option>
                                            <option value="12">12-13</option>
                                            <option value="13">13-14</option>
                                        </select>
                                    </div>
                                    @error('ageRange')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 tg-inputwithicon col-4">
                                    <label class="control-label">Màu sắc</label>
                                    <div class="tg-select form-control">
                                        <select name="color">
                                            <option value="">Màu sắc</option>
                                            <option value="pink">Hồng</option>
                                            <option value="black">Đen</option>
                                            <option value="red">Đỏ</option>
                                            <option value="yellow">Vàng</option>
                                            <option value="green">Xanh lá</option>
                                            <option value="blue">Xanh nước biển</option>
                                            <option value="white">Trắng</option>
                                            <option value="purple">Tím</option>
                                            <option value="orange">Cam</option>
                                        </select>
                                    </div>
                                    @error('color')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 tg-inputwithicon col-4">
                                    <label class="control-label">Size</label>
                                    <div class="tg-select form-control">
                                        <select name="size">
                                            <option value="">Size</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option value="4">5</option>
                                            <option value="5">6</option>
                                            <option value="6">7</option>
                                            <option value="7">8</option>
                                            <option value="8">9</option>
                                            <option value="9">10</option>
                                            <option value="10">11</option>
                                            <option value="11">12</option>
                                            <option value="12">13</option>
                                            <option value="13">14</option>
                                        </select>
                                    </div>
                                    @error('size')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group md-3">
                                <label class="control-label">Mô tả</label>
                                <textarea name="description" id="" cols="101" rows="5"></textarea>
                                @error('description')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group md-3">
                                <label class="control-label">Nội dung</label>
                                <textarea name="content" id="editor1"></textarea>
                                @error('content')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label>Ảnh bài đăng</label>
                                <input type="hidden" class="form-control" id="hello">
                                <button type="button" id="upload_widgetn" class="btn btn-sm btn-primary">Chọn ảnh</button>
                                <div class="p-sm hidden" img id="preview-div">
                                </div>
                            </div>
                            </label>
                            <div class="tg-checkbox">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="tg-agreetermsandrules">
                                    <label class="custom-control-label" for="tg-agreetermsandrules">Tôi đồng ý với <a href="/policy">Điều khoản & Qui định đăng bài</a></label>
                                </div>
                            </div>
                            <button class="btn btn-common" type="submit" style="margin-left: 40%">Đăng bài
                            </button>
                            <button class="btn " type="button" style="margin-left: 15px">Xem lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dcmr49l2j',
                uploadPreset: 'gqjyapbf'
            }, (error, result) => {
                if (!error && result && result.event === "success") {
                    var inputThumbnail = document.getElementById('hello');
                    var previewdiv = document.getElementById('preview-div');
                    if (inputThumbnail) {
                        var currentImagevalue = inputThumbnail.value;
                        if (currentImagevalue.length > 0){
                            currentImagevalue += ','
                        }
                        currentImagevalue += result.info.secure_url;
                        inputThumbnail.value = currentImagevalue;

                        previewdiv.innerHTML += `<img src="${result.info.secure_url}" width="150xp" class="img-rounded p-sm-0">`;
                        previewdiv.classList.remove('hidden');


                    }
                }
            }
        )
        document.getElementById("upload_widgetn").addEventListener("click", function () {
            myWidget.open();
        }, false);
    </script>
@endsection
@section('page-js')

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
    </script>
@endsection
