@extends('admin.layouts.master')
@section('title')
Groomly | Contact Us Cms
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
                <div class="breadcrumb-title pe-3">Contact Us Cms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us Cms</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Contact Us Cms</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('contact-us-cms.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $contactUs['id'] }}">
                                <div class="border p-4 rounded">
                                    
                                    {{-- <label for="inputEnterYourName" class="col-form-label"><h5>Section 1:- </h5></label> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Title <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$contactUs['title']}}" name="title" >
                                            @if($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Description<span style="color: red;">*</span></label>
                                            <textarea type="text" class="form-control" id="inputEnterYourName" name="description" >{{$contactUs['description']}}</textarea>
                                            @if($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Visit Us <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$contactUs['visit_us']}}" name="visit_us" >
                                            @if($errors->has('visit_us'))
                                            <div class="error" style="color:red;">{{ $errors->first('visit_us') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Call Us<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$contactUs['call_us']}}" name="call_us" >
                                            @if($errors->has('call_us'))
                                            <div class="error" style="color:red;">{{ $errors->first('call_us') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Mail Us <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$contactUs['mail_us']}}" name="mail_us" >
                                            @if($errors->has('mail_us'))
                                            <div class="error" style="color:red;">{{ $errors->first('mail_us') }}</div>
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