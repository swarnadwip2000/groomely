@extends('user.layouts.master')
@section('title')
Groomly | Appointment List
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
                <div class="breadcrumb-title pe-3">Appointment List</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Appointment List</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Appointment List</h4>
                            </div>
                            <!-- <div class="col-md-6"><a href="{{route('appointments.create')}}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Booking</button></a></div> -->
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>Barber Name</th>
                                    <th>Barber Email</th>
                                    <th>Barber Phone</th>
                                    <th>Booking Date</th>
                                    <th>Booking Time</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$appointment['service']['user']['shop_name']}}</td>
                                    <td>{{$appointment['service']['user']['name']}}</td>
                                    <td>{{$appointment['service']['user']['email']}}</td>
                                    <td>{{$appointment['service']['user']['phone']}}</td>
                                    <td>{{date('d M, Y',strtotime($appointment['booking_date']))}}</td>
                                    <td>{{$appointment['bookTime']['time']}}</td>
                                    <td>{{date('h',strtotime($appointment['service']['duration']))}} hr {{date('i',strtotime($appointment['service']['duration']))}} mins</td>
                                    <td>${{$appointment['amount']}}</td>
                                    <td style="text-align: center;">@if($appointment['status'] == 'process')
                                    <p style="background-color: #f3e1ac; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #a7882a;">Pending!!</p>
                                        @elseif($appointment['status'] == 'accepted')
                                        <p style="background-color: #8fddd2; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #0b4e68;">Accepted!!</p>
                                        @elseif($appointment['status'] == 'completed')
                                        @if (count($appointment['invoices']) > 0)
                                        @foreach ($appointment['invoices'] as $invoice)
                                        <a title="download invoice" href="{{ route('download.invoice',$invoice->id) }}"><i class="fas fa-download"></i></a>
                                        @break
                                        @endforeach
                                        @else
                                        <p style="background-color: #b9e38f; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: forestgreen;">Completed!!</p>
                                        @endif
                                        @elseif($appointment['status'] == 'reshedule')
                                        <a href="{{route('user.appointment.accept', $appointment['id'])}}" onclick="return confirm('Do you want to accept the appointment?')"><button class="btn btn-success"><i class="fa fa-check"></i> Accept</button></a>
                                        <a href="{{route('user.appointment.reshedule', $appointment['id'])}}"><button class="btn btn-warning"><i class="fa fa-refresh"></i> Reshedule</button></a>
                                        @else
                                        <p style="background-color: #dd9fa8; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #c70a2d;"> Cancelled!!</p>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{route('appointments.view', ['id'=>$appointment->id])}}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                    </td>
                                </tr>
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
<script>
    $('#example').DataTable({
        "aaSorting": [],
        "columnDefs": [{
                "orderable": false,
                "targets": [ 7, 8]
            },
            {
                "orderable": true,
                "targets": [1, 2, 3, 4, 5, 6]
            }
        ]
    });
</script>
@endpush