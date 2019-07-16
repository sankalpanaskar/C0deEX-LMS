<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Bright Pixel Academy">
    <meta name="keywords" content="Bright, Bright Pixel, Bright Pixel Academy, Computer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C0deEX-LMS</title>

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
                                    <h2 style="color:#ffaa45;">C0deEX <span>LMS</span></h2>
                                </a>
                            </div>
                            <div class="login-slogan">
                                <!-- <h3 style="color:#fff;margin-bottom:30px;">login to your Academy account!</h3> -->
                                <h3><a href="{{ url('/home') }}" style="color:#37ceff !important;"><i class="fa fa-home"></i> Home</a></h3>

                                <a href="{{ route('register') }}" style="color: #37ceff !important;"><i class="fa fa-user-plus"></i> Create Account</a>
                                <span style="color:#ffaa45;">||</span>
                                <a href="{{ route('password.request') }}" style="color: #37ceff !important;"><i class="fa fa-unlock"></i> Forgot Password</a>
                            </div>
                            <form id="login" method="POST" action="{{ route('login') }}">
                                @csrf
                                <p class="field">
                                    <input type="text" id="u" placeholder="Email" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="Enter Your Username" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required
                                        autofocus>
                                    <i class="fa fa-user"></i>
                                </p>
                                <p class="field">
                                    <input type="password" id="p" placeholder="Password" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="Enter Your Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <i class="fa fa-lock"></i> @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                                </p>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

                                <p class="submit">
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

    <!-- Bootstrap JS -->
    <!--<script src="{{asset('assets/js/assets/bootstrap.min.js')}}"></script>-->


</body>

</html>