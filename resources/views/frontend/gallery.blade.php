@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | GALLERY
@endsection
@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" rel="stylesheet">
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>Photo gallery of Groomely</h2>
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
                    @php 
                    $count = 1; 
                    $count1 = 2;
                    @endphp
                    @foreach($galleries as $key => $gallery)
                    <a href="{{Storage::url($gallery['image'])}}" data-lightbox="homePortfolio" @if($key%2 == 0) class="horizontal" @elseif($count%2 ==0) class="big" @elseif($count1%2 ==0) class="vertical" @endif>
                        <img src="{{Storage::url($gallery['image'])}}" />
                    </a>
                    @php
                     $count++;
                     $count1++;
                     @endphp
                    @endforeach
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
@endpush