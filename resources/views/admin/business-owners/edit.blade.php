@extends('admin.layouts.master')
@section('title')
Groomely | Business Owners
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
                            <li class="breadcrumb-item"><a href="{{route('business-owner.index')}}">Partners</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('business-owner.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Partner</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('admin.business-owner.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$business_owner['id']}}">
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name<span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$business_owner['name']}}" name="name" placeholder="Enter Your Name">
                                            @if($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No<span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPhoneNo2" value="{{$business_owner['phone']}}" name="phone" placeholder="Phone No">
                                            @if($errors->has('phone'))
                                            <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address<span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEmailAddress2" value="{{$business_owner['email']}}" name="email" placeholder="Email Address">
                                            @if($errors->has('email'))
                                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputAddress4" class="col-sm-3 col-form-label">Zip Code<span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputAddress4" value="@if($business_owner['zipcode']) {{$business_owner['zipcode']}} @endif" name="zipcode" placeholder="Zip Code">
                                            @if($errors->has('zipcode'))
                                            <div class="error" style="color:red;">{{ $errors->first('zipcode') }}</div>
                                            @endif
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputShopname" class="col-sm-3 col-form-label">Shop Name<span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputShopname" value="@if($business_owner['shop_name']) {{$business_owner['shop_name']}} @endif" name="shop_name" placeholder="Shop Name">
                                            @if($errors->has('shop_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('shop_name') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="inputConfirmPassword2" name="profile_picture" placeholder="Confirm Password">
                                            @if($errors->has('profile_picture'))
                                            <div class="error" style="color:red;">{{ $errors->first('profile_picture') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    @if($business_owner->profile_picture)
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image Preview</label>
                                        <div class="col-sm-9">
                                            <a href="{{Storage::url($business_owner->profile_picture)}}" target="_blank">
                                            <img src="{{Storage::url($business_owner->profile_picture)}}" alt="" style="width: 100%; height: 215px;"></a>
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

@endpush