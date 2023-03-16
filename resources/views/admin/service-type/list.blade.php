@extends('admin.layouts.master')
@section('title')
Groomely | Service Type List
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
                            <div class="col-md-6"><a href="{{route('service-type.create')}}" style="float: right;"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add service type</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Service Type</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Additional Service</th>                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($serviceTypes as $serviceType)
                                <tr>
                                    <td>{{$serviceType['category']['name']}}</td>
                                    <td>{{$serviceType['name']}}</td>
                                    <td><a href="{{Storage::url($serviceType['image'])}}" target="_blank">
                                        <img src="{{Storage::url($serviceType['image'])}}" alt=""></a></td>
                                    <td>
                                        <div class="button-switch">
                                            <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                data-id="{{ $serviceType['id'] }}"
                                                {{ $serviceType['status'] ? 'checked' : '' }} />
                                            <label for="switch-orange" class="lbl-off"></label>
                                            <label for="switch-orange" class="lbl-on"></label>
                                        </div>
                                    </td>
                                    <td align="center">
                                        <a href="{{route('service-type.show', $serviceType->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                        @if($serviceType->main == 0)
                                        <a href="{{route('service-type.delete', $serviceType->id)}}" onclick="return confirm('Are you sure to delete this service type?')"><i class="fas fa-trash"></i></a>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{route('additional-service.index', $serviceType['id'])}}" class="btn btn-primary">Go >></a> &nbsp;&nbsp;
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
                "targets": [2,3,4,5]
            },
            {
                "orderable": true,
                "targets": [0,1]
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
