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
                <canvas id="myChart"></canvas>
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
new Chart(document.getElementById("myChart"),{

    type: 'bar',
    data: {
      labels: [@foreach($users as $user) '{{$user->name}}',  @endforeach],
      datasets: [{
        label: 'Transaction',
        data: [@foreach($users as $user) {{$user->totalAmount($user['id'])}}, @endforeach],
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