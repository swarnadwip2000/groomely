@extends('admin.layouts.master')
@section('title')
Groomely | Offers
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
                <div class="breadcrumb-title pe-3">Create</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('offer.index')}}">Offers</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('offer.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Create Offer</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('offer.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Offer (%)<span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{old('offer_amount')}}" name="offer_amount" placeholder="Enter Offer Amount(%)">
                                            @if($errors->has('offer_amount'))
                                            <div class="error" style="color:red;">{{ $errors->first('offer_amount') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                   
                                   
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Offer Image <span style="color:red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="inputConfirmPassword2" name="offer_image">
                                            @if($errors->has('offer_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('offer_image') }}</div>
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