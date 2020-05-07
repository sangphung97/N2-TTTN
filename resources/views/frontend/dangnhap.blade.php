<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="asset_social/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="asset_social/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="asset_social/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset_social/css/util.css">
    <link rel="stylesheet" type="text/css" href="asset_social/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-30 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-53">
                        LOGIN SYSTEM
                    </span> 
                    <div class="container-login100-form-btn m-t-17">
                        <a href=" {{route('provider_login','facebook')}} " class="btn-face m-b-20">
                            <i class="fa fa-facebook-official"></i>
                             Login with Facebook
                        </a>
                    </div>
                    <div class="container-login100-form-btn m-t-17">
                        <a href="{{route('provider_login','google')}}" class="btn-face m-b-20">
                            <i class="fa fa-google-official"></i>
                             Login with Google
                        </a>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="asset_social/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="asset_social/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="asset_social/vendor/bootstrap/js/popper.js"></script>
    <script src="asset_social/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="asset_social/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="asset_social/vendor/daterangepicker/moment.min.js"></script>
    <script src="asset_social/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="asset_social/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="asset_social/js/main.js"></script>

</body>
</html>