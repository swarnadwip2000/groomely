@extends('seller.layouts.master')
@section('title')
Groomely | View Services details
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
                <div class="breadcrumb-title pe-3">Manage Services</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('manage-services.index')}}">Manage Services</i></a>
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
                                        <div class="col-md-12 m-1"><b>Category Name:- </b>{{$sellerService['service']['category']['name']}}</div>
                                        <div class="col-md-12 m-1"><b>Service Type Name:-</b>{{$sellerService['service']['serviceType']['name']}}</div>
                                        <div class="col-md-12 m-1"><b>Additional Service :- </b>{{$sellerService['service']['additionalService']['name']}}</div>
                                        <div class="col-md-12 m-1"><b>Rating :- </b>${{$sellerService['rate']}}</div>
                                        <div class="col-md-12 m-1"><b>Duration:- </b>{{date('h',strtotime($sellerService['service']['duration']))}} hr {{date('i',strtotime($sellerService['service']['duration']))}} mins</div>
                                        <div class="col-md-12 m-1"><b>Description:- </b>{!! $sellerService['service']['description'] !!}</div>
                                        
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