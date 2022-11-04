<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <div class="flex-grow-1 search-bar">
            <div class="input-group">
                
            </div>
        </div>
        <div class="right-topbar ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:;"> <i class="bx bx-search vertical-align-middle"></i>
                    </a>
                </li>
                
                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                        <div class="d-flex user-box align-items-center">
                            <div class="user-info">
                                <p class="user-name mb-0">{{Auth::user()->name}}</p>
                                <p class="designattion mb-0">Available</p>
                            </div>
                            @if(!Auth::user()->profile_picture)
                            <img src="{{asset('admin_assets/images/avatars/avatar-1.png')}}" class="user-img" alt="user avatar">
                            @else
                            <img src="{{Storage::url(Auth::user()->profile_picture)}}" class="user-img" alt="user avatar">
                            @endif
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="bx bx-user"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="{{route('admin.dashboard')}}"><i class="bx bx-tachometer"></i><span>Dashboard</span></a>
                        <div class="dropdown-divider mb-0"></div> <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="bx bx-power-off"></i><span>Logout</span></a>
                    </div>
                </li>
                
            </ul>
        </div>
    </nav>
</header>