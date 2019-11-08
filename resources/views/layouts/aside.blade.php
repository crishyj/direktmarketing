@php
    $page = config('site.page');
@endphp

<nav class="sidebar sidebar-bunker">
        <div class="sidebar-header">
            <!--<a href="" class="logo"><span>bd</span>task</a>-->
            <a class="navbar-brand logo" href="{{ url('/dashboard') }}">
                 {{ config('app.name', 'Laravel') }}
            </a>
        </div><!--/.sidebar header-->
        <div class="profile-element d-flex align-items-center flex-shrink-0">
            <div class="avatar online">
                <img src="{{ asset('dash_asset/dist/img/avatar.png')}}" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="profile-text">
                <h6 class="m-0">{{ Auth::user()->name }}</h6>
                
            </div>
        </div><!--/.profile element-->
        {{-- <form class="search sidebar-form" action="" method="get" >
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search...">
                <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
            </div>
        </form> --}}
        <div class="sidebar-body">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li class="nav-label">Main Menu</li>
                    <li class="@if($page == 'dashboard') mm-active @endif">
                        <a class="has-arrow material-ripple" href="{{ route('dashboard.admin')}} ">
                            <i class="typcn typcn-home-outline mr-2"></i>
                            Dashboard
                        </a>
                        {{-- <ul class="nav-second-level">
                            <li class="mm-active"><a href="">Default</a></li>
                            <li><a href="">Dashboard Two</a></li>
                        </ul> --}}
                    </li>
                    <li class="@if($page == 'oneform') mm-active @endif">
                        <a class="has-arrow material-ripple" href=" {{ route('dashboard.oneform')}} ">
                            <i class="typcn typcn-home-outline mr-2"></i>
                            OneForm
                        </a>
                    </li>
                    <li class="@if($page == 'adword') mm-active @endif">
                        <a class="has-arrow material-ripple" href=" {{ route('dashboard.adwords')}} ">
                            <i class="typcn typcn-social-google-plus-circular"></i>
                            Google Adwords
                        </a>
                    </li>

                    <li class="@if($page == 'advertise') mm-active @endif">
                        <a class="has-arrow material-ripple" href=" {{ route('advertise.index')}} ">
                            <i class="typcn typcn-social-google-plus-circular"></i>
                            Advertise
                        </a>
                    </li>

                  
                    {{-- <li>
                        <a class="has-arrow material-ripple" href="#" >
                            <i class="typcn typcn-chart-pie-outline mr-2"></i>
                            Charts
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="">Flot Chart</a></li>
                            <li><a href="">Chart js</a></li>
                            <li><a href="">Morris Charts</a></li>
                            <li><a href="">Sparkline Charts</a></li>
                            <li><a href="">Am Charts</a></li>
                            <li><a href="">Chart Apex</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="typcn typcn-messages mr-2"></i> Chat</a></li>
                    <li>
                        <a class="has-arrow material-ripple" href="#">
                            <i class="typcn typcn-mail mr-2"></i>
                            Mailbox
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="">Mailbox</a></li>
                            <li><a href="">Mailbox Details</a></li>
                            <li><a href="">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow material-ripple" href="#">
                            <i class="typcn typcn-archive mr-2"></i>
                            Tables
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="">Bootstrap tables</a></li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Data tables</a>
                                <ul class="nav-third-level">
                                    <li><a href="">Basic initialization</a></li>
                                    <li><a href="">Data sources</a></li>
                                    <li><a href="">API</a></li>
                                    <li><a href="">Styling</a></li>
                                    <li><a href="">Advanced initialization</a></li>
                                    <li><a href="">Bootstrap4</a></li>
                                </ul>
                            </li>
                            <li><a href="">FooTable</a></li>
                            <li><a href="">Jsgrid table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow material-ripple" href="#">
                            <i class="typcn typcn-clipboard mr-2"></i>
                            Forms
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="">Basic Forms</a></li>
                            <li><a href="">Input group</a></li>
                            <li><a href="">Form Mask</a></li>
                            <li><a href="">Touchspin</a></li>
                            <li><a href="">Select</a></li>
                            <li><a href="">Cropper</a></li>
                            <li><a href="">Forms File Upload</a></li>
                            <li><a href="">CK Editor</a></li>
                            <li><a href="">Summernote</a></li>
                            <li><a href="">Form Wizaed</a></li>
                            <li><a href="">Markdown</a></li>
                            <li><a href="">Trumbowyg</a></li>
                            <li><a href="">Wysihtml5</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li>
                        <a class="has-arrow material-ripple" href="#">
                            <i class="typcn typcn-coffee mr-2"></i>
                            UI Elements
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="">Buttons</a></li>
                            <li><a href="">Badges</a></li>
                            <li><a href="">Spinners</a></li>
                            <li><a href="">Tab</a></li>
                            <li><a href="">Notification</a></li>
                            <li><a href="">Tree View</a></li>
                            <li><a href="">Progressber</a></li>
                            <li><a href="">List View</a></li>
                            <li><a href="">Ratings</a></li>
                            <li><a href="">Date & Time Picker</a></li>
                            <li><a href="">Typography</a></li>
                            <li><a href="">Modals</a></li>
                            <li><a href="">iCheck, Toggle, pagination</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow material-ripple" href="#">
                            <i class="typcn typcn-world-outline mr-2"></i>
                            Maps
                        </a>
                        <ul class="nav-second-level">
                            <li><a href="">Amcharts Map</a></li>
                            <li><a href="">gMaps</a></li>
                            <li><a href="">Data Maps</a></li>
                            <li><a href="">Jvector Maps</a></li>
                            <li><a href="">Google map</a></li>
                            <li><a href="">Snazzy Map</a></li>
                        </ul>
                    </li>                   
                    <li><a href=""><i class="typcn typcn-gift mr-2"></i>Widgets</a></li>
                    <li><a href=""><i class="typcn typcn-calendar-outline mr-2"></i>Calendar</a></li> --}}
                </ul>
            </nav>
        </div><!-- sidebar-body -->
    </nav>