@extends('seller.layouts.master')
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
                                                    <h4 class="mb-0">Booking history statistics</h4>
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
                                
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col-12 col-lg-12 mx-auto">
                                        <div class="card radius-15">
                                            <div class="card-body">                                             
                                                <div class="card-title">
                                                    <h4 class="mb-0">Transaction history statistics</h4>                                      
                                                    <div class="col-md-6" >
                                                        <form action="{{ route('seller.transaction.download') }}" method="post" >
                                                            @csrf
                                                        <input type="hidden" name="year" id="yrr">                             
                                                        <a href="#"><button class="btn btn-primary" type="submit"> <i class="fas fa-download"></i> Download Transaction</button></a>
                                                        </form>
                                                    </div>                                      
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
                                                <div class="card-title"></div>
                                                <div class="chart-container2">
                                                    <div id="ajaxBarChart">
                                                        @include('seller.ajax-bar-chart')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-6 d-flex">
                        <div class="card radius-15 w-100">
                            <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col-12 col-lg-12 mx-auto">
                                        <div class="card radius-15">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h4 class="mb-0">Review statistics</h4>
                                                </div>
                                                <hr />
                                                <div class="card-title"></div>
                                                <div class="chart-container2">
                                                    <canvas id="reviewchart"></canvas>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="{{ asset('admin_assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/chartjs/js/chartjs-custom.js') }}"></script>
    <script>
        // chart 6
        new Chart(document.getElementById("chart6"), {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Cancelled', 'Accepted', 'Reschedule'],
                datasets: [{
                    label: "Statistics",
                    backgroundColor: ["#22d922", "red", "blue", "#c9c94a"],
                    data: [{{ $count['completed'] }}, {{ $count['cancelled'] }}, {{ $count['accepted'] }},
                        {{ $count['reshedule'] }}
                    ]
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

 <script>
        new Chart(document.getElementById("reviewchart"), {
            type: 'horizontalBar',
            data: {
                labels: [@foreach($seller_services as $seller_service) '{{$seller_service->service->additionalService->name}}',  @endforeach],
                datasets: [{
                    label: 'Rating',
                    backgroundColor: 'orange',
                    data: [1,2],
                    
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
            xAxes: [{
                ticks: {
                    min: 0 
                }
            }],
            yAxes: [{
                stacked: true
            }]
        }
            }
        
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
                url: '{{ route('seller.ajax-bar-chart') }}',
                data: {
                    'year': year,
                },
                success: function(resp) {
                    $('#ajaxBarChart').html(resp.view);
                    console.log(resp);
                },
                error: function() {
                    console.log('alert');
                }
            });
            $('#yrr').val(year);
        });
    </script>

    <script>
        $(document).ready(function($)  {
            var yr = $('#year').val();
            $('#yrr').val(yr);
            if({{$count['completed']}} < 1)
            {
                $('#pdf').hide();
            } 
        });
    </script>
@endpush
