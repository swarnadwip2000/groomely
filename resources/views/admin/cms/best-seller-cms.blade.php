@extends('admin.layouts.master')
@section('title')
Groomely | Best-seller Cms
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
                <div class="breadcrumb-title pe-3">BestSeller Cms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">BestSeller Cms</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">BestSeller Cms</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('best-seller-cms.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $best_seller['id'] }}">
                                <div class="border p-4 rounded">
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Banner Section:- </h5></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner Image <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="inputEnterYourName" value="{{ $best_seller['banner_img'] }}" name="banner_img">
                                            @if($errors->has('banner_img'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_img') }}</div>
                                            @endif
                                        </div>
                                         <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Banner name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$best_seller['banner_name']}}" name="banner_name" >
                                            @if($errors->has('banner_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6" >
                                            @if($best_seller->banner_img)
                                            <a href="{{Storage::url($best_seller->banner_img)}}" target="_blank">
                                            <img src="{{ Storage::url($best_seller->banner_img) }}" alt="" style="height: 150px; float:right; width: 100%; margin-top:10px;"></a>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <label for="inputEnterYourName" class="col-form-label"><h5>Content</h5></label>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Content title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$best_seller['section_title']}}" name="section_title" >
                                            @if($errors->has('section_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_title') }}</div>
                                            @endif
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <label for="inputPhoneNo2" class=" col-form-label">Content Description<span style="color:red">*<span></label>
                                            <textarea name="section_description" id="" class="form-control" cols="30" rows="10">{{$best_seller['section_description']}}</textarea>
                                            @if($errors->has('section_description'))
                                            <div class="error" style="color:red;">{{ $errors->first('section_description') }}</div>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    
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