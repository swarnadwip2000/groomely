@extends('admin.layouts.master')
@section('title')
Groomely | Contact Us
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
                <div class="breadcrumb-title pe-3">Contact Us</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('contact-us.index')}}">Contact Us</i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="user-profile-page">
                <div class="card radius-15">
                    <div class="card-body">
                        
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="Experience">
                                <div class="card shadow-none mb-0 ">
                                    
                                    <div class="row">
                                        <div class="col-md-12 m-1"> Name:-  {{$contact['full_name']}}</div>
                                        <div class="col-md-12 m-1"> Email:-  {{$contact['email']}}</div>
                                        <div class="col-md-12 m-1"> Phone:-  {{$contact['phone']}}</div>
                                        <div class="col-md-12 m-1"> Message:-  {!! $contact['message'] !!}</div>
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