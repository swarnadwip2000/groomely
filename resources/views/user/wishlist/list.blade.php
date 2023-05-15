@extends('user.layouts.master')
@section('title')
    Groomely | Wishlist
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
                    <div class="breadcrumb-title pe-3">Wishlist</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
                                    <h4 class="mb-0">Wishlist</h4>
                                </div>
                                
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
                                        <th>Description</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($get_wishlist as $wishlist)
                                        <tr>                                         
                                            <td>{{ $wishlist['service']['category']['name']}}</td>
                                            <td>{{ $wishlist['service']['serviceType']['name']}}</td>      
                                            <td>{{ $wishlist['service']['additionalService']['name']}}</td>
                                            <td>{{ $wishlist['service']['description']}}</td>
                                            <td>{{ $wishlist['service']['duration']}} hrs</td>   
                                            <td>
                                                <a href="{{route('book-now', base64_encode($wishlist['service_id']))}}" class="btn btn-primary btn-sm">Book Now</a>
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
                    "targets": [0,1,2,3]
                }
            ]
        });
</script>
@endpush
