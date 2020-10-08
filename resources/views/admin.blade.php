<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
      <link rel="stylesheet" href="assets/css/admin/main.css" />
      <!-- Responsive Css -->
      <link rel="stylesheet" href="assets/css/responsive.css" />
    </head>
    <body>
       
        <div id="app">
            <admin_master></admin_master>
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
        <script type="text/javascript" src="/js/script.js"></script>
    </body>
</html>
