<!DOCTYPE html>
<html  lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>   @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- BEGIN CSS -->
   <link href="/admin/assets/plugins/bootstrap/bootstrap5/css/bootstrap.rtl.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/simple-line-icons/css/simple-line-icons.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/paper-ripple/dist/paper-ripple.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet">
   <link href="/admin/assets/css/style.css" rel="stylesheet">
   <link href="/admin/assets/css/colors.css" rel="stylesheet">
   <link href="/admin/assets/plugins/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
   <link href="/admin/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet">
   <link href="/admin/assets/css/style.css" rel="stylesheet">
   <link href="/admin/assets/css/colors.css" rel="stylesheet">
   <link href="/admin/assets/css/lightbox.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/css/persian-datepicker.css">
   <!-- END CSS -->
    {{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}
    {{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}

</head>
<body class="fix-header active-ripple theme-blue sidebar-extra">



<div class="ddd">



     @includeWhen( empty($navbar),'admin.section.navbar')

      @yield('login')

      @if(Request::url() != route( 'admin.login'))
      <div id="wrapper">
        @includeWhen( empty($sidebar),'admin.section.sidebar')
        <div id="page-content">
            <div class="row">
               @yield('content')

            </div>

        </div>
     </div>
        @endif


</div>

<script src="/admin/assets/plugins/jquery/dist/jquery-3.1.0.js"></script>
<script src="/admin/assets/plugins/jquery-migrate/jquery-migrate-1.2.1.min.js"></script>
<script src="/admin/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/admin/assets/plugins/jquery-validation/src/localization/messages_fa.js"></script>

<script src="/admin/assets/plugins/bootstrap/bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/plugins/metisMenu/dist/metisMenu.min.js"></script>
<script src="/admin/assets/plugins/paper-ripple/dist/PaperRipple.min.js"></script>
<script src="/admin/assets/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/admin/assets/plugins/screenfull/dist/screenfull.min.js"></script>
<script src="/admin/assets/plugins/iCheck/icheck.min.js"></script>
<script src="/admin/assets/plugins/switchery/dist/switchery.js"></script>
<script src="/admin/assets/js/core.js"></script>
<script src="/admin/assets/js/lightbox.min.js"></script>
<script src="/js/persian-date.min.js"></script>
<script src="/js/persian-datepicker.min.js"></script>
  <script src="/admin/assets/js/pages/login.js"></script>
  <script src="/js/fun.js"></script>
  <script src="/js/js1.js"></script>

  @include('sweetalert::alert')
@yield('script')
</body>
</html>
