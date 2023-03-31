@extends('admin.layouts.master')
@section('title')
    Groomely | Manage Barbers
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
                    <div class="breadcrumb-title pe-3">Manage Partners</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Partners</li>
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
                                    <h4 class="mb-0">Partners Details</h4>
                                </div>
                                <div class="col-md-6"><a href="{{ route('business-owner.create') }}"
                                        style="float: right;"><button type="button" class="btn btn-primary"><i
                                                class="fas fa-plus"></i> Add Partner</button></a></div>
                            </div>
                        </div>

                        <hr />
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Shop Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Zip Code</th>
                                        <th>Complete Appointments</th>
                                        <th>Total Revenue</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($business_owners as $business_owner)
                                        <tr>
                                            <td>{{ $business_owner['name'] }}</td>
                                            <td>{{ $business_owner['shop_name'] }}</td>
                                            <td>{{ $business_owner['email'] }}</td>
                                            <td>{{ $business_owner['phone'] }}</td>
                                            <td>{{ $business_owner['zipcode'] }}</td>
                                            <td>
                                            @if($business_owner->appointmentsCount($business_owner['id']) > 0)
                                            <a href="{{ route('appointments-details.show', $business_owner->id) }}">
                                                <button type="button" style="border:none;background: none;" data-toggle="tooltip" data-placement="right" title="Click to show {{ $business_owner['name'] }}'s appontments">
                                                {{ $business_owner->appointmentsCount($business_owner['id']) }} </button></a>
                                            @else
                                            No appointments available
                                            @endif
                                            </td>
                                            
                                            <td>
                                            @if($business_owner->totalAmount($business_owner['id']) > 0)
                                            ${{$business_owner->totalAmount($business_owner['id'])}}
                                            @else
                                            No transaction available
                                            @endif
                                            </td>
                                            <td>
                                                <div class="button-switch">
                                                    <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                        data-id="{{ $business_owner['id'] }}"
                                                        {{ $business_owner['status'] ? 'checked' : '' }} />
                                                    <label for="switch-orange" class="lbl-off"></label>
                                                    <label for="switch-orange" class="lbl-on"></label>
                                                </div>
                                            </td>
                                            <td align="center">
                                                <a href="{{ route('business-owner.show', $business_owner->id) }}"><i
                                                        class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                                <a href="{{ route('business-owner.delete', $business_owner->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this business-owner?')"><i
                                                        class="fas fa-trash"></i></a>
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
                        "targets": [7, 8]
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1, 2, 3,4,5,6]
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
                url: "{{ route('admin.business-owner.change-status') }}",
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
