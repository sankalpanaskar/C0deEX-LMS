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
                                <br>
                                <a href="{{ route('register') }}" style="color: #37ceff !important;"><i class="fa fa-user-plus"></i> Create Account</a> 
                                    <span style="color:#ffaa45;">||</span>
                                <a href="{{ route('password.request') }}" style="color: #37ceff !important;"><i class="fa fa-unlock"></i> Forgot Password</a>
                            </div>
                            <form id="login" method="POST" action="{{ route('register') }}">
                             @csrf
                                <p class="field">
                                  <select class="form-control" name="user_type" id="user_type" style="padding-left: 40px;height: 50px;color: #757575;">
                                    <option value="0">Select User Type</option>
                                    <option value="superadmin">SuperAdmin</option>
                                    <option value="student">Student</option>
                                  </select>
                                  <i class="fa fa-clone" required></i>
                                  @if ($errors->has('user_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_type') }}</strong>
                                    </span>
                                @endif
                                </p>
                                <p class="field">
                                    <input type="text" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Your Full Name" required autofocus>
                                    <i class="fa fa-id-card-o"></i>
                                </p>
                                <p class="field">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>
                                    <i class="fa fa-envelope"></i>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </p>
                                <p class="field" id="student_id_input" style="display:none;">
                                    <input type="text" id="student_id" name="student_id" placeholder="Enter Student ID Ex..'BPA/GRPH/001'" >
                                    <i class="fa fa-id-badge"></i>
                                </p>
                                <p class="field">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" required>
                                    <i class="fa fa-unlock-alt"></i>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </p>
                                <p class="field">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                    <i class="fa fa-unlock"></i>
                                </p>
                               
                                <p class="submit registration">
                                  <button type="submit" name="Register" id="submit">
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
    <script type="text/javascript">
        $(function() {
            $('#user_type').change(function(){
                var a=$('#user_type').val();
                if(a=='student')
                {
                    $('#student_id_input').show();
                }else{
                    $('#student_id_input').hide();
                }
            });
        });
    </script>
    
    <!-- Bootstrap JS -->
    <!--<script src="{{asset('assets/js/assets/bootstrap.min.js')}}"></script>-->


</body>
</html>
