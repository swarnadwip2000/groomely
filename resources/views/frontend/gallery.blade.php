@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | GALLERY
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>Photo gallery of groomly</h2>
                    <!--<h4>BARBERSHOP</h4>-->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery_section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gallery_inner">
                    <a href="{{asset('frontend_assets/images/gallery/gallery1.jpg')}}" data-lightbox="homePortfolio">
                        <img src="{{asset('frontend_assets/images/gallery/gallery1.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery2.jpg')}}" data-lightbox="homePortfolio" class="vertical">
                        <img src="{{asset('frontend_assets/images/gallery/gallery2.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery3.jpg')}}" data-lightbox="homePortfolio" class="horizontal">
                        <img src="{{asset('frontend_assets/images/gallery/gallery3.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery4.jpg')}}" data-lightbox="homePortfolio">
                        <img src="{{asset('frontend_assets/images/gallery/gallery4.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery5.jpg')}}" data-lightbox="homePortfolio">
                        <img src="{{asset('frontend_assets/images/gallery/gallery5.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery6.jpg')}}" data-lightbox="homePortfolio" class="big">
                        <img src="{{asset('frontend_assets/images/gallery/gallery6.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery7.jpg')}}" data-lightbox="homePortfolio">
                        <img src="{{asset('frontend_assets/images/gallery/gallery7.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery8.jpg')}}" data-lightbox="homePortfolio" class="vertical">
                        <img src="{{asset('frontend_assets/images/gallery/gallery8.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery9.jpg')}}" data-lightbox="homePortfolio">
                        <img src="{{asset('frontend_assets/images/gallery/gallery9.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery10.jpg')}}" data-lightbox="homePortfolio" class="horizontal">
                        <img src="{{asset('frontend_assets/images/gallery/gallery10.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery11.jpg')}}" data-lightbox="homePortfolio">
                        <img src="{{asset('frontend_assets/images/gallery/gallery11.jpg')}}" />
                    </a>

                    <a href="{{asset('frontend_assets/images/gallery/gallery12.jpg')}}" data-lightbox="homePortfolio" class="">
                        <img src="{{asset('frontend_assets/images/gallery/gallery12.jpg')}}" />
                    </a>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus ultrices risus nisi ullamcorper aenean dignissim odio tincidunt.</p>
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