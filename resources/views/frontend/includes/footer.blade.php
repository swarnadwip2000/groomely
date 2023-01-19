@php
    use App\Models\FooterCms;

    $footer_content = FooterCms::footer_contents();
    $gallery_images = FooterCms::gallery_images();                                                                                                     
@endphp
<section class="footer_section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-4">
                <div class="footer_gallery">
                        @foreach($gallery_images->chunk(3) as $item)
                    <div class="gallery_row d-flex">
                        @foreach($item as $gallery_image)
                        <div class="single_gallery_img">
                            <img src="{{Storage::url($gallery_image['image'])}}" class="img-fluid" />
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="footer_abt mt-4">
                    <img src="{{asset('frontend_assets/images/logo.png')}}" />
                    <p class="d-none d-md-block">{{ $footer_content['copyright_content'] }}</p>
                    <ul class="social_link">
                        <li><a href="{{ $footer_content['facebook_link'] }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $footer_content['instagram_link'] }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $footer_content['youtube_link'] }}"><i class="fab fa-youtube"></i></a></li>
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
                        {{-- <span><i class="fas fa-map-marker-alt"></i></span> --}}
                        {{-- <p>{{ $footer_content['address'] }}</p> --}}
                    </div>
                    <div class="single_foo_address">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <p>{{ $footer_content['phone'] }}</p>
                    </div>
                    <div class="single_foo_address">
                        <span><i class="fas fa-envelope"></i></span>
                        <p>{{ $footer_content['email'] }}</p>
                    </div>
                </div>
                <div class="footer_abt mt-4 d-block d-md-none">
                    <p>{{ $footer_content['copyright_content'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>