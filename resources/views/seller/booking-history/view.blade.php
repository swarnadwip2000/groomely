@extends('seller.layouts.master')
@section('title')
    Groomly | View Booking History
@endsection
@push('styles')
    <style>
        @media screen and (max-width: 770px) {
            .add {
                margin-top: 10px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Booking History</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('seller.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('booking-history.index') }}">Booking
                                        History</i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">View</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->
                <div class="user-profile-page">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active">
                                    <div class="card shadow-none mb-0 ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-12 m-1">
                                                    <h5><u>Booking Details</u></h5>
                                                </div>
                                                <div class="col-md-12 m-1"><b>User Name:-</b>{{ $appointment['name'] }}
                                                </div>
                                                <div class="col-md-12 m-1"><b>User Email:- </b>{{ $appointment['email'] }}
                                                </div>
                                                <div class="col-md-12 m-1"><b> User Phone Number:-
                                                    </b>{{ $appointment['phone'] }}</div>
                                                <div class="col-md-12 m-1"><b>appointment Date:-
                                                    </b>{{ date('d M, Y', strtotime($appointment['booking_date'])) }}</div>
                                                <div class="col-md-12 m-1"><b>appointment time:-
                                                    </b>{{ $appointment['bookTime']['time'] }}</div>
                                                <div class="col-md-12 m-1"><b>Amount:- </b>${{ $appointment['amount'] }}
                                                </div>
                                                <div class="col-md-12 m-1"><b>Staus:- </b>{{ $appointment['status'] }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-12 m-1">
                                                    <h5><u>Service Details</u></h5>
                                                </div>
                                                <div class="col-md-12 m-1"><b>Service Name:-</b>
                                                    {{ $appointment['service']['name'] }}</div>
                                                <div class="col-md-12 m-1"><b>Service Category:-</b>
                                                    {{ $appointment['service']['category']['name'] }}</div>
                                                <div class="col-md-12 m-1"><b>Duration:-
                                                    </b>{{ date('h', strtotime($appointment['service']['duration'])) }} hr
                                                    {{ date('i', strtotime($appointment['service']['duration'])) }} mins
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if( $appointment['status'] != 'completed')
                        <div class="col-md-12">
                            <div class="col-md-12 m-1">
                                <div style="float: right">
                                    <div class="col-md-12" style="padding-bottom:20px; "><button type="button"
                                            class="btn btn-primary" id="toggle"><i class="fas fa-plus"></i> Add Extra
                                            Services</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="card radius-15" id="box" style="display: none">
                            <div class="card-body">
                                <div class="tab-content mt-3">
                                    <div class="tab-pane fade show active">
                                        <div class="card shadow-none mb-0 ">
                                            <form action="{{ route('add.extra.service') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="appointment_id"
                                                    value="{{ $appointment['id'] }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select name="service_id" id="service_id" class="form-control">
                                                            <option value="">Select A Service</option>
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service['id'] }}">
                                                                    {{ $service['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div><span id="service_error" style="color : red;"></span></div>
                                                    </div>
                                                    <div class="col-md-6 add">
                                                        <button type="submit" class="btn btn-success"
                                                            onclick="return Validate()">Add
                                                            Service</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (count($extraServices) > 0)
                            <div class="card radius-15">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="mb-0">Extra Services</h4>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Service Name</th>
                                                    <th scope="col">Service Category</th>
                                                    <th scope="col">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($extraServices as $key => $extraService)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td>{{ $extraService['service']['name'] }}</td>
                                                        <td>{{ $extraService['service']['category']['name'] }}</td>
                                                        <td>{{ date('h', strtotime($extraService['service']['duration'])) }} hr
                                                            {{ date('i', strtotime($extraService['service']['duration'])) }} mins</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>
    @endsection

    @push('scripts')
        <script type="text/javascript">
            function Validate() {
                var service_id = document.getElementById("service_id");
                if (service_id.value == "") {
                    document.getElementById("service_error").innerHTML = "Please select a service.";
                    return false;
                }
                return true;
            }
        </script>
        <script>
            $("#toggle").click(function() {
                $("#box").toggle('slow');
            });
        </script>
    @endpush
