@extends('seller.layouts.master')
@section('title')
Groomly | Booking Reshedule
@endsection
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<style type="text/css">
    .bootstrap-timepicker-meridian,
    .meridian-column {
        display: none;
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
                <div class="breadcrumb-title pe-3">Reshedule</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('booking-history.index')}}">Booking History</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Reshedule Booking</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('booking-history.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <h6 class="mb-0 text-uppercase">Reshedule Booking Time & Date</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('booking-history.reshedule.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$appointment['id']}}">
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Booking Date<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" onfocus="this.showPicker()" id="inputPhoneNo2" value="{{date('Y-m-d',strtotime($appointment['booking_date']))}}" name="booking_date" min="{{date('Y-m-d',strtotime('today'))}}">
                                            @if($errors->has('booking_date'))
                                            <div class="error" style="color:red;">{{ $errors->first('booking_date') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Booking Time<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="booking_time_id" id="" class="form-control">
                                                <option value="">Select a time</option>
                                                @foreach($times as $booking_time)
                                                <option value="{{$booking_time['id']}}" @if($booking_time['id'] == $appointment['booking_time_id']) selected @endif>{{$booking_time['time']}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('booking_time_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('booking_time_id') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info px-5">Reshedule</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#timepicker').timepicker({
            showMeridian: false,
            showInputs: true
        });
    });
</script>
<script type="text/javascript">
    Dropzone.options.imageUpload = {
        maxFilesize: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>
@endpush