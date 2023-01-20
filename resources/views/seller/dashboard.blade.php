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
                                                <h4 class="mb-0">Booking History statistics</h4>
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
                                                <h4 class="mb-0">Transaction History</h4>
                                            </div>
                                            <hr />
                                            @php
                                                $year = 2023;
                                            @endphp
                                            <select id="year" onchange="selectyear()">
                                              @for ($i = $year; $i <= date('Y'); $i++)
                                              <option value="{{$year}}" @if($year == date('Y')) selected="" @endif>{{$year}}</option>
                                              @php $year++ @endphp
                                              @endfor
                                            </select>
                                            <div class="card-title"></div>
                                            <div class="chart-container2">
                                                <canvas id="sellerChart"></canvas>
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
<script src="{{asset('admin_assets/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/chartjs/js/chartjs-custom.js')}}"></script>
<script>
    // chart 6
    new Chart(document.getElementById("chart6"), {
        type: 'doughnut',
        data: {
            labels: ['Completed','Cancelled', 'Accepted', 'Reshedule'],
            datasets: [{
                label: "Statistics",
                backgroundColor: ["#22d922","red", "blue", "#c9c94a"],
                data: [{{$count['completed']}} ,{{$count['cancelled']}}, {{$count['accepted']}}, {{$count['reshedule']}}]
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
new Chart(document.getElementById("sellerChart"),{

    type: 'bar',
    data: {
      labels: ['January','February','March','April','May','June','July','August','September','October','November','December'],
      datasets: [{
        label: 'Transaction',
        data: [{{$transaction['january']}},{{$transaction['february']}},{{$transaction['march']}},{{$transaction['april']}},{{$transaction['may']}},{{$transaction['june']}},{{$transaction['july']}},{{$transaction['august']}},{{$transaction['september']}},{{$transaction['october']}},{{$transaction['november']}},{{$transaction['december']}},],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  
});
</script>

@endpush