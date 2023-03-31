@extends('user.layouts.master')
@section('title')
    Groomely | View Appointment Details
@endsection
@push('styles')
@endpush

@section('content')
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Appointments View</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('appointments.index') }}">Appointment
                                        Details</i></a>
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
                            @if (count($appointment['invoices']) > 0)
                                @foreach ($appointment['invoices'] as $invoice)
                                    <div style="float: right; display:flex;">
                                        <a href="{{ route('download.invoice', $invoice->id) }}"><button
                                                class="btn btn-primary"> <i class="fas fa-download"></i> Download
                                                Invoice</button></a>
                                    </div>
                                @break
                            @endforeach
                        @endif
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active">
                                <div class="card shadow-none mb-0 ">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="col-md-12 m-1">
                                                <h5><u>Appointment Details</u></h5>
                                            </div>
                                            <div class="col-md-12 m-1"><b>User Name:-</b> {{ $appointment['name'] }}
                                            </div>
                                            <div class="col-md-12 m-1"><b>User Email:- </b> {{ $appointment['email'] }}
                                            </div>
                                            <div class="col-md-12 m-1"><b> User Phone Number:- </b>
                                                {{ $appointment['phone'] }}</div>
                                            <div class="col-md-12 m-1"><b>appointment Date:- </b>
                                                {{ date('d M, Y', strtotime($appointment['booking_date'])) }}</div>
                                            <div class="col-md-12 m-1"><b>appointment time:- </b>
                                                {{ $appointment['bookTime']['time'] }}</div>
                                            <div class="col-md-12 m-1"><b>Total Amount:- </b> ${{ $appointment['amount'] }}
                                            </div>
                                            <div class="col-md-12 m-1"><b>Staus:- </b> {{ $appointment['status'] }}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-12 m-1">
                                                <h5><u>Barber Details</u></h5>
                                            </div>
                                            <div class="col-md-12 m-1"><b>Shop Name:-</b>
                                                {{ $appointment['seller']['shop_name'] }}</div>
                                            <div class="col-md-12 m-1"><b>Barber Name:-</b>
                                                {{ $appointment['seller']['name'] }}</div>
                                            <div class="col-md-12 m-1"><b>Barber Email:- </b>
                                                {{ $appointment['seller']['email'] }}</div>
                                            <div class="col-md-12 m-1"><b> Barber Phone Number:- </b>
                                                {{ $appointment['seller']['phone'] }}</div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-12 m-1">
                                                <h5><u>Service Details</u></h5>
                                            </div>
                                            <div class="col-md-12 m-1"><b>Service Name:-</b>
                                             
                                                {{ $appointment['service']['additionalService'] ['name']}}</div>
                                            <div class="col-md-12 m-1"><b>Service Category:-</b>
                                                {{ $appointment['service']['category']['name'] }}</div>
                                            <div class="col-md-12 m-1"><b>Duration:- </b>
                                                {{ date('h', strtotime($appointment['service']['duration'])) }} hr
                                                {{ date('i', strtotime($appointment['service']['duration'])) }} mins
                                            </div>
                                            <div class="col-md-12 m-1"><b>Rate:- </b>
                                                ${{ $appointment->appointmentServicePrice($appointment['service_id'],$appointment['seller_id']) }}</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
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
                                    <th scope="col">Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($extraServices as $key =>$service)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $service->service->additionalService['name'] }}</td>
                                    <td>{{ $service->service->category['name'] }}</td>
                                    <td>{{ date('h', strtotime($service->service->duration)) }} hr {{ date('i', strtotime($service->service->duration)) }} mins</td>
                                    <td>${{ $service->extraServicePrice($service['service_id'],$seller_id) }}</td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection

@push('scripts')
@endpush
