<section class="footer_section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-4">
                <div class="footer_gallery">
                    <div class="gallery_row d-flex">
                        <div class="single_gallery_img">
                            <img src="{{asset('frontend_assets/images/gallery.jpg')}}" class="img-fluid" />
                        </div>
                        <div class="single_gallery_img">
                            <img src="{{asset('frontend_assets/images/gallery1.jpg')}}" class="img-fluid" />
                        </div>
                        <div class="single_gallery_img">
                            <img src="{{asset('frontend_assets/images/gallery2.jpg')}}" class="img-fluid" />
                        </div>
                    </div>
                    <div class="gallery_row d-flex">
                        <div class="single_gallery_img">
                            <img src="{{asset('frontend_assets/images/gallery4.jpg')}}" class="img-fluid" />
                        </div>
                        <div class="single_gallery_img">
                            <img src="{{asset('frontend_assets/images/gallery5.jpg')}}" class="img-fluid" />
                        </div>
                        <div class="single_gallery_img">
                            <img src="{{asset('frontend_assets/images/gallery1.jpg')}}" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="footer_abt mt-4">
                    <img src="{{asset('frontend_assets/images/logo.png')}}" />
                    <p class="d-none d-md-block">Copyright © 2022. All Rights Reserved. Designed & Development by Excellis IT.</p>
                    <ul class="social_link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="footer_menu_section">
                    <ul>
                        <li><a href="{{route('home')}}">HOME</a></li>
                        <li><a href="{{route('about')}}">ABOUT US</a></li>
                        <li><a href="{{route('services')}}">SERVICES</a></li>
                        <li><a href="{{route('best.sellers')}}">BEST SELLERS</a></li>
                        <li><a href="{{route('blog')}}">BLOG</a></li>
                        <li><a href="{{route('gallery')}}">GALLERY</a></li>
                        <li><a href="{{route('contact')}}">CONTACT US</a></li>
                    </ul>
                </div>
                <div class="footer_contatc_details">
                    <div class="single_foo_address">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>3962 Circle Lake Drive Palm Beach FL 33417 USA</p>
                    </div>
                    <div class="single_foo_address">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <p>+1 918 519 8362</p>
                    </div>
                    <div class="single_foo_address">
                        <span><i class="fas fa-envelope"></i></span>
                        <p>support@groomely.com</p>
                    </div>
                </div>
                <div class="footer_abt mt-4 d-block d-md-none">
                    <p>Copyright © 2022. All Rights Reserved. Designed & Development by Excellis IT.</p>
                </div>
            </div>
        </div>
    </div>
</section>