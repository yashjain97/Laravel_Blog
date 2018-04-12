<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title> @yield('title') | Laravel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{asset('pages/ico/60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/pages/ico/76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/pages/ico/120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/pages/ico/152.png')}}">
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Yash Jain" name="author" />
    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/pages/css/themes/modern.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
@if (Auth::guest())
<script>window.location="/login";</script>
   
@else
<div class="header p-r-0 bg-primary">
    <div class="header-inner header-md-height">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
        <div class="">
            <div class="brand inline no-border hidden-xs-down text-white">
            <h2 style="color:grey;"><span class="semi-bold">LaRAVEL BLOG</span></h2>
            </div>
           
          
        </div>
        <div class="d-flex align-items-center">
            <!-- START User Info-->
            <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down text-white">
                <span class="semi-bold">{{ Auth::user()->name }}</span>
            </div>
            <div class="dropdown pull-right">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
              <span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
                <img src="{{  asset('/img/admin-user-icon.gif')}}" alt="" data-src="{{asset('/img/admin-user-icon.gif')}}" data-src-retina="{{asset('img/profiles/avatar.jpg')}}" width="32" height="32">
                </span>
                </button>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                    <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Logout</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </div>
            </div>
            <!-- END User Info-->
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
                <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
                </a>
                <ul>
                    <li @if(\Request::is('home')) class="active" @endif>
                        <a href="{{url('/home')}}">Dashboard</a>
                    </li>
                    
                    
                    <li @if(\Request::is('view-blog')) class="active" @endif>
                        <a href="{{ url('/view_blog') }}"> Blog</a>
                       
                    </li>
                    <li @if(\Request::is('write-blog')) class="active" @endif>
                        <a href="{{ url('write-blog') }}">Write Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-container ">
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
            <!-- START BREADCRUMBS -->
            <div class="bg-white">
                <div class="container">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            @yield('content')
        </div>
<div class=" container   container-fixed-lg footer">
    <div class="copyright sm-text-center">
        <p class="small no-margin pull-left sm-pull-reset">
            <span class="hint-text">Copyright &copy; 2018 </span>
            <span class="font-montserrat"> My Blog</span>.
            <span class="hint-text">All rights reserved. </span>
            </p>
        <p class="small no-margin pull-right sm-pull-reset">
            Hand-crafted <span class="hint-text">&amp; made with Love</span>
        </p>
        <div class="clearfix"></div>

    </div>
</div>
    </div>
</div>
<script src="/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/plugins/select2/js/select2.full.min.js"></script>

<script type="text/javascript" src="/plugins/jquery-autonumeric/autoNumeric.js"></script>
<script type="text/javascript" src="/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
<script src="/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
<script src="/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
<script src="/plugins/handlebars/handlebars-v4.0.5.js"></script>
            <!-- END VENDOR JS -->
            <!-- BEGIN CORE TEMPLATE JS -->
            <script src="/pages/js/pages.min.js"></script>
            <!-- END CORE TEMPLATE JS -->
            <!-- BEGIN PAGE LEVEL JS -->
            <script src="/js/dashboard.js" type="text/javascript"></script>
<script src="{{asset('/js/form_wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/form_elements.js')}}" type="text/javascript"></script>
<script src="/js/scripts.js" type="text/javascript"></script>
@endif
            <!-- END PAGE LEVEL JS -->
</body>
</html>