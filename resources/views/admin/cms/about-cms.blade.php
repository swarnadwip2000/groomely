@extends('admin.layouts.master')
@section('title')
Groomely | About Cms
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
                <div class="breadcrumb-title pe-3">About Cms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Cms</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">About Cms</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('about-cms.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $about['id'] }}">
                                <div class="border p-4 rounded">
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Banner Section:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner Image <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $about['banner_img'] }}" name="banner_img">
                                            @if($errors->has('banner_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_img') }}</div>
                                            @endif
                                        </div>
                                         <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$about['banner_name']}}" name="banner_name" >
                                            @if($errors->has('banner_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6" >
                                            @if($about->banner_img)
                                            <img src="{{ Storage::url($about->banner_img) }}" alt="" style="height: 150px; float:right; width: 100%; margin-top:10px;">
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 1:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 1 name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$about['section_1_name']}}" name="section_1_name" >
                                            @if($errors->has('section_1_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_1_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 1 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$about['section_1_title']}}" name="section_1_title" >
                                            @if($errors->has('section_1_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_1_title') }}</div>
                                            @endif
                                        </div>
                                         <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 1 image <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $about['section_1_img'] }}" name="section_1_img">
                                            @if($errors->has('section_1_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_1_img') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                             @if($about->section_1_img)
                                            <img src="{{ Storage::url($about->section_1_img) }}" alt="" style="height: 150px; float:right; width: 100%; margin-top:10px;">
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 1 Description<span style="color:red">*<span></label>
                                            <textarea name="section_1_description" id="" class="form-control" cols="30" rows="10">{{$about['section_1_description']}}</textarea>
                                            @if($errors->has('section_1_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_1_description') }}</div>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 2:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 2 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$about['section_2_title']}}" name="section_2_title" >
                                            @if($errors->has('section_2_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_2_title') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 2 Image<span style="color:red">*<span></label>
                                            <input type="file" class="form-control" id="inputPhoneNo2" value="{{$about['section_2_img']}}" name="section_2_img" >
                                            @if($errors->has('section_2_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_2_img') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6"></div>
                                         <div class="col-md-6">
                                            @if($about->section_2_img)
                                            <img src="{{ Storage::url($about->section_2_img) }}" alt="" style="height: 150px; width: 100%;  float:right; margin-top:10px;">
                                            @endif
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 3:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 3 name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$about['section_3_name']}}" name="section_3_name" >
                                            @if($errors->has('section_3_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_3_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 3 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$about['section_3_title']}}" name="section_3_title" >
                                            @if($errors->has('section_3_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_3_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 3 Image <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $about['section_3_img'] }}" name="section_3_img">
                                            @if($errors->has('section_3_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_3_img') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6" >
                                            @if($about->section_3_img)
                                            <img src="{{ Storage::url($about->section_3_img) }}" alt="" style="height: 150px; float:right; width: 100%; margin-top:10px;">
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 3 description<span style="color:red">*<span></label>
                                            <textarea name="section_3_description" id="" class="form-control" cols="30" rows="10">{{$about['section_3_description']}}</textarea>
                                            @if($errors->has('section_3_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_3_description') }}</div>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    <div class="row" style="margin-top: 10px;">
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

@endpush