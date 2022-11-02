@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
BLOG DETAILS | Groomely
@endsection
@push('style')
@endpush


@section('content')
<section class="inner_banner_sec" style="background-image: url(assets/images/abt-banner.jpg); background-position: center; background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner_banner_ontent text-center">
                            <h2>Blog Details</h2>
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
                            <h6>July 26, 2021 <span>STYLING </span></h6>
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                            <div class="blog_img_wrapper">
                                <a href="#"><img src="assets/images/abt1.jpg" class="img-fluid" /></a>
                            </div>
                            <div class="blog_desc">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
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
                                    <li><a href="#">100+ Ideas for Men's Look</a></li>
                                    <li><a href="#">Must Have: Beards & Bobs</a></li>
                                    <li><a href="#">NYC Street Fashion</a></li>
                                    <li><a href="#">Summer Photoshoot</a></li>
                                    <li><a href="#">Tips for Hair Care</a></li>
                                    <li><a href="#">Trending Barber Tendencies</a></li>
                                </ul>
                            </div>
                            <div class="box_1">
                                <h4>RECENT POSTS</h4>
                                <ul>
                                     <li><a href="#">Sharp looks by professional barbers</a></li>
                                     <li><a href="#">Facial hair care and trimming at home</a></li>
                                     <li><a href="#">Getting Hot? Our barbers will make it cool</a></li>
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
                                <img src="assets/images/best_seller.png" />
                            </div>
                            <div class="single_seller">
                                <img src="assets/images/best_seller2.png" />
                            </div>
                            <div class="single_seller">
                                <img src="assets/images/best_seller3.png" />
                            </div>
                            <div class="single_seller">
                                <img src="assets/images/best_seller4.png" />
                            </div>
                            <div class="single_seller">
                                <img src="assets/images/best_seller1.png" />
                            </div>
                            <div class="single_seller">
                                <img src="assets/images/best_seller.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@push('script')
@endpush