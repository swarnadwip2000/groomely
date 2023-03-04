@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
    Groomely | Best seller
@endsection
@push('styles')
@endpush


@section('content')
    <section class="inner_banner_sec" style="background-image: url({{Storage::url($bestSellerCms['banner_img'])}}); background-position: center; background-repeat: no-repeat; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_banner_ontent text-center">
                        <h2>{{ $bestSellerCms['banner_name'] }}</h2>
                        <!--<h4>BARBERSHOP</h4>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-seller">
        <div class="container">
            @if(count($details)>0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5">
                @foreach ($details as $vall)
                    <div class="col mb-4">
                        <div class="best-seller-img-box">
                            <img src="{{ Storage::url($vall['image']) }}" />
                        </div>
                    </div>
                @endforeach
            </div>
            @else
            <h3>No data found......</h3>
            @endif
        </div>
    </section>
@endsection

@push('script')
@endpush
