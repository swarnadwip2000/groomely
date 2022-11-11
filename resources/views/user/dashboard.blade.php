@extends('user.layouts.master')
@section('title')
Groomly | Dashboard
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
							<!-- <div class="card radius-15 w-100">
								<div class="card-body">
                                    <div class="row row-cols-1 row-cols-md-3 g-3">
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto rounded-circle bg-info text-white"><i class="bx bx-time"></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">2m 28s</h4>
													<p class="mb-0">Avg. Time on Site</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-wall text-white rounded-circle"><i class="bx bx-bookmark-alt"></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">4.68</h4>
													<p class="mb-0">Pages/Session</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-rose rounded-circle text-white"><i class="bx bx-bulb"></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">78%</h4>
													<p class="mb-0">New Sessions</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto rounded-circle bg-danger text-white"><i class="bx bx-line-chart"></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">23.4%</h4>
													<p class="mb-0">Bounce Rate</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-primary rounded-circle text-white"><i class="bx bx-group"></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">4,286</h4>
													<p class="mb-0">New Users</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-success text-white rounded-circle"><i class="bx bx-cloud-download"></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">78%</h4>
													<p class="mb-0">Downloads</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
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
            labels: ['Accepted Booking','Rejected Booking', 'Reshedule Booking'],
            datasets: [{
                label: "Statistics",
                backgroundColor: ["green", "red", "yellow"],
                data: [{{$count['accepted']}}, {{$count['rejected']}} , {{$count['reshedule']}}]
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
@endpush