@extends('seller.layouts.master')
@section('title')
    Groomely | View Reviews
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
                    <div class="breadcrumb-title pe-3">View Reviews</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('seller.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">View Reviews</li>
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
                                    <h4 class="mb-0">View Reviews</h4>
                                </div>
                                <div class="col-md-6"><a href="{{ route('manage-services.index') }}"
                                        style="float: right;"><button type="button" class="btn btn-primary"><< Back</button></a></div>

                            </div>
                        </div>

                        <hr />
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Reviews</th>
                                        <th>Rating</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $review['user']['name'] }}</td>
                                            <td>{{ $review['comment'] }}</td>
                                            <td>@php
                                                $rating = $review['rating'];
                                                for ($i = 0; $i < 5; ++$i) {
                                                    echo '<i class="fa fa-star', $rating <= $i ? '-o' : '', '" aria-hidden="true" style="color: orange;"></i>';
                                                }
                                               
                                            @endphp </td>

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
                    "targets": [2]
                },
                {
                    "orderable": true,
                    "targets": [0, 1]
                }
            ]
        });
    </script>

@endpush
