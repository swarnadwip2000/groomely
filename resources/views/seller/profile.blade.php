@extends('seller.layouts.master')
@section('title')
Groomely | Profile
@endsection
@push('styles')
@endpush

@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">User Profile</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="user-profile-page">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-7 border-right">
                                <div class="d-md-flex align-items-center">
                                    <div class="mb-md-0 mb-3">
                                        @if(!Auth::user()->profile_picture)
                                        <img src="{{asset('admin_assets/images/avatars/avatar-1.png')}}" class="rounded-circle shadow" width="130" height="130" alt="" />
                                        @else
                                        <img src="{{Storage::url(Auth::user()->profile_picture)}}" class="rounded-circle shadow" width="130" height="130" alt="">
                                        @endif
                                    </div>
                                    <div class="ms-md-4 flex-grow-1">
                                        <div class="d-flex align-items-center mb-1">
                                            <h4 class="mb-0">{{Auth::user()->name}}</h4>
                                        </div>
                                        <p class="mb-0 text-muted">Seller</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end row-->

                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="Edit-Profile">
                                <div class="card shadow-none border mb-0 radius-15">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12 col-lg-5 border-right">
                                                    <form class="row g-3" action="{{route('seller.profile.update')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-12">
                                                            <label class="form-label">Shop Logo</label>
                                                            <input type="file" name="profile_picture" class="form-control">
                                                            @if($errors->has('profile_picture'))
                                                            <div class="error" style="color:red;">{{ $errors->first('profile_picture') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control">
                                                            @if($errors->has('name'))
                                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Shop Name</label>
                                                            <input type="text" value="{{Auth::user()->shop_name}}" name="shop_name" class="form-control">
                                                            @if($errors->has('shop_name'))
                                                            <div class="error" style="color:red;">{{ $errors->first('shop_name') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Email</label>
                                                            <input type="text" value="{{Auth::user()->email}}" name="email" class="form-control">
                                                            @if($errors->has('email'))
                                                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" value="{{Auth::user()->phone}}" name="phone" class="form-control" autocomplete="false">
                                                            @if($errors->has('phone'))
                                                            <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Password</label>
                                                            <input type="password" value="" class="form-control" name="password">
                                                            @if($errors->has('password'))
                                                            <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection

@push('scripts')
@endpush