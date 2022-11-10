<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">Groomly</h4>
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
                        <div class="menu-title">Manage Customers</div>
                    </a>
                </li>
                <li class="{{Request::is('admin/business-owner*') ? 'mm-active' : ''}}">
                    <a href="{{route('business-owner.index')}}">
                        <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                        </div>
                        <div class="menu-title">Manage Barbers</div>
                    </a>
                </li>
                <li class="menu-label">Service Category Section</li>
                <li class="{{Request::is('admin/category*') ? 'mm-active' : ''}}">
                    <a href="{{route('category.index')}}">
                        <div class="parent-icon icon-color-6"><i class="fa fa-list-alt"></i>
                        </div>
                        <div class="menu-title">Category</div>
                    </a>
                </li>

                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Blogs</div>
                    </a>
                    <ul>
                        <li> <a class="{{Request::is('admin/blog-category*') ? 'mm-active' : ''}}" href="{{route('blog-category.index')}}"><i class="bx bx-right-arrow-alt"></i>Category</a>
                        <li class="{{Request::is('admin/blogs*') ? 'mm-active' : ''}}"> <a class="" href="{{route('blogs.index')}}"><i class="bx bx-right-arrow-alt"></i>List</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('admin/contact-us*') ? 'mm-active' : ''}}">
                    <a href="{{route('contact-us.index')}}">
                        <div class="parent-icon icon-color-4"><i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="menu-title">Contact Us</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>