@extends('seller.layouts.master')
@section('title')
Groomely | Manage Booking Edit
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
<style>
    .image-area {
        position: relative;
        width: 15%;
        background: #333;
    }

    .image-area img {
        max-width: 100%;
        height: auto;
    }

    .remove-image {
        display: none;
        position: absolute;
        top: -10px;
        right: -10px;
        border-radius: 10em;
        padding: 2px 6px 3px;
        text-decoration: none;
        font: 700 21px/20px sans-serif;
        background: #555;
        border: 3px solid #fff;
        color: #FFF;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        -webkit-transition: background 0.5s;
        transition: background 0.5s;
    }

    .remove-image:hover {
        background: #E54E4E;
        padding: 3px 7px 5px;
        top: -11px;
        right: -11px;
    }

    .remove-image:active {
        background: #E54E4E;
        top: -10px;
        right: -11px;
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
                <div class="breadcrumb-title pe-3">Edit</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('manage-services.index')}}">Manage Booking</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('manage-services.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Booking</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('seller.manage-services.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$service['id']}}">
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">Select A Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category['id']}}" @if($service['category_id']==$category['id']) selected @endif>{{$category['name']}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('category_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('category_id') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Service Type<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="service_type_id" id="" class="form-control">
                                                <option value="">Select A Service Type</option>
                                                @foreach($serviceTypes as $serviceType)
                                                <option value="{{$serviceType['id']}}" @if($service['service_type_id']==$serviceType['id']) selected @endif>{{$serviceType['name']}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('service_type_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('service_type_id') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$service['name']}}" name="name" placeholder="Enter Your Name">
                                            @if($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Rate<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPhoneNo2" value="{{$service['rate']}}" name="rate" placeholder="Rate($)">
                                            @if($errors->has('rate'))
                                            <div class="error" style="color:red;">{{ $errors->first('rate') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Duration<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="timepicker" value="{{$service['duration']}}" name="duration" placeholder="Duration">
                                            @if($errors->has('duration'))
                                            <div class="error" style="color:red;">{{ $errors->first('duration') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Description<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <textarea name="description" id="editor1" class="form-control" cols="30" rows="10">{{$service['description']}}</textarea>
                                            @if($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control dropzone" id="image-upload" name="image[]" multiple>
                                            @if($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                            @endif
                                            @if($errors->has('image.*'))
                                            <div class="error" style="color:red;">{{ $errors->first('image.*') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    @if($service['images'])
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image Preview</label>
                                        <div class="col-sm-9" style="display: flex;">
                                            @foreach($service['images'] as $image)
                                            <div class="image-area m-4" id="{{$image['id']}}">
                                                <img src="{{Storage::url($image['slider_image'])}}" alt="Preview" >
                                                <a class="remove-image" href="javascript:void(0);" data-id="{{$image['id']}}" style="display: inline;">&#215;</a>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    @endif
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info px-5">Update</button>
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
<script>
    $('.remove-image').on('click', function() {
        var id = $(this).attr('data-id');
        // alert(id);
        $.ajax({
            url: '/seller/deleteImage/' + id,
            type: 'get',
            success: function(response) {
                $('#'+id).hide();
            }
        });
    });
</script>
@endpush