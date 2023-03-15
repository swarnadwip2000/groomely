@extends('admin.layouts.master')
@section('title')
    Groomely | Manage Barbers
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
                    <div class="breadcrumb-title pe-3">Appointment Details</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Appointments</li>
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
                                    <h4 class="mb-0">{{$business_owners['name']}}'s appointment details</h4>
                                </div>
                                <div class="col-md-6"><a href="{{ route('business-owner.index') }}"
                                        style="float: right;"><button type="button" class="btn btn-primary"><< Back</button></a></div>
                               
                            </div>
                        </div>

                        <hr />
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Service</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Booking Date</th>
                                        <th>Amount</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                               
                                @foreach ($business_owners->appontmentDetails($business_owners['id']) as $business_owner)
                                    <tr>                                        
                                        <td>{{$business_owner['name']}}</td>
                                        <td>{{$business_owner->service->additionalService->name}}</td>
                                        <td>{{$business_owner['email']}}</td>
                                        <td>{{$business_owner['phone']}}</td>
                                        <td>{{date('d M, Y',strtotime($business_owner['booking_date']))}}</td>
                                        <td>${{$business_owner['amount']}}</td>
                                         
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
        $(document).ready(function() {
            //Default data table
            $('#example').DataTable({
                "aaSorting": [],
                "columnDefs": [{
                        "orderable": false,
                        "targets": []
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1, 2, 3, 4,5]
                    }
                ]
            });

        });
    </script>
    <script>
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var user_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('admin.business-owner.change-status') }}',
                data: {
                    'status': status,
                    'user_id': user_id
                },
                success: function(resp) {
                    console.log(resp.success)
                }
            });
        });
    </script>
@endpush
