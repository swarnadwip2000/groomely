@extends('user.layouts.master')
@section('title')
    Groomely | Review List
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@endpush

@section('content')
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Review List</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Review List</li>
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
                                    <h4 class="mb-0">Review List</h4>
                                </div>
                                
                            </div>
                        </div>

                        <hr />
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>                                 
                                        <th>Service</th>
                                        <th>Review</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>                                         
                                            <td>{{ $review['service']['additionalService']['name'] }}</td>
                                            <td>{{ $review['comment'] }}</td>
                                            <td>@php
                                                $rating = $review['rating'];
                                                for ($i = 0; $i < 5; ++$i) {
                                                    echo '<i class="fa fa-star' , ($review['rating'] <= $i ? '-o' : '') , '" aria-hidden="true" style="color: orange;"></i>';
                                                }  
                                                @endphp  
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
                    "targets": [2]
                },
                {
                    "orderable": true,
                    "targets": [0,1]
                }
            ]
        });
</script>
@endpush
