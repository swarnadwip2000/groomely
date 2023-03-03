@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | SERVICES
@endsection
@push('styles')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner_banner_ontent text-center">
                            <h2>Services</h2>
                            <!--<h4>BARBERSHOP</h4>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="abt_section section">
            <div class="container">
                @foreach ($servicesCms as $key => $serviceCms)
                    <div class="row align-items-center mb-5 @if(($key+1) % 2 == 0) flex-row-reverse @endif">
                    <div class="col-md-6">
                        <div class="abt_img">
                            <img src="{{ Storage::url($serviceCms->image) }}" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6" id="{{ $serviceCms->name }}">
                        <div class="abt_content">
                            <h2>{{ $serviceCms->name }}</h2>
                            <h4>{{ $serviceCms->title }}</h4>
                            {!! nl2br($serviceCms->description) !!}
                        </div>
                    </div>
                </div>
                @endforeach
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