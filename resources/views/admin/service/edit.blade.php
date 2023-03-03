@extends('admin.layouts.master')
@section('title')
Groomely | Service Edit
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
                            <li class="breadcrumb-item"><a href="{{route('services.index')}}">Service</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('services.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

              

            <!--end row-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Service</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('admin.service.update')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{ $Service['id'] }}" name="serviceId" id="service_id">
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="category_id" id="" class="form-control" >
                                                <option value="">Select A Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category['id']}}" @if($Service['category_id']==$category['id']) selected @endif>{{$category['name']}}</option>
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
                                            <select name="service_type_id" id="serviceType" class="form-control service_type" onchange="serviceType()" >
                                                <option value="" selected disabled>Select A Service Type</option>
                                                @foreach($serviceTypes as $serviceType)
                                                <option value="{{$serviceType['id']}}" @if($Service['service_type_id']==$serviceType['id']) selected @endif>{{$serviceType['name']}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('service_type_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('service_type_id') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Additional Service<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="additional_service_id"  id="additional-service-dropdown" class="form-control">
                                                
                                            </select>
                                            @if($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Duration<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="timepicker" value="{{ $Service['duration'] }}" name="duration" placeholder="Duration">
                                            @if($errors->has('duration'))
                                            <div class="error" style="color:red;">{{ $errors->first('duration') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                   
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Description<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <textarea name="description" id="editor1" class="form-control" cols="30" rows="10">{{ $Service['description'] }}</textarea>
                                            @if($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image<span style="color:red">*<span></label>
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

                                    @if($Service['images'])
                                    
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image Preview</label>
                                        <div class="col-sm-9" style="display: flex;">
                                            @foreach($Service['images'] as $image)
                                            
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
    $('.service_type').change(function() {  
        var service_type_id = $('#serviceType').val();

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("admin.service.get-additional-service")}}',
            data: {
                'service_type_id': service_type_id
            },
            success: function(resp) {
                // console.log(resp.data);

                $('#additional-service-dropdown').html('<option value="">Select Additional Service</option>');
                $.each(resp.data, function(key, value) {
                
                    $("#additional-service-dropdown").append('<option value="' + value
                        .id +
                        '">' + value.name + '</option>');
                });
            }
        });
    });
</script>

<script>
    $('.remove-image').on('click', function() {
        var id = $(this).attr('data-id');
        // alert(id);
        $.ajax({
            url: '/admin/deleteServiceImage/' + id,
            type: 'get',
            success: function(response) {
                $('#'+id).hide();
            }
        });
    });
</script>

<script>
    $(document).ready ( function(){
    var service_type_id = $('#serviceType').val();
    var service_id = $('#service_id').val();
   

    $.ajax({
        type: "GET",
        dataType: "json",
        url: '{{route("admin.service.get-additional-service-id")}}',
        data: {
            'service_type_id': service_type_id,
            'service_id': service_id
        },
        success: function(resp) {
           
            $.each(resp.data1, function(key, value) {   
               
                $("#additional-service-dropdown").append('<option value="' + value.id +'" ' + (value.id === resp.data.additional_service_id ? 'selected="selected"' : '') + '>' + value.name + '</option>');
                });
        
            }
        });
    });

</script>

@endpush
