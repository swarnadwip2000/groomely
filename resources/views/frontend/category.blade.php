@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | Packages {{$category['name']}}
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/inner_banner.jpg')}}); background-position: top; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>{{$category['name']}}</h2>
                    <!--<h4>BARBERSHOP</h4>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="package_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="heading_hp text-center">
                    <h2>PACKAGE</h2>
                    <!-- <p>(Showing 1 – 9 Packages of {{$services->count()}} Packages)</p> -->
                </div>
            </div>
        </div>
        <div class="row">
        @if(count($services)>0)
        @foreach($services as $service)
            <div class="col-md-3">
                <div class="feature_box">
                    <div class="top_pack">Package</div>
                    <div class="white_box_pack">
                    <h4>{{$service['name']}}</h4>
                        <p class="star"><i class="fa-solid fa-star"></i> 4.84 (209.2K)</p>
                        <div class="d-flex align-items-center py-2">
                            <div class="price">${{$service['rate']}}</div>
                            <p><i class="fa-regular fa-clock"></i> {{date('h',strtotime($service['duration']))}} hr {{date('i',strtotime($service['duration']))}} mins</p>
                        </div>
                        <ul>
                            <!-- <li><i class="fa-solid fa-check"></i> Men's Haircut</li>
                            <li><i class="fa-solid fa-check"></i> Beard Shape & Style</li>
                            <li><i class="fa-solid fa-check"></i> 10 min Head Massage</li> -->
                            <li>{{substr($service['description'],0,55)}}...</li>
                        </ul>
                        <a href="{{route('book-now', base64_encode($service['id']))}}" class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="book-an-appointment.html"><span>BOOK NOW</span></a>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <p>There is no packages..</p>
        @endif
        </div>
        {!! $services->links() !!}
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