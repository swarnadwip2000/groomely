<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">Syndash</h4>
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{route('admin.dashboard')}}" >
                        <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">User Management</li>
                <li class="{{Request::is('admin/customers*') ? 'mm-active' : ''}}">
                    <a href="{{route('customers.index')}}">
                        <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                        </div>
                        <div class="menu-title">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="file-manager.html">
                        <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                        </div>
                        <div class="menu-title">Business Owners</div>
                    </a>
                </li>
                

                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Menu Levels</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
                                    <ul>
                                        <li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
               
            </ul>
            <!--end navigation-->
        </div>