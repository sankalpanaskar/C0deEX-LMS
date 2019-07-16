<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Bright Pixel Academy">
	<meta name="keywords" content="Bright, Bright Pixel, Bright Pixel Academy, Computer">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BrightPixel</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/assets/bootstrap.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/assets/font-awesome.min.css')}}">
    

</head>
<body>

    <!-- Login Page Area Start -->
    <section class="edulab-login-page-area login-bg">
        <div class="edulab-login-overlay"></div>
        <div class="edulab-login-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login-box">
                            <div class="edulab-login-logo">
                                <a href="index-1.htm">
                                    <h2 style="color:#ffaa45;">Bright <span>Pixel</span></h2>
                                </a>
                            </div>
                            <div class="login-slogan">
                                <!-- <h3 style="color:#fff;margin-bottom:30px;">login to your Academy account!</h3> -->
                                <h3><a href="{{ url('/home') }}" style="color:#37ceff !important;"><i class="fa fa-home"></i> Home</a></h3>

                                <a href="{{ route('login') }}" style="color: #37ceff !important;"><i class="fa fa-sign-in"></i> Back To Login</a> 
                            </div>
                            <form id="login" method="POST" action="{{ route('password.email') }}">
                             @csrf
                                <p class="field">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>
                                    <i class="fa fa-user"></i>
                                      @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </p>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                               
                                <p class="submit" style="top: 12px !important;">
                                    <button type="submit" name="submit" id="" style="border-radius: 50%;">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </p>
                            </form>
                            <!--<label id="w_alert" style="color:red;font-size:13px;display:none;">Invalid Email and Password !</label>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Page Area End -->



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/assets/bootstrap.min.js')}}"></script>


</body>
</html>
