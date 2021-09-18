<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kids Clothes Free Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/loginAdmin/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin//bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin//animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin//css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin//animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin//select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin//daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginAdmin/css/util.css">
    <link rel="stylesheet" type="text/css" href="/loginAdmin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/loginAdmin/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="/admin/login" method="post">
                @csrf
					<span class="login100-form-title p-b-49">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-23">
                    <span class="label-input100">Username</span>
                    <label>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                    </label>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Password</span>
                    <label>
                        <input class="input100" type="password" name="password" placeholder="Type your password">
                    </label>
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="text-right p-t-8 p-b-31">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/loginAdmin//jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/loginAdmin//animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/loginAdmin//bootstrap/js/popper.js"></script>
<script src="/loginAdmin//bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/loginAdmin//select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/loginAdmin//daterangepicker/moment.min.js"></script>
<script src="/loginAdmin//daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/loginAdmin//countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/loginAdmin/js/main.js"></script>

</body>
</html>
