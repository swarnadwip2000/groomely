@extends('seller.layouts.master')
@section('title')
Groomly | Booking History
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
                <div class="breadcrumb-title pe-3">Booking History</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Booking History</li>
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
                                <h4 class="mb-0">Booking History</h4>
                            </div>
                             {{-- <div class="col-md-6"><a href="{{route('booking-history.create')}}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Booking</button></a></div>  --}}
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Booking Date</th>
                                    <th>Booking Time</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$appointment['name']}}</td>
                                    <td>{{$appointment['email']}}</td>
                                    <td>{{$appointment['phone']}}</td>
                                    <td>{{date('d M, Y',strtotime($appointment['booking_date']))}}</td>
                                    <td>{{$appointment['bookTime']['time']}}</td>
                                    <td>${{$appointment['amount']}}</td>
                                    <td style="text-align: center;">@if($appointment['status'] == 'process')
                                        <a href="{{route('seller.booking.accept', $appointment['id'])}}" onclick="return confirm('Do you want to accept the appointment?')"><button class="btn btn-success"><i class="fa fa-check"></i> Accept</button></a>
                                        <a href="{{route('seller.booking.reshedule', $appointment['id'])}}"><button class="btn btn-warning"><i class="fa fa-refresh"></i> Reshedule</button></a>
                                        @elseif($appointment['status'] == 'accepted')
                                        <a href="{{route('seller.booking.complete', $appointment['id'])}}" onclick="return confirm('Do you want to complete the appointment?')"><button class="btn btn-info"><i class="fa fa-check-square"></i> Complete</button></a>
                                        @elseif($appointment['status'] == 'reshedule')
                                        <p style="background-color: #f3e1ac; width: auto; border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #a7882a;">Reshedule</p>
                                        @elseif($appointment['status'] == 'completed')
                                        <p style="background-color: #b9e38f; width: auto; border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: forestgreen;">Completed</p>
                                        @else
                                        <p style="background-color: #dd9fa8; width: auto; border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #c70a2d;"> Cancelled</p>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a title="View booking" href="{{route('booking-history.view', $appointment->id)}}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                        @if($appointment['status'] == 'completed')
                                        <a title="Send Invoice" href="{{route('seller.send-invoice', $appointment->id)}}"><i class="fa fa-paper-plane"></i></a>&nbsp;&nbsp;
                                        @endif
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
                "targets": [6, 7]
            },
            {
                "orderable": true,
                "targets": [0,1, 2, 3, 4, 5]
            }
        ]
    });
</script>
@endpush