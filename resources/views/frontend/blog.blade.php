@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | BLOG
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>Blog</h2>
                    <!--<h4>BARBERSHOP</h4>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blo_section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single_blog">
                    <h6>July 26, 2021 <span>STYLING </span></h6>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <div class="blog_img_wrapper">
                        <a href="blog-details.html"><img src="{{asset('frontend_assets/images/abt1.jpg')}}" class="img-fluid" /></a>
                    </div>
                    <div class="blog_desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi...</p>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="blog-details.html"><span>READ MORE</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single_blog">
                    <h6>July 26, 2021 <span>STYLING </span></h6>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <div class="blog_img_wrapper">
                        <a href="blog-details.html"><img src="{{asset('frontend_assets/images/abt2.jpg')}}" class="img-fluid" /></a>
                    </div>
                    <div class="blog_desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi...</p>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="blog-details.html"><span>READ MORE</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="single_blog">
                    <h6>July 26, 2021 <span>STYLING </span></h6>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <div class="blog_img_wrapper">
                        <a href="#"><img src="{{asset('frontend_assets/images/abt1.jpg')}}" class="img-fluid" /></a>
                    </div>
                    <div class="blog_desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi...</p>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="blog-details.html"><span>READ MORE</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single_blog">
                    <h6>July 26, 2021 <span>STYLING </span></h6>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <div class="blog_img_wrapper">
                        <a href="blog-details.html"><img src="{{asset('frontend_assets/images/abt2.jpg')}}" class="img-fluid" /></a>
                    </div>
                    <div class="blog_desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi...</p>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="blog-details.html"><span>READ MORE</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="seller_section">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-12">
                <div class="heading_hp text-center">
                    <h2>Our BEST SELLERS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus ultrices<br> risus nisi ullamcorper aenean dignissim odio tincidunt.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="best_seller_list">
                    <div class="single_seller">
                        <img src="{{asset('frontend_assets/images/best_seller.png')}}" />
                    </div>
                    <div class="single_seller">
                        <img src="{{asset('frontend_assets/images/best_seller2.png')}}" />
                    </div>
                    <div class="single_seller">
                        <img src="{{asset('frontend_assets/images/best_seller3.png')}}" />
                    </div>
                    <div class="single_seller">
                        <img src="{{asset('frontend_assets/images/best_seller4.png')}}" />
                    </div>
                    <div class="single_seller">
                        <img src="{{asset('frontend_assets/images/best_seller1.png')}}" />
                    </div>
                    <div class="single_seller">
                        <img src="{{asset('frontend_assets/images/best_seller.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
@endpush