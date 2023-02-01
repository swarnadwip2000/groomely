@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | Packages
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>Groomely</h2>
                    <!--<h4>BARBERSHOP</h4>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="book_app">
    <div class="container">
        <div class="img_slide">
            @if($service['images'])
            @foreach($service['images'] as $image)
            <div class="img_slide_1">
                <img src="{{Storage::url($image['slider_image'])}}">
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="book_app_tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">DESCRIPTION</button>

                    {{-- <button class="nav-link" id="nav-specification-tab" data-bs-toggle="tab" data-bs-target="#nav-specification" type="button" role="tab" aria-controls="nav-specification" aria-selected="false">SPECIFICATION</button> --}}

                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">REVIEW</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="row align-items-center mb-3">
                                <div class="col-xl-4 col-md-4 col-4">
                                    <div class="tab-img">
                                        <img src="{{Storage::url($service->singleImage($service['id']))}}">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-8 col-8">
                                    <div class="tab-text">
                                        <h4>{{$service['name']}}</h4>
                                        <span>{{$service['user']['name']}}</span>
                                        <h5><i class="fa-solid fa-star"></i>4.84 (209.2K) </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3 col-7">
                            <div class="tab-list">
                                <ul>
                                    <!-- <li><i class="fa-solid fa-check"></i>Men's Haircut</li>
                                    <li><i class="fa-solid fa-check"></i>Beard Shape & Style</li>
                                    <li><i class="fa-solid fa-check"></i>10 min Head Massage</li> -->
                                    <li>{{substr($service['description'],0,55)}}...</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-5">
                            <div class="tab-list-right">
                                <h4><i class="fa-regular fa-clock"></i>{{date('h',strtotime($service['duration']))}} hr {{date('i',strtotime($service['duration']))}} mins</h4>
                                <h3>${{$service['rate']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-specification" role="tabpanel" aria-labelledby="nav-specification-tab">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="row align-items-center mb-3">
                                <div class="col-xl-4 col-md-4 col-4">
                                    <div class="tab-img">
                                        <img src="assets/images/tab-img.png">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-8 col-8">
                                    <div class="tab-text">
                                        <h4>Haircut + Beard + Massage</h4>
                                        <span>ABCD Barber House</span>
                                        <h5><i class="fa-solid fa-star"></i>4.84 (209.2K) </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3 col-7">
                            <div class="tab-list">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Men's Haircut</li>
                                    <li><i class="fa-solid fa-check"></i>Beard Shape & Style</li>
                                    <li><i class="fa-solid fa-check"></i>10 min Head Massage</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-5">
                            <div class="tab-list-right">
                                <h4><i class="fa-regular fa-clock"></i>3 hr 5 mins</h4>
                                <h3>$115</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="row align-items-center mb-3">
                                <div class="col-xl-4 col-md-4 col-4">
                                    <div class="tab-img">
                                        <img src="{{ asset('frontend_assets/images/tab-img.png') }}">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-8 col-8">
                                    <div class="tab-text">
                                        <h4>Haircut + Beard + Massage</h4>
                                        <span>ABCD Barber House</span>
                                        <h5><i class="fa-solid fa-star"></i>4.84 (209.2K) </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3 col-7">
                            <div class="tab-list">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Men's Haircut</li>
                                    <li><i class="fa-solid fa-check"></i>Beard Shape & Style</li>
                                    <li><i class="fa-solid fa-check"></i>10 min Head Massage</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-5">
                            <div class="tab-list-right">
                                <h4><i class="fa-regular fa-clock"></i>3 hr 5 mins</h4>
                                <h3>$115</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="book-app-calender">
    <div class="container">
        <div class="book-app-head">
            <h2>book an appointment</h2>
        </div>
        <form action="{{route('submit-appointment')}}" method="post">
            @csrf
            <input type="hidden" name="service_id" value="{{$service['id']}}">
            <div class="book-app-main">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="calender-wrap">
                            <h3>Select Date and Time</h3>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="date-wrap">
                                    <div id="datepicker"></div>
                                <input type="hidden" name="booking_date" id="booking-date" value="{{ date('m/d/Y') }}">
                                <input type="hidden" name="amount" id="" value="{{$service['rate']}}">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="time-wrap">
                                    <div class="row">
                                        @foreach($times as $time)
                                        <div class="col-xl-4 col-md-3 col-lg-3 col-6">
                                            <div class="time-pick">
                                                <input type="radio" id="tm{{$time['id']}}" name="booking_time_id" value="{{$time['id']}}" />
                                                <label for="tm{{$time['id']}}">{{$time['time']}}</label>
                                            </div>
                                        </div>
                                        @endforeach
                                        @if($errors->has('booking_time_id'))
                                        <div class="error" style="color:red;">{{ $errors->first('booking_time_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="personal-details">
                    <div class="container">
                        <div class="personal-details-head">
                            <h3>Enter Your Personal Details</h3>
                        </div>
                        <div class="row">
                            <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-4 col-12 mb-3">
                                            <input type="text" class="form-control" placeholder="FULL NAME" name="name" value="@if(Auth::check() && Auth::user()->hasRole('USER')) {{ Auth::user()->name }} @else {{old('name')}} @endif" >
                                            @if($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-xl-4 col-md-4 col-12 mb-3">
                                            <input type="text" class="form-control" placeholder="EMAIL ADDRESS" name="email" value="@if(Auth::check() && Auth::user()->hasRole('USER')) {{ Auth::user()->email }} @else {{old('email')}} @endif" >
                                            @if($errors->has('email'))
                                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-xl-4 col-md-4 col-12 mb-3">
                                            <input type="text" class="form-control" placeholder="PHONE NUMBER" name="phone" value="@if(Auth::check() && Auth::user()->hasRole('USER')) {{ Auth::user()->phone }} @else {{old('phone')}} @endif" >
                                            @if($errors->has('phone'))
                                            <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-xl-12 text-center">
                                            <div class="book-slot-btn">
                                                <button type="submit" class="btn">BOOK SLOT</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@push('script')
<script>
    $('.sdf').on('click', function() {
        var date = $('#datepicker').val();
        $('#booking-date').val(date)
    });
</script>
@endpush