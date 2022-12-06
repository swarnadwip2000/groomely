@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | CONTACT US
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us">
    <div class="container">
        <div class="contact-wrap-main">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="contact-left">
                        <h2>{{ $contactUs['title'] }}</h2>
                        <p>{!! nl2br($contactUs['description']) !!}</p>
                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="form-group-wrap">
                                            <label for="First-Name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="First-Name" value="{{old('first_name')}}" name="first_name" placeholder="">
                                        </div>
                                        @if($errors->has('first_name'))
                                        <div class="error" style="color:red;">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="form-group-wrap">
                                            <label for="Last-Name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" id="Last-Name" placeholder="">
                                        </div>
                                        @if($errors->has('last_name'))
                                        <div class="error" style="color:red;">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="form-group-wrap">
                                            <label for="Email-Id" class="form-label">Email Id</label>
                                            <input type="text" class="form-control" name="email" value="{{old('email')}}" id="First-Name" placeholder="">
                                        </div>
                                        @if($errors->has('email'))
                                        <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-12">
                                        <div class="form-group-wrap">
                                            <label for="Phone Number" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="Last-Name" placeholder="">
                                        </div>
                                        @if($errors->has('phone'))
                                        <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group-wrap">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" name="message" id="message" rows="3">{{old('first_name')}}</textarea>
                                            @if($errors->has('message'))
                                            <div class="error" style="color:red;">{{ $errors->first('message') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12 text-center">
                                        <div class="send-msg">
                                            <button type="submit" class="btn">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="contact-right">
                        <div class="contact-info d-flex justify-content-start align-items-start">
                            <div class="con-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="con-text">
                                <h3>VISIT US</h3>
                                <p> {{ $contactUs['visit_us'] }}</p>
                            </div>
                        </div>
                        <div class="contact-info d-flex justify-content-start align-items-start">
                            <div class="con-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="con-text">
                                <h3>CALL US</h3>
                                <a href="tel:{{ $contactUs['call_us'] }}">{{ $contactUs['call_us'] }}</a>
                            </div>
                        </div>
                        <div class="contact-info d-flex justify-content-start align-items-start">
                            <div class="con-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="con-text">
                                <h3>MAIL US</h3>
                                <a href="mailto:{{ $contactUs['mail_us'] }}">{{ $contactUs['mail_us'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-sec">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.5207683352505!2d-95.68270458444655!3d35.811696630412676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b67f0f04e3d309%3A0xa5e5c7b6fc64d3b0!2s502%20W%20Skelly%20Rd%2C%20Haskell%2C%20OK%2074436%2C%20USA!5e0!3m2!1sen!2sin!4v1664200820562!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection

@push('script')
@endpush