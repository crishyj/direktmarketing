<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link href="{{ asset('dash_asset/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/typicons/src/typicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/themify-icons/themify-icons.min.css')}}" rel="stylesheet">  

    <!--Start Your Custom Style Now-->
    <link href="{{ asset('dash_asset/dist/css/style.css')}}" rel="stylesheet">
  </head>
  <body>
    @yield('content')

    <script src="{{ asset('dash_asset/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('dash_asset/dist/js/popper.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>   

    <!--Page Active Scripts(used by this page)-->

    <!--Page Scripts(used by all page)-->
    <script src="{{ asset('dash_asset/dist/js/sidebar.js')}}"></script>

    @yield('after_script')
    
  </body>
</html>