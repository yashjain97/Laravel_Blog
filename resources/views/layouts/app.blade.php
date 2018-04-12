<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Login | Laravel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Rishi Tiwari" name="author" />
    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/pages/css/themes/modern.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.onload = function()
        {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
    <!-- Styles -->
</head>
<body class="fixed-header ">
<div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="/img/images.png" data-src="/img/images.png" data-src-retina="/img/images.png" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <div class="brand inline no-border hidden-xs-down text-white">
            <h2 style="color:grey;"><span class="semi-bold">LaRAVEL BLOG</span></h2>
            </div> <!-- START Login Form -->
            

            @yield('content')
        </div>
    </div>
    <!-- END Login Right Container-->
</div>

    <!-- Scripts -->
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
        <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- END VENDOR JS -->
        <script src="pages/js/pages.min.js"></script>
        <script>
            $(function()
            {
                $('#form-login').validate()
            })
        </script>
</body>
</html>