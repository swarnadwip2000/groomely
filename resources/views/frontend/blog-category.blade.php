@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | BLOG
@endsection
@push('styles')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_banner_ontent text-center">
                    <h2>{{$blogCategory['name']}}</h2>
                    <!--<h4>BARBERSHOP</h4>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blo_section section">
    <div class="container">
        @if(count($blogs)>0)
        @foreach($blogs->chunk(2) as $item)
        <div class="row">
        @foreach($item as $blog)
            <div class="col-md-6">
                <div class="single_blog">
                    <h6>{{date('M d, Y', strtotime($blog['created_at']))}} <span>{{$blog->blogSlug($blog['blog_category_id'])->name}} </span></h6>
                    <h2>{{$blog['name']}}</h2>
                    <div class="blog_img_wrapper">
                        <a href="{{route('blog.details',['blogslug'=> $blog->blogSlug($blog['blog_category_id'])->slug,'slug'=>$blog['slug'], 'id'=>$blog['id']])}}"><img src="{{Storage::url($blog['image'])}}" class="img-fluid" /></a>
                    </div>
                    <div class="blog_desc">
                        <p>{!! substr($blog['description'],0,250) !!}...</p>
                        <a class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp" href="{{route('blog.details',['blogslug'=> $blog->blogSlug($blog['blog_category_id'])->slug,'slug'=>$blog['slug'], 'id'=>$blog['id']])}}"><span>READ MORE</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
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

@push('scripts')
@endpush