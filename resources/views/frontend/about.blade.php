@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | About us
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{Storage::url($aboutCms['banner_img'])}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>{{ $aboutCms['banner_name'] }}</h2>
                    <!--<h4>BARBERSHOP</h4>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="abt_section section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <div class="abt_img">
                    <img src="{{Storage::url($aboutCms['section_1_img'])}}" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="abt_content">
                    <h2>{{ $aboutCms['section_1_name'] }}</h2>
                    <h4>{{ $aboutCms['section_1_title'] }}</h4>
                    {!! nl2br($aboutCms['section_1_description']) !!}
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="cta_sec" style="background-image: url({{Storage::url($aboutCms['section_2_img'])}}); background-repeat: no-repeat; background-size: cover">
                    <div class="cta_content text-center">
                        <h4>{{ $aboutCms['section_2_title'] }}</h4>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="{{route('package')}}"><span>Book Your Appointment</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="abt_content_type2">
                    <div class="abt_img_type2 float-end">
                        <img src="{{Storage::url($aboutCms['section_3_img'])}}" class="img-fluid" />
                    </div>
                    <h2>{{ $aboutCms['section_3_name'] }}</h2>
                    <h4>{{ $aboutCms['section_3_title'] }}</h4>
                    {!! nl2br($aboutCms['section_3_description']) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="seller_section">
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
</section> -->
@endsection

@push('script')
@endpush