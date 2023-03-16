@extends('admin.layouts.master')
@section('title')
Groomely | Home Cms
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
                <div class="breadcrumb-title pe-3">Home Cms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Home Cms</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Home Cms</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('home-cms.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $home['id'] }}">
                                <div class="border p-4 rounded">
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Banner Section:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner Image <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $home['banner_img'] }}" name="banner_img">
                                            @if($errors->has('banner_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_img') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6" >
                                            @if($home->banner_img)
                                            <a href="{{Storage::url($home->banner_img)}}" target="_blank">
                                            <img src="{{ Storage::url($home->banner_img) }}" alt="" style="height: 150px; float:right; width: 100%;"></a>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner contenet 1 <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$home['banner_content_1']}}" name="banner_content_1" >
                                            @if($errors->has('banner_content_1'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_content_1') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Banner contenet 2<span style="color:red">*<span></label>
                                            <input type="text" class="form-control" id="inputPhoneNo2" value="{{$home['banner_content_2']}}" name="banner_content_2" >
                                            @if($errors->has('banner_content_2'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_content_2') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 1:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 1 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$home['section_1_title']}}" name="section_1_title" >
                                            @if($errors->has('section_1_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_1_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 1 Description<span style="color:red">*<span></label>
                                            <textarea name="section_1_description" id="" class="form-control" cols="30" rows="10">{{$home['section_1_description']}}</textarea>
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
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$home['section_2_title']}}" name="section_2_title" >
                                            @if($errors->has('section_2_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_2_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 2 name<span style="color:red">*<span></label>
                                            <input type="text" class="form-control" id="inputPhoneNo2" value="{{$home['section_2_name']}}" name="section_2_name" >
                                            @if($errors->has('section_2_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_2_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 2 Image<span style="color:red">*<span></label>
                                            <input type="file" class="form-control" id="inputPhoneNo2" value="{{$home['section_2_img']}}" name="section_2_img" >
                                            @if($errors->has('section_2_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_2_img') }}</div>
                                            @endif
                                        </div>
                                         <div class="col-md-6">
                                            @if($home->section_2_img)
                                            <a href="{{Storage::url($home->section_2_img)}}" target="_blank">
                                            <img src="{{ Storage::url($home->section_2_img) }}" alt="" style="height: 150px; width: 100%;  float:right; margin-top:10px;"></a>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 2 description<span style="color:red">*<span></label>
                                            <textarea name="section_2_description" id="" class="form-control" cols="30" rows="10">{{$home['section_2_description']}}</textarea>
                                            @if($errors->has('section_2_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_2_description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 3:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 3 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$home['section_3_title']}}" name="section_3_title" >
                                            @if($errors->has('section_3_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_3_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 3 description<span style="color:red">*<span></label>
                                            <textarea name="section_3_description" id="" class="form-control" cols="30" rows="10">{{$home['section_3_description']}}</textarea>
                                            @if($errors->has('section_3_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_3_description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>

                                    <label for="inputEnterYourName" class="col-form-label"><h5>Middle Banner Section:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner 1 <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $home['middle_banner_1'] }}" name="middle_banner_1">
                                            @if($errors->has('middle_banner_1'))
                                            <div class="error" style="color:red;">{{ $errors->first('middle_banner_1') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6" >
                                            @if($home->middle_banner_1)
                                            <a href="{{Storage::url($home->middle_banner_1)}}" target="_blank">
                                            <img src="{{ Storage::url($home->middle_banner_1) }}" alt="" style="height: 150px; float:right; width: 100%;"></a>
                                            @endif
                                        </div>
                                    </div>
                                    </br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner 2 <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $home['middle_banner_2'] }}" name="middle_banner_2">
                                            @if($errors->has('middle_banner_2'))
                                            <div class="error" style="color:red;">{{ $errors->first('middle_banner_2') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6" >
                                            @if($home->middle_banner_2)
                                            <a href="{{Storage::url($home->middle_banner_2)}}" target="_blank">
                                            <img src="{{ Storage::url($home->middle_banner_2) }}" alt="" style="height: 150px; float:right; width: 100%;"></a>
                                            @endif
                                        </div>
                                    </div>
                                    </br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner 2 <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $home['middle_banner_3'] }}" name="middle_banner_3">
                                            @if($errors->has('middle_banner_3'))
                                            <div class="error" style="color:red;">{{ $errors->first('middle_banner_3') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6" >
                                            @if($home->middle_banner_3)
                                            <a href="{{Storage::url($home->middle_banner_3)}}" target="_blank">
                                            <img src="{{ Storage::url($home->middle_banner_3) }}" alt="" style="height: 150px; float:right; width: 100%;"></a>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>


                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 4:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 4 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$home['section_4_title']}}" name="section_4_title" >
                                            @if($errors->has('section_4_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_4_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 4 description<span style="color:red">*<span></label>
                                            <textarea name="section_4_description" id="" class="form-control" cols="30" rows="10">{{$home['section_4_description']}}</textarea>
                                            @if($errors->has('section_4_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_4_description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Section 5:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Section 5 title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$home['section_5_title']}}" name="section_5_title" >
                                            @if($errors->has('section_5_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_5_title') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 5 Image<span style="color:red">*<span></label>
                                            <input type="file" class="form-control" id="inputPhoneNo2" value="{{old('section_5_img')}}" name="section_5_img" >
                                            @if($errors->has('section_5_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_5_img') }}</div>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Section 5 description<span style="color:red">*<span></label>
                                            <textarea name="section_5_description" id="" class="form-control" cols="30" rows="10">{{$home['section_5_description']}}</textarea>
                                            @if($errors->has('section_5_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_5_description') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                            @if($home->section_5_img)
                                            <a href="{{Storage::url($home->section_5_img)}}" target="_blank">
                                            <img src="{{ Storage::url($home->section_5_img) }}" alt="" style="height: 150px; width: 100%; margin-top:38px;"></a>
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