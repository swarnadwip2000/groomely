<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <a href="{{route('home')}}"><h4 class="logo-text">Groomly</h4></a>
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{route('user.dashboard')}}" >
                        <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="{{Request::is('user/profile*') ? 'mm-active' : ''}}">
                    <a href="{{route('user.profile')}}">
                        <div class="parent-icon icon-color-5"><i class="fa fa-user"></i>
                        </div>
                        <div class="menu-title">My Profile</div>
                    </a>
                </li>
                <li class="{{Request::is('seller/manage-booking*') ? 'mm-active' : ''}}">
                    <a href="{{route('manage-booking.index')}}">
                        <div class="parent-icon icon-color-4"><i class="fa fa-calendar"></i>
                        </div>
                        <div class="menu-title">Appointments</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>