@extends('admin.layouts.master')
@section('title')
Groomly | Service-cms List
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
                <div class="breadcrumb-title pe-3">Service Cms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Service Cms</li>
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
                                <h4 class="mb-0">Service Cms Details</h4>
                            </div>
                            <div class="col-md-6"><a href="{{route('service-cms.create')}}" style="float: right;"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Service Cms</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allService as $service)
                                <tr>
                                    <td>{{$service['name']}}</td>
                                    <td>{{ Str::limit($service['title'], 30)}}</td>
                                    <td>{{ Str::limit($service['description'], 40)}}</td>                                  
                                    <td><img src="{{Storage::url($service['image'])}}" alt="" style="height: 100px; width: 100px;"></td>
                                    <td><img src="{{Storage::url($service['icon'])}}" alt=""></td>                               
                                    <td align="center">
                                        <a href="{{route('service-cms.edit', $service->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                        @if ($service['status'] != true)
                                             <a href="{{route('service-cms.delete', $service->id)}}" onclick="return confirm('Are you sure to delete this Service-cms?')"><i class="fas fa-trash"></i></a>
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
    $(document).ready(function() {
        //Default data table
        $('#example').DataTable({
            "aaSorting": [],
            "columnDefs": [{
                "orderable": false,
                "targets": [ 2,3,4]
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
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/changeCategoryStatus',
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
<script>
    // $(document).ready(function() {
    //     $('#example').DataTable({
    //         'processing': true,
    //         'serverSide': true,
    //         'serverMethod': 'POST',
    //         'ajax': {
    //             'url': '/ajax/users.php'
    //         },
    //         'columns': [{
    //                 data: 'Name'
    //             }, /* index = 0 */
    //             {
    //                 data: 'Slug'
    //             }, /* index = 1 */
    //             {
    //                 data: 'Icon'
    //             }, /* index = 2 */
    //             {
    //                 data: 'Status'
    //             }, /* index = 3 */
    //             {
    //                 data: 'Action'
    //             } /* index = 4 */
    //         ],
    //         'columnDefs': [{
    //             'targets': [3, 4],
    //             /* column index */
    //             'orderable': false,
    //             /* true or false */
    //         }]
    //     });
    // });
</script>
@endpush