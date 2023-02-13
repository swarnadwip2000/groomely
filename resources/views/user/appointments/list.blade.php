@extends('user.layouts.master')
@section('title')
    Groomely | Appointment List
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <style>
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .star-rating-complete {
            color: #c59b08;
        }

        .rating-container .form-control:hover,
        .rating-container .form-control:focus {
            background: #fff;
            border: 1px solid #ced4da;
        }

        .rating-container textarea:focus,
        .rating-container input:focus {
            color: #000;
        }

        .rated {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rated:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ffc700;
        }

        .rated:not(:checked)>label:before {
            content: '★ ';
        }

        .rated>input:checked~label {
            color: #ffc700;
        }

        .rated:not(:checked)>label:hover,
        .rated:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rated>input:checked+label:hover,
        .rated>input:checked+label:hover~label,
        .rated>input:checked~label:hover,
        .rated>input:checked~label:hover~label,
        .rated>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>
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
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
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
                                <!-- <div class="col-md-6"><a href="{{ route('appointments.create') }}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Booking</button></a></div> -->
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
                                        <th>Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ $appointment['service']['user']['shop_name'] }}</td>
                                            <td>{{ $appointment['service']['user']['name'] }}</td>
                                            <td>{{ $appointment['service']['user']['email'] }}</td>
                                            <td>{{ $appointment['service']['user']['phone'] }}</td>
                                            <td>{{ date('d M, Y', strtotime($appointment['booking_date'])) }}</td>
                                            <td>{{ $appointment['bookTime']['time'] }}</td>
                                            <td>{{ date('h', strtotime($appointment['service']['duration'])) }} hr
                                                {{ date('i', strtotime($appointment['service']['duration'])) }} mins</td>
                                            <td>${{ $appointment['amount'] }}</td>
                                            <td style="text-align: center;">
                                                @if ($appointment['status'] == 'process')
                                                    <p
                                                        style="background-color: #f3e1ac; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #a7882a;">
                                                        Pending!!</p>
                                                @elseif($appointment['status'] == 'accepted')
                                                    <p
                                                        style="background-color: #8fddd2; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #0b4e68;">
                                                        Accepted!!</p>
                                                @elseif($appointment['status'] == 'completed')
                                                    <p
                                                        style="background-color: #b9e38f; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: forestgreen;">
                                                        Completed!!</p>
                                                @elseif($appointment['status'] == 'reshedule')
                                                    <a href="javascript:void(0);"
                                                        data-route="{{ route('user.appointment.accept', $appointment['id']) }}"
                                                        id="accept"><button class="btn btn-success"><i
                                                                class="fa fa-check"></i> Accept</button></a>
                                                    <a
                                                        href="{{ route('user.appointment.reshedule', $appointment['id']) }}"><button
                                                            class="btn btn-warning"><i class="fa fa-refresh"></i>
                                                            Reshedule</button></a>
                                                @else
                                                    <p
                                                        style="background-color: #dd9fa8; width: auto;border-radius:50px; text-align: center;font-weight: 600; height: 23px; color: #c70a2d;">
                                                        Cancelled!!</p>
                                                @endif
                                            </td>
                                            <td align="center">
                                                <a href="{{ route('appointments.view', ['id' => $appointment->id]) }}"><i
                                                        class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                            </td>
                                            @if ($appointment['status'] == 'completed')
                                                <td align="center">
                                                    <a href="javascript:void(0);"><i class="fa-solid fa-comments review_1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal{{ $appointment['id'] }}"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                            @else
                                                <td align="center">
                                                    <a href="javascript:void(0);" style="color: grey" data-toggle="tooltip"
                                                        data-placement="right" title="You must complete the service"><i
                                                            class="fa-solid fa-comments review_1"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                            @endif
                                        </tr>


                                        <!-- Modal -->
                                        <div class="modal fade review_1" id="exampleModal{{ $appointment['id'] }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('user.review') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="review-text">
                                                                <h2>Review here</h2>
                                                                <input type="hidden" name="appointment_id" value="{{ $appointment['id'] }}">
                                                                <input type="hidden" name="service_id" value="{{ $appointment['service_id'] }}">
                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                                <textarea id="w3review" name="review" rows="4" cols="60">
                                                                @if (isset($appointment->getRating($appointment['id'])->comment))
                                                                {{ $appointment->getRating($appointment['id'])->comment }}
                                                                @endif
                                                                </textarea>
                                                                
                                                                <div class="rating rating2">
                                                                   
                                                                    <div class="col">
                                                                        <div class="rate">
                                                                        @if (isset($appointment->getRating($appointment['id'])->rating))
                                                                            <input type="radio" id="star50{{ $appointment['id'] }}" class="rate" name="rating" value="5" 
                                                                {{ ($appointment->getRating($appointment['id'])->rating == '5')? "checked" : "" }}  />
                                                                                    <label for="star50{{ $appointment['id'] }}" title="text">5 stars</label>                                                                              
                                                                            <input type="radio" id="star40{{ $appointment['id'] }}" class="rate" name="rating" value="4" 
                                                                {{ ($appointment->getRating($appointment['id'])->rating == '4')? "checked" : "" }}  />
                                                                                <label for="star40{{ $appointment['id'] }}" title="text">4 stars</label>
                                                                            <input type="radio" id="star30{{ $appointment['id'] }}" class="rate" name="rating" value="3" 
                                                                {{ ($appointment->getRating($appointment['id'])->rating == '3')? "checked" : "" }} />
                                                                                <label for="star30{{ $appointment['id'] }}" title="text">3 stars</label>                                                                               
                                                                            <input type="radio" id="star20{{ $appointment['id'] }}" class="rate" name="rating" value="2" 
                                                                {{ ($appointment->getRating($appointment['id'])->rating == '2')? "checked" : "" }} />
                                                                                <label for="star20{{ $appointment['id'] }}" title="text">2 stars</label>
                                                                            <input type="radio" id="star10{{ $appointment['id'] }}" class="rate" name="rating" value="1" 
                                                                {{ ($appointment->getRating($appointment['id'])->rating == '1')? "checked" : "" }} />
                                                                                <label for="star10{{ $appointment['id'] }}" title="text">1 star</label>  

                                                                    @else
                                                                       
                                                                        
                                                                        <input type="radio" id="star5{{ $appointment['id'] }}" class="rate" name="rating" value="5" />
                                                                                    <label for="star5{{ $appointment['id'] }}" title="text">5 stars</label>                                                                              
                                                                            <input type="radio" id="star4{{ $appointment['id'] }}" class="rate" name="rating" value="4" />
                                                                                <label for="star4{{ $appointment['id'] }}" title="text">4 stars</label>
                                                                            <input type="radio" id="star3{{ $appointment['id'] }}" class="rate" name="rating" value="3" />
                                                                                <label for="star3{{ $appointment['id'] }}" title="text">3 stars</label>                                                                               
                                                                            <input type="radio" id="star2{{ $appointment['id'] }}" class="rate" name="rating" value="2" >
                                                                                <label for="star2{{ $appointment['id'] }}" title="text">2 stars</label>
                                                                            <input type="radio" id="star1{{ $appointment['id'] }}" class="rate" name="rating" value="1" />
                                                                                <label for="star1{{ $appointment['id'] }}" title="text">1 star</label> 

                                                                        @endif                                                                              
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
                                                                </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script>
        $('#example').DataTable({
            "aaSorting": [],
            "columnDefs": [{
                    "orderable": false,
                    "targets": [7, 8]
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

    <script>
        function userrating(id, sid) {
            $('#user_rate' + sid).val(id);
        }
    </script>
@endpush
