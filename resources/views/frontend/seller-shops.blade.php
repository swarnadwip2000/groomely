@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
    Groomely | Services
@endsection
@push('styles')
@endpush


@section('content')
    <section class="inner_banner_sec"
        style="background-image: url({{ asset('frontend_assets/images/inner_banner.jpg') }}); background-position: top; background-repeat: no-repeat; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_banner_ontent text-center">
                        <h2>@if($shop_name !=''){{ $shop_name->offer_amount }} @endif</h2>
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
                        <h2>Services</h2>
                        {{-- <!-- <p>(Showing 1 – 9 Packages of {{ $seller_services->count() }} Packages)</p> --> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($seller_services) > 0)
                    @foreach ($seller_services as $service)
                        <div class="col-md-3">
                            <div class="feature_box">
                                <div class="top_pack">Package</div>
                                <div class="white_box_pack">
                                    <h4>{{$service['service']['additionalService']['name']}}</h4>
                                    <p>{{$service['service']['category']['name']}}</p>
                                    <p class="star">@if($service->ratingService($service['service_id']) !='')<i class="fa-solid fa-star"></i> {{$service->ratingService($service['service_id'])}} ({{$service->service->review()->count()}})@endif</p>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="price"></div>
                                        <p><i class="fa-regular fa-clock"></i>
                                            {{ date('h', strtotime($service['service']['duration'])) }} hr
                                            {{ date('i', strtotime($service['service']['duration'])) }} mins</p>
                                    </div>
                                    <ul>
                                        <!-- <li><i class="fa-solid fa-check"></i> Men's Haircut</li>
                                <li><i class="fa-solid fa-check"></i> Beard Shape & Style</li>
                                <li><i class="fa-solid fa-check"></i> 10 min Head Massage</li> -->
                                        <li>{{ Str::limit($service['service']['description'], 50) }}...</li>
                                        
                                    </ul>
                                    <a href="{{route('book-now', base64_encode($service['service_id']))}}"
                                        class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp"><span>BOOK NOW</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>There is no services..</p>
                @endif
            </div>
            {!! $seller_services->links() !!}
        </div>
    </section>


    <section class="seller_section">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-12">
                    <div class="heading_hp text-center">
                        <h2>{{$bestSellerCms['section_title']}}</h2>
                        <p>{{$bestSellerCms['section_description']}}</p>
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

@push('scripts')
@endpush
