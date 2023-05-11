@extends('admin.layouts.master')
@section('title')
Groomely | Offer List
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
                <div class="breadcrumb-title pe-3">Offers</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Offers</li>
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
                                <h4 class="mb-0">Offers Details</h4>
                            </div>
                            {{-- <div class="col-md-6"><a href="{{route('offer.create')}}" style="float: right;"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Offer</button></a></div> --}}
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Offer(%)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($offers as $offer)
                                <tr>
                                    <td>{{$offer['offer_amount']}}</td>
                                    <td align="center">
                                        <a href="{{route('offer.edit', $offer->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
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
            url: "{{route('admin.category.change-status')}}",
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
