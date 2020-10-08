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
      <!-- Start Home Page -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div >
            <div id="app">
                <masterr></masterr>
            </div>
        </div>
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
        <script src="/js/app.js"></script>
              <!-- LinkUp Js -->     
      <script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/popper.min.js"></script>
      <script type="text/javascript" src="assets/js/waypoints.js"></script>
      <script type="text/javascript" src="assets/js/wow.min.js"></script>
      <script type="text/javascript" src="assets/js/ityped.min.js"></script>
      <script type="text/javascript" src="assets/js/active.js"></script>
    </body>
</html>
