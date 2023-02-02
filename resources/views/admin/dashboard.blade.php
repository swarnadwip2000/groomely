@extends('admin.layouts.master')
@section('title')
Groomely | Dashboard
@endsection
@push('styles')
@endpush

@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
          
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <div class="col-12 col-lg-12 mx-auto">
                                    <div class="card radius-15">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4 class="mb-0">User statistics</h4>
                                            </div>
                                            <hr />
                                            <div class="card-title"></div>
                                            <div class="chart-container2">
                                                <canvas id="chart6"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4">
                                <div>
                                    <h5 class="mb-0">Quick Links</h5>
                                </div>
                                <div class="ms-auto">
                                    <!-- <h3 class="mb-0"><span class="font-14">Total Visits:</span> 874</h3> -->
                                </div>
                            </div>
                            <hr>
                            <div class="dashboard-social-list ps ps--active-y">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-youtube rounded-circle text-white"><i class="bx bx-group"></i>
                                            </div>
                                            <div class="">
                                                <a href="{{route('customers.index')}}">
                                                    <h6 class="mb-0">Customers</h6>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="ms-auto">{{$count['customers']}}</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-dribbble rounded-circle text-white"><i class="bx bx-archive"></i>
                                            </div>
                                            <div class="">
                                                <a href="{{route('business-owner.index')}}">
                                                    <h6 class="mb-0">Busuness Owners</h6>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="ms-auto">{{$count['business_owners']}}</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-linkedin rounded-circle text-white"><i class="bx bx-menu"></i>
                                            </div>
                                            <div class="">
                                                <a href="{{route('blogs.index')}}">
                                                    <h6 class="mb-0">Blogs</h6>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="ms-auto">{{$count['blogs']}}</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-facebook rounded-circle text-white"><i class="fa fa-phone"></i>
                                            </div>
                                            <div class="">
                                                <a href="{{route('contact-us.index')}}">
                                                    <h6 class="mb-0">Contact Us</h6>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="ms-auto">{{$count['contact_us']}}</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-dribbble rounded-circle text-white"><i class="fa fa-image"></i>
                                            </div>
                                            <div class="">
                                                <a href="{{route('gallery.index')}}">
                                                    <h6 class="mb-0">Gallery</h6>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="ms-auto">{{$count['gallery']}}</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-dribbble rounded-circle text-white"><i class="fas fa-cut"></i>
                                            </div>
                                            <div class="">
                                                <a href="{{route('service-type.index')}}">
                                                    <h6 class="mb-0">Services</h6>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="ms-auto">{{$count['service_type']}}</div>
                                    </li>
                                </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 240px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 168px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
            <div class="col-6 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-15 w-100">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Barber transactions statistics</h4>
                            <div class="col-md-6" style="align: right; position: absolute; top: 8px; right: -170px;">
                                <form action="{{ route('admin.transaction.download') }}" method="post" >
                                    @csrf
                                <input type="hidden" name="start_date" value="{{date('Y-m-d')}}" id="start_date1">             
                                <input type="hidden" name="end_date" value="{{date('Y-m-d', strtotime('30 days'))}}" id="end_date1">                                             
                                <a href="#"><button class="btn btn-primary" type="submit"> <i class="fas fa-download"></i> Download Transaction</button></a>
                                </form>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                        @php
                            $year = 2023;
                        @endphp
                        <label>Monthly transactions:</label>
                        <div class="col-6 col-lg-6">
                        <input type="date" value="{{date('Y-m-d')}}" id="start_date" class=" form-control">
                        </div>
                        <div class="col-6 col-lg-6">
                        <input type="date" id="end_date" value="{{date('Y-m-d', strtotime('30 days'))}}" class="col-5 col-lg-5 form-control" readonly>
                        </div>
                    
                            
                            <div id="adminAjaxBarChart">
                                @include('admin.admin-ajax-bar-chart')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-15 w-100">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">User registration statistics</h4>
                            
                        </div>
                        <hr />
                        @php
                        $year = 2023;
                        @endphp
                        <select id="year" class="form-control">
                        @for ($i = $year; $i <= date('Y'); $i++)
                            <option value="{{ $year }}"
                                @if ($year == date('Y')) selected="" @endif>
                                {{ $year }}</option>
                            @php $year++ @endphp
                        @endfor
                        </select>   
                        
                        <div id="ajaxLineChart">
                            @include('admin.admin-ajax-line-chart')
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    

   
    <!--end page-content-wrapper-->
</div>
@endsection

@push('scripts')
<script src="{{asset('admin_assets/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/chartjs/js/chartjs-custom.js')}}"></script>
<script >
    // chart 6
    new Chart(document.getElementById("chart6"), {
        type: 'doughnut',
        data: {
            labels: ['Customers','Business Owners'],
            datasets: [{
                label: "Statistics",
                backgroundColor: ["#ffc107", "#198fed"],
                data: [{{$count['customers']}}, {{$count['business_owners']}}]
            }]
        },
        options: {
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Statistics'
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $('#start_date').on('change', function() {
        
        var sdate = $(this).val();
        var lastdate=new Date(sdate);
        lastdate.setMonth( lastdate.getMonth() + 1 );
        let ldate = JSON.stringify(lastdate)
        ldate = ldate.slice(1,11)
        $('#end_date').val(ldate);

        $.ajaxSetup({
            data: {
        "_token": "{{ csrf_token() }}",
     }
        });
        $.ajax({
            type: 'post',
            url: '{{ route('admin.ajax-bar-chart') }}',
            data: {
                'sdate': sdate,
                'ldate': ldate
            },
            success: function(resp) {
                $('#adminAjaxBarChart').html(resp.view);
                console.log(resp);
            },
            error: function() {
                console.log('alert');
            }
        });

        $('#start_date1').val(sdate);
        $('#end_date1').val(ldate);
        

    });
</script>


<script>
        $('#year').on('change', function() {
            var year = $(this).val();
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '{{ route('admin.ajax-line-chart') }}',
                data: {
                    'year': year,
                    '_token': '{{csrf_token()}}'
                },
                success: function(resp) {
                    $('#ajaxLineChart').html(resp.view);
                    console.log(resp);
                },
                error: function() {
                    console.log('alert');
                }
            });
            $('#yrr').val(year);
        });
    </script>

@endpush