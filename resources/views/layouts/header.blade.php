<nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
        <div class="sidebar-toggle-icon" id="sidebarCollapse">
            sidebar toggle<span></span>
        </div>
        <div class="d-flex flex-grow-1">
            <ul class="navbar-nav flex-row align-items-center ml-auto">
                <li class="nav-item dropdown quick-actions">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-th-large-outline"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" >
                        <div class="nav-grid-row row">
                            <a href="#" class="icon-menu-item col-4">
                                <i class="typcn typcn-cog-outline d-block"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#" class="icon-menu-item col-4">
                                <i class="typcn typcn-group-outline d-block"></i>
                                <span>Users</span>
                            </a>
                            <a href="#" class="icon-menu-item col-4">
                                <i class="typcn typcn-puzzle-outline d-block"></i>
                                <span>Components</span>
                            </a>
                            <a href="#" class="icon-menu-item col-4">
                                <i class="typcn typcn-chart-bar-outline d-block"></i>
                                <span>Profits</span>
                            </a>
                            <a href="#" class="icon-menu-item col-4">
                                <i class="typcn typcn-time d-block"></i>
                                <span>New Event</span>
                            </a>
                            <a href="#" class="icon-menu-item col-4">
                                <i class="typcn typcn-edit d-block"></i>
                                <span>Tasks</span>
                            </a>
                        </div>
                    </div>
                </li>
               
                {{-- <li class="nav-item dropdown notification">
                    <a class="nav-link dropdown-toggle badge-dot" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="notification-title">Notifications</h6>
                        <p class="notification-text">You have 2 unread notification</p>
                        <div class="notification-list">
                            <div class="media new">
                                <div class="img-user"><img src="{{ asset('dash_asset/dist/img/avatar.png')}}" alt=""></div>
                                <div class="media-body">
                                    <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
                                    <span>Mar 15 12:32pm</span>
                                </div>
                            </div>
                            <div class="media new">
                                <div class="img-user online"><img src="{{ asset('dash_asset/dist/img/avatar2.png')}}" alt=""></div>
                                <div class="media-body">
                                    <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
                                    <span>Mar 13 04:16am</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="img-user"><img src="{{ asset('dash_asset/dist/img/avatar3.png')}}" alt=""></div>
                                <div class="media-body">
                                    <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
                                    <span>Mar 13 02:56am</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="img-user"><img src="{{ asset('dash_asset/dist/img/avatar4.png')}}" alt=""></div>
                                <div class="media-body">
                                    <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
                                    <span>Mar 12 10:40pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                    </div>
                </li> --}}
                <li class="nav-item dropdown user-menu">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                       
                        <i class="typcn typcn-user-add-outline"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" >
                        <div class="dropdown-header d-sm-none">
                            <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="user-header">
                          
                            <h6>{{ Auth::user()->name }}</h6>
                           
                        </div>
                        {{-- <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="#" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
                        <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="typcn typcn-key-outline"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </div>
                </li>
            </ul>
            <div class="nav-clock">
                <div class="time">
                    <span class="time-hours"></span>
                    <span class="time-min"></span>
                    <span class="time-sec"></span>
                </div>
            </div>
        </div>
    </nav>