<!DOCTYPE html>
<html lang="en">

<head>
    <META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('view/img/favicon.ico')}}" rel="icon" type="image/x-icon" class="js-site-favicon" >
    <link href="{{ asset('view/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('view/css/animate.css')}}" rel="stylesheet" >
    <link href="{{ asset('view/css/fontawesome/css/all.min.css')}}" rel="stylesheet" >   
    <link href="{{ asset('view/css/main.css')}}" rel="stylesheet">
</head>

<body class="page1">
        <div id="ajax-loading" class="text-center">
            <img class="mx-auto" src="<?php echo e(asset('images/loader.gif')); ?>" width="70" alt="" style="margin:45vh auto;">
        </div>
    @yield('content')

    <script src="{{ asset('view/js/jquery.min.js')}}"></script>
    <script src="{{ asset('view/js/popper.min.js')}}"></script>
    <script src="{{ asset('view/js/bootstrap.min.js')}}"></script>
	

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>  

    @yield('script')

</body>
