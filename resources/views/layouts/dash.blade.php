<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link href="{{ asset('view/img/favicon.ico')}}" rel="icon" type="image/x-icon" class="js-site-favicon" >
    <link href="{{ asset('dash_asset/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/typicons/src/typicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/themify-icons/themify-icons.min.css')}}" rel="stylesheet">  
    <link href="{{ asset('dash_asset/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash_asset/plugins/modals/component.css')}}" rel="stylesheet">

    <!--Start Your Custom Style Now-->
    <link href="{{ asset('dash_asset/dist/css/style.css')}}" rel="stylesheet">
  </head>
</head>
<body>
    <div id="app">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <div class="wrapper">
            @include('layouts.aside')     
            <div class="content-wrapper">
                <div class="main-content">
                    @include('layouts.header')  
                    <main class="py-0">
                        @yield('content')
                    </main>                
                </div>
            </div>
            <div class="overlay"></div>
    </div>
    <script src="{{ asset('dash_asset/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('dash_asset/dist/js/popper.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>   

  
    <script src="{{ asset('dash_asset/plugins/chartJs/Chart.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/sparkline/sparkline.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/datatables/dataTables.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/modals/classie.js')}}"></script>
    <script src="{{ asset('dash_asset/plugins/modals/modalEffects.js')}}"></script>
    <!--Page Active Scripts(used by this page)-->
    {{-- <script src="{{ asset('dash_asset/dist/js/pages/dashboard.js')}}"></script> --}}
    <!--Page Scripts(used by all page)-->
    <script src="{{ asset('dash_asset/dist/js/sidebar.js')}}"></script>
	

    @yield('after_script')
</body>
</html>
