<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/formRegister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/formRegister/css/style.css">
</head>
<style>
    input[type=checkbox] {
        display: inline-block;
        width: 40px;
        margin-top: 6px;
    }
</style>
<body>
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <a href="/"><img src="/formRegister/banner-register.jpg" width="1200" alt="" style="margin: 25px 15px 5px"></a>
            </div>
            <div class="signup-form">
                <form method="post" class="register-form" id="register-form" action="/admin/list-user">
                    @csrf
                    <h2>Đăng ký tài khoản mới</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Họ và tên :</label>
                            <input type="text" name="fullName" id="name"/>
                            @error('fullName')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="father_name">Số CMND :</label>
                            <input type="text" name="idNumber" id="father_name"/>
                            @error('idNumber')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Tuổi :</label>
                            <input type="text" name="age" id="name"/>
                            @error('age')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ :</label>
                        <input type="text" name="address" id="address" placeholder="Số nhà"/>
                        @error('address')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Thành phố :</label>
                            <div class="form-select">
                                <select name="city"  id="chooseCity">
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
{{--                                @error('city')--}}
{{--                                <div class="text-danger">* {{ $message }}</div>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Quận huyện :</label>
                            <div class="form-select">
                                <select name="district"  id="chooseDistrict">
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
{{--                                @error('district')--}}
{{--                                <div class="text-danger">* {{ $message }}</div>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Xã phường :</label>
                            <div class="form-select">
                                <select name="ward"  id="chooseWard">
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
{{--                                @error('ward')--}}
{{--                                <div class="text-danger">* {{ $message }}</div>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                    </div>
                    <div class="form-radio">
                        <label class="radio-label">Giới tính :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" value="1" checked>
                            <label for="male">Nam</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female" value="2">
                            <label for="female">Nữ</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tài khoản :</label>
                        <input type="text" name="username">
                        @error('username')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu :</label>
                        <input type="password" name="password">
                        @error('password')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email">
                        @error('email')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại :</label>
                        <input type="text" name="phone"/>
                        @error('phone')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ảnh CMND mặt trước :</label>
                        <input type="hidden" class="form-control" id="hello" name="imgCardIDf">
                        <button type="button" id="upload_widgetn" class="btn btn-sm btn-primary">Chọn ảnh</button>
                        <div>
                            <img id="preview-img" src="" alt="" class="img-rounded" width="100px">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ảnh CMND mặt sau :</label>
                        <input type="hidden" class="form-control" id="hi" name="imgCardIDb">
                        <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Chọn ảnh</button>
                        <div>
                            <img id="preview-image" src="" alt="" class="img-rounded" width="100px">
                        </div>
                    </div>
                    <div class="form-submit" style="padding-right: 40%">
                        <input type="submit" value="Đăng ký" class="submit" name="submit" id="submit"/>
                    </div>
                    <br>
                    <div class="form-row">
                        <label style="margin-left: 32%; font-size: 12px">Đã có tài khoản! <a href="/login">Đăng nhập</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JS -->

<script src="/formRegister/vendor/jquery/jquery.min.js"></script>
<script src="/formRegister/js/main.js"></script>
<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>

<script type="text/javascript">
    var myWidget = cloudinary.createUploadWidget({
            cloudName: 'dcmr49l2j',

            uploadPreset: 'gqjyapbf'
        }, (error, result) => {
            if (!error && result && result.event === "success") {
                var inputThumbnail = document.getElementById('hello');
                var previewimg = document.getElementById('preview-img');
                if (inputThumbnail) {
                    inputThumbnail.value = result.info.secure_url;
                    previewimg.parentElement.classList.remove('hidden')
                    previewimg.src = result.info.secure_url;

                }
            }
        }
    )

    document.getElementById("upload_widgetn").addEventListener("click", function () {
        myWidget.open();
    }, false);
</script>

<script type="text/javascript">
    var myWidgets = cloudinary.createUploadWidget({
            cloudName: 'dcmr49l2j',

            uploadPreset: 'gqjyapbf'
        }, (error, result) => {
            if (!error && result && result.event === "success") {
                var inputThumbnail = document.getElementById('hi');
                var previewimg = document.getElementById('preview-image');
                if (inputThumbnail) {
                    inputThumbnail.value = result.info.secure_url;
                    previewimg.parentElement.classList.remove('hidden')
                    previewimg.src = result.info.secure_url;

                }
            }
        }
    )

    document.getElementById("upload_widget").addEventListener("click", function () {
        myWidgets.open();
    }, false);
</script>
@include('other.location')
@include('sweetalert::alert')
</body>
</html>

{{--p8czl57e--}}
