<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
        </div>
        <div>
            <a href="{{ route('home') }}"><h4 class="logo-text">Groomely</h4></a>
        </div>
        <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.index') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Manage Admins</div>
            </a>
        </li>
        <li class="menu-label">User Management</li>
        <li class="{{ Request::is('admin/customers*') ? 'mm-active' : '' }}">
            <a href="{{ route('customers.index') }}">
                <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Manage Customers</div>
            </a>
        </li>
        <li class="{{ Request::is('admin/customers-order*') ? 'mm-active' : '' }}">
            <a href="{{ route('customer-order.list') }}">
                <div class="parent-icon icon-color-4"><i class="fas fa-tag"></i>
                </div>
                <div class="menu-title">Customer Orders</div>
            </a>
        </li>
        <li class="{{ Request::is('admin/business-owner*') ? 'mm-active' : '' }}">
            <a href="{{ route('business-owner.index') }}">
                <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                </div>
                <div class="menu-title">Manage Barbers</div>
            </a>
        </li>
        
        <li class="menu-label">Service Section</li>
        <li class="{{ Request::is('admin/category*') ? 'mm-active' : '' }}">
            <a href="{{ route('category.index') }}">
                <div class="parent-icon icon-color-6"><i class="fa fa-list-alt"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-12"><i class="fas fa-cut"></i>
                </div>
                <div class="menu-title">Service</div>
            </a>

            <ul>
                <li class="{{ Request::is('admin/service-type*') ? 'mm-active' : '' }}"> <a class=""
                    href="{{ route('service-type.index') }}"><i class="bx bx-right-arrow-alt"></i>Type</a>
                <li class="{{ Request::is('admin/service*') ? 'mm-active' : '' }}"> <a class=""
                    href="{{ route('service.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage</a>
                </li>
            </ul>
        </li>
        
        <li class="menu-label">Others</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Blogs</div>
            </a>
            <ul>
                <li class="{{ Request::is('admin/blog-category*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('blog-category.index') }}"><i class="bx bx-right-arrow-alt"></i>Category</a>
                <li class="{{ Request::is('admin/blogs*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('blogs.index') }}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('admin/gallery*') ? 'mm-active' : '' }}">
            <a href="{{ route('gallery.index') }}">
                <div class="parent-icon icon-color-1"><i class="fa fa-image"></i>
                </div>
                <div class="menu-title">Gallery</div>
            </a>
        </li>
        <li class="{{ Request::is('admin/contact-us*') ? 'mm-active' : '' }}">
            <a href="{{ route('contact-us.index') }}">
                <div class="parent-icon icon-color-9"><i class="fa fa-phone"></i>
                </div>
                <div class="menu-title">Contact Us</div>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-10"><i class="fas fa-list"></i>
                </div>
                <div class="menu-title">CMS</div>
            </a>
            <ul>
                <li> <a class="{{ Request::is('admin/cms/home-cms*') ? 'mm-active' : '' }}"
                        href="{{ route('home.cms') }}"><i class="bx bx-right-arrow-alt"></i>Home Page</a>
                <li class="{{ Request::is('admin/cms/about-cms*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('about.cms') }}"><i class="bx bx-right-arrow-alt"></i>About Us Page</a>
                <li class="{{ Request::is('admin/cms/best-sellers-cms*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('best-seller.cms') }}"><i class="bx bx-right-arrow-alt"></i>Best Seller Page</a>
                </li>
                <li class="{{ Request::is('admin/cms/service-cms*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('service.cms') }}"><i class="bx bx-right-arrow-alt"></i>Service Page</a>
                </li>
                <li class="{{ Request::is('admin/cms/contact-us-cms*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('contact-us.cms') }}"><i class="bx bx-right-arrow-alt"></i>Contact Us Page</a>
                </li>
                <li class="{{ Request::is('admin/cms/footer-cms*') ? 'mm-active' : '' }}"> <a class=""
                        href="{{ route('footer.cms') }}"><i class="bx bx-right-arrow-alt"></i>Footer Content</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
