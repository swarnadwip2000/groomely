@extends('seller.layouts.master')
@section('title')
Groomely | Manage Services
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
                <div class="breadcrumb-title pe-3">Manage Services</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Services</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6"><h4 class="mb-0">Manage Services</h4></div>
                            <div class="col-md-6"><a href="{{route('manage-services.create')}}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Services</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Service Type</th>
                                    <th>Service</th>
                                    <th>Rate($)</th>
                                    <th>Duration</th>
                                    {{-- <th>Reviews</th> --}}
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service['service']['category']['name']}}</td>
                                    <td>{{$service['service']['serviceType']['name']}}</td>
                                    <td>{{$service['service']['additionalService']['name']}}</td>
                                    <td>${{$service['rate']}}</td>
                                    <td>{{date('h',strtotime($service['service']['duration']))}} hr {{date('i',strtotime($service['service']['duration']))}} mins</td>
                                    {{-- <td>
                                    @if($service->ratingService($service['id']) =='')
                                    no reviews available
                                    @else
                                    (@php    
                                    for ($i = 0; $i < 5; ++$i) {
                                        echo '<i class="fa fa-star' ,
                                            ($service->ratingService($service['id']) == $i + .5 ? '-half' : '') ,
                                            ($service->ratingService($service['id']) <= $i ? '-o' : '') ,                                        
                                            '" aria-hidden="true" style="color:orange"></i>';
                                        echo "\n";
                                    }
                                    echo "\n";
                                    @endphp)
                                    <a href="{{route('service-reviews.view', $service->id)}}" style="border:none;background: none;" data-toggle="tooltip" data-placement="right" title="Click to show {{ $service['name'] }}'s all reviews"><i class="fa-solid fa-comments"></i></a>&nbsp;&nbsp;
                                    @endif
                                    </td> --}}

                                    <td>
                                        <div class="button-switch">
                                            <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                data-id="{{ $service['id'] }}"
                                                {{ $service['status'] ? 'checked' : '' }} />
                                            <label for="switch-orange" class="lbl-off"></label>
                                            <label for="switch-orange" class="lbl-on"></label>
                                        </div>
                                    </td>
                                    <td align="center">
                                        <a href="{{route('manage-services.view', $service->id)}}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                        <a href="{{route('manage-services.show', $service->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                        <a href="{{route('manage-services.delete', $service->id)}}" onclick="return confirm('Are you sure to delete this service?')"><i class="fas fa-trash"></i></a>
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
        var seller_service = $(this).data('id');
       

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/seller/changeSellerServiceStatus',
            data: {
                'status': status,
                'seller_service': seller_service
            },
            success: function(resp) {
                console.log(resp.success)
            }
        });
    });

</script>

@endpush
