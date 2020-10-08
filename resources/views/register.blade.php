<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!DOCTYPE HTML> 
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Nik</title>
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;1,200&display=swap" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="assets/css/all.min.css" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
      <!-- Animate Css -->
      <link rel="stylesheet" href="assets/css/animate.min.css" />
      <!-- Site favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!-- Bootstrap Css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <!-- Morphext Css -->
      <link rel="stylesheet" href="assets/css/morphext.css" />
      <!-- Main Css -->
      <link rel="stylesheet" href="assets/css/style.css" />
      <!-- Responsive Css -->
      <link rel="stylesheet" href="assets/css/responsive.css" />
     <!--============================ LOGIN AREA START ============================--> 
</head>
    <body>
	    <section class="login-area">
                <div class="login-banner">
                    <div class="login-single-slide" style="background-image:url('assets/img/register.jpg')">
                        <div class="container">
                            <div class="login-slider_content">
                                <h3>EventHour</h3>
                            </div>
                            <div class="login-form">
                                <div class="login_icon">
                                    <i class="fa fa-ravelry"></i>
                                </div>
                                <form  method="POST" action="/app/registration">
                                @csrf
                                    @if (session('message'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                    <div class="login_group">
                                        <label>Your Username</label>
                                        <div class="login-form-input">
                                            <i class="fa fa-user"></i>
                                            <input name="name" type="text" placeholder="Type your username">
                                        </div>
                                    </div>
                                    <div class="login_group">
                                        <label>Your Email</label>
                                        <div class="login-form-input">
                                            <i class="fa fa-envelope"></i>
                                            <input name="email" type="email" placeholder="Type your email">
                                        </div>
                                    </div>
                                    <div class="login_group">
                                        <label>Your Phone Number</label>
                                        <div class="login-form-input">
                                            <i class="fa fa-phone"></i>
                                            <input name="phone" type="number" placeholder="Type your number">
                                        </div>
                                    </div>
                                    <div class="login_group">
                                        <label>Password</label>
                                        <div class="login-form-input">
                                            <i class="fa fa-lock"></i>
                                            <input name="password" type="password" placeholder="Type your password">
                                        </div>
                                    </div>
                                    <div class="login_group">
                                        <label>Confirm Password</label>
                                        <div class="login-form-input">
                                            <i class="fa fa-lock"></i>
                                            <input name="password_confirmation" type="password" placeholder="Type your password again">
                                        </div>
                                    </div>
                                    <div class="login_group _mar_t10">
                                        <input type="submit" value="Sign up for free">
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</div>
	 </section>
     <!--============================ LOGIN AREA END ============================-->   	
    <script>
        (function () {
            window.Laravel = {
                csrfToken: '{{ csrf_token() }}'
            };
            @if(Auth::check())
                window.authUser={!! Auth::user() !!}
                @else
                window.authUser=false
                
                @endif
        })();
    </script>


</body>
</html>
