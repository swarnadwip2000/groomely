@extends('admin.layouts.master')
@section('title')
Groomly | Service Type List
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
                <div class="breadcrumb-title pe-3">Service Type</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Service Type</li>
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
                                <h4 class="mb-0">Service Type Details</h4>
                            </div>
                            <div class="col-md-6"><a href="{{route('service-type.create')}}" style="float: right;"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add category</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($serviceTypes as $serviceType)
                                <tr>
                                    <td>{{$serviceType['name']}}</td>
                                    <td><img src="{{Storage::url($serviceType['image'])}}" alt=""></td>
                                    <td>
                                        <input data-id="{{$serviceType['id']}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $serviceType['status'] ? 'checked' : '' }}>
                                    </td>
                                    <td align="center">
                                        <a href="{{route('service-type.show', $serviceType->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                        <a href="{{route('service-type.delete', $serviceType->id)}}" onclick="return confirm('Are you sure to delete this service type?')"><i class="fas fa-trash"></i></a>
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
    $(document).ready(function() {
        //Default data table
        $('#example').DataTable({
            "aaSorting": [],
            "columnDefs": [{
                "orderable": false,
                "targets": [1,2,3]
            },
            {
                "orderable": true,
                "targets": [0]
            }
        ]
        });

    });
</script>
<script>
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var service_type_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("admin.service-type.change-status")}}',
            data: {
                'status': status,
                'service_type_id': service_type_id
            },
            success: function(resp) {
                console.log(resp.success)
            }
        });
    });
</script>

@endpush
