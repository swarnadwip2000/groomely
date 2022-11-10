@extends('seller.layouts.master')
@section('title')
Groomly | Manage Booking
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
                <div class="breadcrumb-title pe-3">Manage Booking</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Booking</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6"><h4 class="mb-0">Manage Booking</h4></div>
                            <div class="col-md-6"><a href="{{route('manage-booking.create')}}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Booking</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Service Category</th>
                                    <th>Rate($)</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service['name']}}</td>
                                    <td>{{$service['category']['name']}}</td>
                                    <td>${{$service['rate']}}</td>
                                    <td>{{date('h',strtotime($service['duration']))}} hr {{date('i',strtotime($service['duration']))}} mins</td>
                                    <td>
                                        <input data-id="{{$service['id']}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $service['status'] ? 'checked' : '' }}>
                                    </td>
                                    <td align="center">
                                        <a href="{{route('manage-booking.view', $service->id)}}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp; 
                                        <a href="{{route('manage-booking.show', $service->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                        <a href="{{route('manage-booking.delete', $service->id)}}" onclick="return confirm('Are you sure to delete this service?')"><i class="fas fa-trash"></i></a>
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
                "targets": [4,5]
            },
            {
                "orderable": true,
                "targets": [0,1, 2, 3,]
            }
        ]
    });
</script>

<script>
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/seller/changeManageBookingStatus',
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