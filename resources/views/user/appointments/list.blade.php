@extends('user.layouts.master')
@section('title')
Groomely | Appointment List
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
                <div class="breadcrumb-title pe-3">Appointment List</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Appointment List</li>
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
                                <h4 class="mb-0">Appointment List</h4>
                            </div>
                            <!-- <div class="col-md-6"><a href="{{route('appointments.create')}}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Booking</button></a></div> -->
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>Barber Name</th>
                                    <th>Barber Email</th>
                                    <th>Barber Phone</th>
                                    <th>Booking Date</th>
                                    <th>Booking Time</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$appointment['service']['user']['shop_name']}}</td>
                                    <td>{{$appointment['service']['user']['name']}}</td>
                                    <td>{{$appointment['service']['user']['email']}}</td>
                                    <td>{{$appointment['service']['user']['phone']}}</td>
                                    <td>{{date('d M, Y',strtotime($appointment['booking_date']))}}</td>
                                    <td>{{$appointment['bookTime']['time']}}</td>
                                    <td>{{date('h',strtotime($appointment['service']['duration']))}} hr {{date('i',strtotime($appointment['service']['duration']))}} mins</td>
                                    <td>${{$appointment['amount']}}</td>
                                    <td style="text-align: center;">@if($appointment['status'] == 'process')
                                    <p style="background-color: #f3e1ac; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #a7882a;">Pending!!</p>
                                        @elseif($appointment['status'] == 'accepted')
                                        <p style="background-color: #8fddd2; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #0b4e68;">Accepted!!</p>
                                        @elseif($appointment['status'] == 'completed')
                                        <p style="background-color: #b9e38f; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: forestgreen;">Completed!!</p>
                                        @elseif($appointment['status'] == 'reshedule')
                                        <a href="javascript:void(0);" data-route="{{route('user.appointment.accept', $appointment['id'])}}" id="accept"><button class="btn btn-success"><i class="fa fa-check"></i> Accept</button></a>
                                        <a href="{{route('user.appointment.reshedule', $appointment['id'])}}"><button class="btn btn-warning"><i class="fa fa-refresh"></i> Reshedule</button></a>
                                        @else
                                        <p style="background-color: #dd9fa8; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #c70a2d;"> Cancelled!!</p>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{route('appointments.view', ['id'=>$appointment->id])}}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                    </td>
                                    <td align="center">
                                        <a href="javascript:void(0);"><i class="fa-solid fa-comments review_1"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
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

<!--Modal-->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade review_1" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="review-text">
          <h2>Review here</h2> 
         <form>
               <textarea id="w3review" name="w3review" rows="4" cols="60">
               </textarea>
               <div class="rating rating2"><!--
            	--><a href="#5" title="Give 5 stars">★</a><!--
            	--><a href="#4" title="Give 4 stars">★</a><!--
            	--><a href="#3" title="Give 3 stars">★</a><!--
            	--><a href="#2" title="Give 2 stars">★</a><!--
            	--><a href="#1" title="Give 1 star">★</a>
            </div>
               
               
               <!--<div class="review-rating">-->
               <!--  <ul>-->
               <!--      <li><i class="fa-solid fa-star"></i></li>-->
               <!--      <li><i class="fa-solid fa-star"></i></li>-->
               <!--      <li><i class="fa-solid fa-star"></i></li>-->
               <!--      <li><i class="fa-solid fa-star"></i></li>-->
               <!--      <li><i class="fa-solid fa-star"></i></li>-->
               <!--  </ul>   -->
               <!--</div>-->
         </form>  
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>







@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script>
    $('#example').DataTable({
        "aaSorting": [],
        "columnDefs": [{
                "orderable": false,
                "targets": [ 7, 8]
            },
            {
                "orderable": true,
                "targets": [1, 2, 3, 4, 5, 6]
            }
        ]
    });

    $(document).on('click', '#accept', function(e) {
		    swal({
				title: "Are you sure?",
				text: "To accept the appointment",
				type: "warning",
				confirmButtonText: "Yes",
				showCancelButton: true
		    })
		    	.then((result) => {
					if (result.value) {
					    window.location = $(this).data('route');
					} else if (result.dismiss === 'cancel') {
					    swal(
					      'Cancelled',
					      'Your stay here :)',
					      'error'
					    )
					}
				})
		});
</script>
@endpush
