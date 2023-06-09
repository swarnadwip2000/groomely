<div class="main_menu_hdr">
    <div class="container-fluid">
        <nav class="px-0 px-sm-5">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo_hdr">
                    <a href="{{route('home')}}"><img src="{{asset('frontend_assets/images/logo.png')}}" alt="" /></a>
                </div>
                <div class="right_login">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="login_register">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-user"></i>
                                @if(Auth::check())
                                @if(Auth::user()->hasRole('USER'))
                                <a href="{{route('user.dashboard')}}">Dashboard</a>
                                @elseif(Auth::user()->hasRole('BUSINESS_OWNER'))
                                <a href="{{route('seller.dashboard')}}">Dashboard</a>
                                @else
                                <a href="{{route('login')}}">Login</a> /
                                <a href="{{route('register')}}">Register</a>

                                @endif
                                @else
                                <a href="{{route('login')}}">Login</a> /
                                <a href="{{route('register')}}">Register</a>

                                @endif
                            </div>
                        </div>
                        <div class="booknow_btn">
                            <a href="{{route('package')}}">BOOK AN APPOINTMENT</a>
                        </div>
                        <div class="button_container" id="toggle">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li><a href="{{route('home')}}">HOME</a></li>
                                <li><a href="{{route('about')}}">ABOUT US</a></li>
                                <li><a href="{{route('services')}}">SERVICES</a></li>
                                <li><a href="{{route('best.sellers')}}">BEST SELLERS</a></li>
                                <li><a href="{{route('blog')}}">BLOG</a></li>
                                <li><a href="{{route('gallery')}}">GALLERY</a></li>
                                <li><a href="{{route('contact')}}">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>