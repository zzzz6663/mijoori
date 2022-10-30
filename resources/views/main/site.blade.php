<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/home/css/style.css">
    <link rel="stylesheet" href="/css/iziToast.css">
    <link rel="stylesheet" href="/css/persian-datepicker.min.css">
    <link rel="stylesheet" href="/css/jquery.loadingModal.css">
    {{-- <link href="/admin/assets/css/lightbox.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/css3.css">
    <link rel="shortcut icon" href="/home/images/logo.png">
    <link rel="apple-touch-icon" href="/home/images/logo.png">

</head>

<body>
@include('home.parts.header')
@yield('content')

@include('home.parts.footer')
{{--    @includeWhen((Route::currentRouteName()==''),'home.teacher.sidebar')--}}



<script src="/home/js/jquery-2.2.0.min.js"></script>
<script src="/home/js/owl.carousel.min.js"></script>
<script src="/home/js/aos.js"></script>
{{-- <script src="/home/js/persian-date.min.js"></script>
<script src="/home/js/persian-datepicker.min.js"></script> --}}
<script src="/home/js/glightbox.min.js"></script>
<script src="/home/js/nouislider.min.js"></script>
<script src="/home/js/wNumb.min.js"></script>
<script src="/home/js/jquery.mmenu.min.all.js"></script>
<script src="/home/js/template.js"></script>
<script type="text/javascript" src="/js/iziToast.js"></script>
<script src="/js/persian-date.min.js"></script>
<script src="/js/persian-datepicker.min.js"></script>
<script src="/js/jquery.loadingModal.min.js"></script>
<script src="/admin/assets/js/lightbox.min.js"></script>
<script src="/js/fun.js"></script>
<script src="/js/simpleupload.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/select2.full.min.js"></script>
<script src="/js/js5.js"></script>


{{-- {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs() !!} --}}
</body>
@include('sweetalert::alert')
</html>
