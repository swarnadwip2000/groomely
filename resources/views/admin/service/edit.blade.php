@extends('admin.layouts.master')
@section('title')
Groomely | Service Edit
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
                <div class="breadcrumb-title pe-3">Edit</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('service.index')}}">Service</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('service.index')}}"><button type="button" class="btn btn-dark">
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
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
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
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name<span style="color:red">*<span></label>
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
                                            <input type="text" class="form-control" id="timepicker" value="{{ $Service->duration }}" name="duration" placeholder="Duration">
                                            @if($errors->has('duration'))
                                            <div class="error" style="color:red;">{{ $errors->first('duration') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                   
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Description<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <textarea name="description" id="editor1" class="form-control" cols="30" rows="10">{{ $service->description }}</textarea>
                                            @if($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image(Drag and drop atleast 4 images)<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control dropzone" id="image-upload" name="image[]" multiple>
                                            @if($errors->has('image.*'))
                                            <div class="error" style="color:red;">{{ $errors->first('image.*') }}</div>
                                            @endif
                                            @if($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info px-5">Create</button>
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

@endpush
