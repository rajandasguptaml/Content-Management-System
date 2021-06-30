<!doctype html>
@extends('creatorlayout.master')


<html class="no-js" lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- preloader area end -->
    <!-- login area start -->
  
 

    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post">
				@csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                   
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>

                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                           
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
						<div>
							<p class="text-danger" >{{session('msg')}}</p>
						</div>
                         <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="/register">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
</body>

</html>