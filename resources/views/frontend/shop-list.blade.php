@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
    Groomely | Shop List
@endsection
@push('styles')
@endpush


@section('content')
    <section class="inner_banner_sec" style="background-image: url({{ asset('frontend_assets/images/inner_banner.jpg') }}); background-position: top; background-repeat: no-repeat; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_banner_ontent text-center">
                        <h2>Shop List</h2>
                        <!--<h4>BARBERSHOP</h4>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-seller">
        <div class="container">
            @if(count($shops)>0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5">
                @foreach ($shops as $vall)
                    <div class="col mb-4">                  
                        <div class="best-seller-img-box">
                        <a href="{{route('shop.services',$vall['user']['id'])}}">
                            <img src="{{ Storage::url($vall['user']['profile_picture']) }}" />
                        </a>
                            <h4>{{ $vall['user']['shop_name'] }}</h4>
                        </div>
                    </div>   
                @endforeach
            </div>
            @else
            <h3>No data found......</h3>
            @endif
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

@push('script')
@endpush
