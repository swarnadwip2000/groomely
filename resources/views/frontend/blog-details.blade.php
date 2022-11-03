@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
Groomely | BLOG DETAILS
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url({{asset('frontend_assets/images/abt-banner.jpg')}}); background-position: center; background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner_banner_ontent text-center">
                            <h2>{{$blog['name']}}</h2>
                            <!--<h4>BARBERSHOP</h4>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blo_section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single_blog">
                            <h6>{{date('M d, Y', strtotime($blog['created_at']))}} <span>{{$blog->blogSlug($blog['blog_category_id'])->name}} </span></h6>
                            <h2>{{$blog['name']}}</h2>
                            <div class="blog_img_wrapper">
                                <a href="#"><img src="{{asset('frontend_assets/images/abt1.jpg')}}" class="img-fluid" /></a>
                            </div>
                            <div class="blog_desc">
                            {!! $blog['description'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_right_cate">
                            <div class="box_1">
                                <h4>Search</h4>
                                <div class="hero-form-input">
                                    <input class="hero-email-input" type="email" placeholder="SEARCH HERE" required="" tabindex="0">
                                    <button class="hero-form-submit" type="submit" tabindex="0"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                            <div class="box_1">
                                <h4>CATEGORIES</h4>
                                <ul>
                                    @foreach($blogCategories as $blogCategory)
                                    <li><a href="{{route('blog.category',['slug'=>$blogCategory['slug'], 'id'=>$blogCategory['id']])}}">{{$blogCategory['name']}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="box_1">
                                <h4>RECENT POSTS</h4>
                                <ul>
                                    @foreach($recentBlogs as $recentBlog)
                                     <li><a href="{{route('blog.details',['blogslug'=> $blog->blogSlug($recentBlog['blog_category_id'])->slug,'slug'=>$recentBlog['slug'], 'id'=>$recentBlog['id']])}}">{{$recentBlog['name']}}</a></li>
                                     @endforeach
                                </ul>
                            </div>
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