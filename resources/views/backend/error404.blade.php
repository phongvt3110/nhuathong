<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{asset('resources/assets/niceadmin/img/favicon.png')}}">

    <title>404 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="{{asset('resources/assets/niceadmin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('resources/assets/niceadmin/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('resources/assets/niceadmin/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('resources/assets/niceadmin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('resources/assets/niceadmin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/niceadmin/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('resources/assets/niceadmin/js/html5shiv.js')}}"></script>
    <script src="{{asset('resources/assets/niceadmin/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

  <body>
   <div class="page-404">
    <p class="text-404">404</p>

    <h2>Aww Snap!</h2>
    <p>Something went wrong or that page doesn’t exist yet. <br><a href="{{action('Backend\AdminController@index')}}">Return Home</a></p>
  </div>
  <div class="credits">
    <!-- 
        All the links in the footer should remain intact. 
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
    -->
    <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>

  
  </body>
</html>
