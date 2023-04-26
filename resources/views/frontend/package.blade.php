@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('title')
    Groomely | Packages
@endsection
@push('styles')
@endpush


@section('content')
    <section class="inner_banner_sec"
        style="background-image: url({{ asset('frontend_assets/images/inner_banner.jpg') }}); background-position: top; background-repeat: no-repeat; background-size: cover">
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

    <section class="package_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="heading_hp text-center">
                        <h2>PACKAGE</h2>
                        <!-- <p>(Showing 1 – 9 Packages of {{ $services->count() }} Packages)</p> -->
                    </div>
                </div>
            </div>
            <div class="filters">
                <ul>
                    <li class="active category" data-filter="*" data-id="all"><span>All</span></li>
                    <li data-filter=".men" class="category" data-id="men"><span>Men</span></li>
                    <li data-filter=".women" class="category" data-id="women"><span>Women</span></li>
                    <li data-filter=".children" class="category" data-id="children"><span>Children</span></li>
                </ul>
            </div>
            <div class="filters-content">
               <div id="service_filter">@include('frontend.package-filter')</div>
            </div>
            {{-- {!! $services->links() !!} --}}
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
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js" id=""></script>
<script>
    $('.filters ul li').click(function(){
$('.filters ul li').removeClass('active');
$(this).addClass('active');

var data = $(this).attr('data-filter');
$grid.isotope({
filter: data
})
});

var $grid = $(".grid").isotope({
itemSelector: ".all",
percentPosition: true,
masonry: {
columnWidth: ".all"
}
});
</script>
<script>
     $(document).ready(function() {
        $('.category').on('click', function() {
            var category = $(this).data('id');
            $.ajax({
                url: "{{ route('service-category.filter') }}",
                type: "GET",
                data: {
                    category: category
                },
                success: function(data) {
                    $('#service_filter').html(data.view);
                }
            });
         
     });
    });

</script>
@endpush
