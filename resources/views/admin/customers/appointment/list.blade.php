@extends('admin.layouts.master')
@section('title')
Groomely | Customers - Appointments
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
                <div class="breadcrumb-title pe-3">Customer Appointments</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                </div>

                

            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6"><h4 class="mb-0">Appointment Details</h4></div>
                            <div class="col-md-6" style="display: inline-block;display:flex;justify-content:right;">
                                <a href="{{ route('appointment.download.invoice') }}"><button class="btn btn-primary"> <i class="fas fa-download"></i> Download Appointment</button></a>
                            </div>
                        </div>
                        
    
                    </div>
                    
                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>date</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$appointment['name']}}</td>
                                    <td>{{$appointment['email']}}</td>
                                    <td>{{$appointment['phone']}}</td>
                                    <td>{{date('d M, Y', strtotime($appointment['booking_date']))}}</td>
                                    <td>${{$appointment['amount']}}</td>                                       
                                    <td align="center">
                                        <a href="#"><i class="fas fa-edit" onclick="editprice({{$appointment['id']}})"></i> </a>
                                    </td>                                  
                                </tr>

                                <div class="modal fade" id="exampleModalCenter_{{$appointment['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Appointment details</h5>
                                          <button type="button" class="btn btn-primary close" data-bs-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form action="{{route('customer-order.edit-price')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$appointment['id']}}">
                                                    <div class="border p-4 rounded">
                                                        <div class="row mb-3">
                                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputEnterYourName" value="{{$appointment['name']}}" placeholder="Enter Your Name" readonly>
                                                                @if($errors->has('name'))
                                                                <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                                @endif
                                                            </div>                   
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputEmailAddress2" value="{{$appointment['email']}}"  placeholder="Email Address" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputPhoneNo2" value="{{$appointment['phone']}}"  placeholder="Phone No" readonly>
                                                            </div>                   
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Date</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputPhoneNo2" value="{{date('d M, Y', strtotime($appointment['booking_date']))}}" placeholder="Date" readonly>
                                                            </div>                   
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Amount</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputPhoneNo2" value="{{$appointment['amount']}}" name="amount" placeholder="Price($)" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                            </div>                   
                                                        </div>
                                           
                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-9">
                                                                <button type="submit" class="btn btn-primary px-5">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
                "targets": [5]
            },
            {
                "orderable": true,
                "targets": [0,1,2,3,4]
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
            url: '{{route("admin.customers.change-status")}}',
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
    function editprice($id)
    {
        var id = $id;
       $('#exampleModalCenter_'+id).modal('show'); 
    }
    </script>

@endpush
