@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | About us
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>About</h2>
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
                    <img src="{{asset('frontend_assets/images/abt1.jpg')}}" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="abt_content">
                    <h2>Story of Groomly</h2>
                    <h4>More than just a hair salon, we provide classic barbershop service with legendary style.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi. Proin dui non, risus tincidunt. Nunc id sollicitudin diam aliquet volutpat nam rhoncus morbi. Non sit ac pulvinar commodo tincidunt magnis nascetur. Scelerisque eget accumsan eget nisl vestibulum, tristique praesent tempus eget. Vestibulum viverra ut dapibus aliquam nunc auctor. Orci ultrices pellentesque sed ultricies ipsum quis neque, elementum. Enim donec sed pellentesque aliquet mi ultricies turpis non maecenas. Purus aliquet iaculis amet, vel eleifend ut elit. Vulputate amet, metus purus aenean sapien tempor, neque turpis risus. Egestas id urna ultrices dignissim.</p>
                    <p>Libero aenean vestibulum placerat ultrices nullam. Semper sit ac a iaculis et morbi mattis. Pellentesque lacus, id semper id lectus ac. Dui elit pellentesque at mi quam tincidunt praesent a. Condimentum pretium aliquet aenean eu tincidunt vitae. Ac auctor sapien pretium in. Egestas metus pulvinar eu eu maecenas et. Vel fringilla quam mattis mollis vitae eu. Scelerisque dignissim turpis urna egestas suspendisse eget non. Egestas mattis felis platea sed in morbi aliquam.</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="cta_sec" style="background-image: url({{asset('frontend_assets/images/abt-cta.jpg')}}); background-repeat: no-repeat; background-size: cover">
                    <div class="cta_content text-center">
                        <h4>BOOK AN APPOINTMENT</h4>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="{{route('package')}}"><span>Book Your Appointment</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="abt_content_type2">
                    <div class="abt_img_type2 float-end">
                        <img src="{{asset('frontend_assets/images/abt2.jpg')}}" class="img-fluid" />
                    </div>
                    <h2>MIssion & vision</h2>
                    <h4>More than just a hair salon, we provide classic barbershop service with legendary style.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi. Proin dui non, risus tincidunt. Nunc id sollicitudin diam aliquet volutpat nam rhoncus morbi. Non sit ac pulvinar commodo tincidunt magnis nascetur. Scelerisque eget accumsan eget nisl vestibulum, tristique praesent tempus eget. Vestibulum viverra ut dapibus aliquam nunc auctor. Orci ultrices pellentesque sed ultricies ipsum quis neque, elementum. Enim donec sed pellentesque aliquet mi ultricies turpis non maecenas. Purus aliquet iaculis amet, vel eleifend ut elit. Vulputate amet, metus purus aenean sapien tempor, neque turpis risus. Egestas id urna ultrices dignissim.</p>
                    <p>Libero aenean vestibulum placerat ultrices nullam. Semper sit ac a iaculis et morbi mattis. Pellentesque lacus, id semper id lectus ac. Dui elit pellentesque at mi quam tincidunt praesent a. Condimentum pretium aliquet aenean eu tincidunt vitae. Ac auctor sapien pretium in. Egestas metus pulvinar eu eu maecenas et. Vel fringilla quam mattis mollis vitae eu. Scelerisque dignissim turpis urna egestas suspendisse eget non. Egestas mattis felis platea sed in morbi aliquam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi. Proin dui non, risus tincidunt. Nunc id sollicitudin diam aliquet volutpat nam rhoncus morbi. Non sit ac pulvinar commodo tincidunt magnis nascetur. Scelerisque eget accumsan eget nisl vestibulum, tristique praesent tempus eget. Vestibulum viverra ut dapibus aliquam nunc auctor. Orci ultrices pellentesque sed ultricies ipsum quis neque, elementum. Enim donec sed pellentesque aliquet mi ultricies turpis non maecenas. Purus aliquet iaculis amet, vel eleifend ut elit. Vulputate amet, metus purus aenean sapien tempor, neque turpis risus. Egestas id urna ultrices dignissim.</p>
                    <p>Libero aenean vestibulum placerat ultrices nullam. Semper sit ac a iaculis et morbi mattis. Pellentesque lacus, id semper id lectus ac. Dui elit pellentesque at mi quam tincidunt praesent a. Condimentum pretium aliquet aenean eu tincidunt vitae. Ac auctor sapien pretium in. Egestas metus pulvinar eu eu maecenas et. Vel fringilla quam mattis mollis vitae eu. Scelerisque dignissim turpis urna egestas suspendisse eget non. Egestas mattis felis platea sed in morbi aliquam.</p>
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