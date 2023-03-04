@extends('admin.layouts.master')
@section('title')
Groomely | Service List
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
                <div class="breadcrumb-title pe-3">Service</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Service</li>
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
                                <h4 class="mb-0">Service Details</h4>
                            </div>
                            <div class="col-md-6"><a href="{{route('services.create')}}" style="float: right;"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add service</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Service Type</th>
                                    <th>Additional Service</th>
                                    <th>Duration</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service->category->name}}</td>
                                    <td>{{$service->serviceType->name}}</td>
                                    <td>{{$service->additionalService->name}}</td>  
                                    <td>{{date('h',strtotime($service->duration))}} hr {{date('i',strtotime($service->duration))}} mins</td>
                                    <td>{!! Str::limit($service->description, 60, ' ...') !!}</td>
                                    <td>
                                        <div class="button-switch">
                                            <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                data-id="{{ $service['id'] }}"
                                                {{ $service['status'] ? 'checked' : '' }} />
                                            <label for="switch-orange" class="lbl-off"></label>
                                            <label for="switch-orange" class="lbl-on"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('service.edit',$service->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('service.delete',$service->id)}}" onclick="return confirm('Are you sure to delete this service?')"><i class="fas fa-trash"></i></button></a>
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
        var service_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("admin.service.change-status")}}',
            data: {
                'status': status,
                'service_id': service_id
            },
            success: function(resp) {
                console.log(resp.success)
            }
        });
    });
</script>

@endpush
