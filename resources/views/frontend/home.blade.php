@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | HOME
@endsection
@push('style')
@endpush


@section('content')
<section class="banner__slider banner_sec">
    <div class="slider stick-dots">
        <div class="slide">
            <div class="slide__img">
                <img src="" alt="" data-lazy="{{ Storage::url($homeCms['banner_img']) }}" class="full-image animated" data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content">
                <div class="slide__content--headings text-center">
                    <span class="animated top_titel" data-animation-in="fadeInUp" data-delay-in="0.3">{{ $homeCms['banner_content_1'] }} </span>
                    <h2 class="animated title" data-animation-in="fadeInUp">{{ $homeCms['banner_content_2'] }} </h2>
                    <!-- <p class="animated top-title" data-animation-in="fadeInUp" data-delay-in="0.3">BARBERSHOP</p> -->
                    <div class="hero-text mb-3">
                        <form action="/">
                            <div class="hero-form-input" data-animation-in="fadeInUp" data-delay-in="0.3" style="opacity: 0; animation-delay: 0.3s;">
                                <input class="hero-email-input" type="email" placeholder="SEARCH HERE" required="" tabindex="0">
                                <button class="hero-form-submit" type="submit" tabindex="0"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_sec">
    <section class="before_about_sec">
        <div class="container">
            <div class="box_abo">
                <div class="catego heading_hp">
                    <h2>{{ $homeCms['section_1_title'] }} </h2>
                    <p>{{ $homeCms['section_1_description'] }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                    @foreach($categories as $category)
                    <div class="min_box">
                        <a href="{{route('service.category',['slug'=>$category->slug, 'id'=>$category->id])}}">
                            <img src="{{Storage::url($category['icon'])}}" alt="" />
                            <p>{{$category['name']}}</p>
                        </a>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 p-2 p-lg-0">
                <div class="img_part">
                    <img src="{{ Storage::url($homeCms['section_2_img'] ) }}" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_text heading_hp">
                    <span>{{ $homeCms['section_2_name'] }} </span>
                    <h2>{{ $homeCms['section_2_title'] }} </h2>
                    <p>{{ $homeCms['section_2_description'] }} </p>
                </div>
                <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="{{route('about')}}"><span>READ MORE</span></a>
            </div>
        </div>
    </div>
</section>
<section class="services_sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="services_text heading_hp">
                    <h2>{{ $homeCms['section_3_title'] }} </h2>
                    <p>{{ $homeCms['section_3_description'] }} </p>
                </div>
                <div class="four_service">
                    <div class="row">
                        @foreach ($servicesCms as $serviceCms)
                            <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="one_f">
                                <div class="bg_image_one"><img src="{{ Storage::url($serviceCms->image) }}" /></div>
                                <div class="icon_boxs">
                                    <img src="{{ Storage::url($serviceCms->icon) }}" alt="" />
                                </div>
                                <div class="tre_et">
                                    <h5>{{ $serviceCms->name }}</h5>
                                    <p>{{substr($serviceCms['description'],0,50)}}...</p>
                                </div>
                                <a href="{{route('services')}}#{{ $serviceCms->name }}">VIEW ALL</a>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="off_banner_sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <a href="">
                    <img src="{{asset('frontend_assets/images/off_bnr.jpg')}}" />
                </a>
            </div>
            <div class="col-lg-4">
                <a href="">
                    <img src="{{asset('frontend_assets/images/off_bnr1.jpg')}}" />
                </a>
            </div>
            <div class="col-lg-4">
                <a href="">
                    <img src="{{asset('frontend_assets/images/off_bnr2.jpg')}}" />
                </a>
            </div>
        </div>
    </div>
</section>
<section class="featured_sec">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="heading_hp">
                    <h2>{{ $homeCms['section_4_title'] }}</h2>
                    <p>{{ $homeCms['section_4_description'] }}</p>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="feature stick-dots">
                @foreach($services as $service)
                <div class="slide_feature">
                    <div class="feature_box">
                        <div class="top_pack">Package</div>
                        <div class="white_box_pack">
                            <h4>{{$service['name']}}</h4>
                            <h5>{{$service['user']['shop_name']}}</h5>
                            <p class="star">@if($service->ratingService($service['id']) !='')<i class="fa-solid fa-star"></i> {{$service->ratingService($service['id'])}} ({{$service->review()->count()}})@endif</p>
                            <div class="d-flex align-items-center py-2">
                                <div class="price">${{$service['rate']}}</div>
                                <p><i class="fa-regular fa-clock"></i>{{date('h',strtotime($service['duration']))}} hr {{date('i',strtotime($service['duration']))}} mins</p>
                            </div>
                            <ul>
                                <!-- <li><i class="fa-solid fa-check"></i> Men's Haircut</li>
                                <li><i class="fa-solid fa-check"></i> Beard Shape & Style</li>
                                <li><i class="fa-solid fa-check"></i> 10 min Head Massage</li> -->
                                <li>{{substr($service['description'],0,45)}}...</li>
                            </ul>
                            <a href="{{route('book-now', base64_encode($service['id']))}}" class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="book-an-appointment.html"><span>BOOK NOW</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="become_seller_section">
    <div class="container">
        <div class="become_sell">
            <img src="{{ Storage::url( $homeCms['section_5_img'] ) }}" class="bg_img_be" alt="" />
            <div class="row align-items-center ">
                <div class="col-lg-7 col-xxl-6">
                    <div class="become_text">
                        <div class="heading_hp text-left">
                            <h2>{{ $homeCms['section_5_title'] }}</h2>
                            <p>{{ $homeCms['section_5_description'] }}</p>
                        </div>
                        @if(!Auth::check() || !Auth::user()->hasRole('BUSINESS_OWNER'))
                        <a class="buttonfx slidebottomleft" href="{{route('register')}}"><span>REGISTER NOW</span></a>
                        @else
                        <a class="buttonfx slidebottomleft" href="{{route('seller.dashboard')}}"><span>Dashboard</span></a>
                        @endif

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
                    @foreach($details as $vall)
                    
                    <div class="single_seller">
                        <img src="{{ Storage::url($vall['image']) }}" />
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
@endpush