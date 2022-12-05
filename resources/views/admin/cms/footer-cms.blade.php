@extends('admin.layouts.master')
@section('title')
Groomly | Footer Cms
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
                <div class="breadcrumb-title pe-3">Footer Cms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Footer Cms</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Footer Cms</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('footer-cms.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $footer['id'] }}">
                                <div class="border p-4 rounded">
                                    
                                    {{-- <label for="inputEnterYourName" class="col-form-label"><h5>Section 1:- </h5></label> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Copyright Content <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['copyright_content']}}" name="copyright_content" >
                                            @if($errors->has('copyright_content'))
                                            <div class="error" style="color:red;">{{ $errors->first('copyright_content') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Facebook Link <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['facebook_link']}}" name="facebook_link" >
                                            @if($errors->has('facebook_link'))
                                            <div class="error" style="color:red;">{{ $errors->first('facebook_link') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Youtube Link <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['youtube_link']}}" name="youtube_link" >
                                            @if($errors->has('youtube_link'))
                                            <div class="error" style="color:red;">{{ $errors->first('youtube_link') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Instagram Link<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['instagram_link']}}" name="instagram_link" >
                                            @if($errors->has('instagram_link'))
                                            <div class="error" style="color:red;">{{ $errors->first('instagram_link') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Address <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['address']}}" name="address" >
                                            @if($errors->has('address'))
                                            <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Phone <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['phone']}}" name="phone" >
                                            @if($errors->has('phone'))
                                            <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEnterYourName" class="col-form-label">Email <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$footer['email']}}" name="email" >
                                            @if($errors->has('email'))
                                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
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