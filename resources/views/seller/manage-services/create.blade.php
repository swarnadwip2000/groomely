@extends('seller.layouts.master')
@section('title')
Groomely | Manage Services Create
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
                            <li class="breadcrumb-item"><a href="{{route('manage-services.index')}}">Manage Services</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('manage-services.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <h6 class="mb-0 text-uppercase">Create Services</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('manage-services.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Service<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="service_id" id="additionalServiceId" class="form-control" onchange="serviceChange()">
                                                @foreach($services as $service)
                                                 <option value="{{$service->id}}" selected>{{$service->additionalService->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('category_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('category_id') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="categoryName"  readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Service Type</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="serviceTypeName"  readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Duration</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="duration" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="description" readonly></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Offer (%)</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="offer" readonly>
                                            <input type="hidden" class="form-control" id="offer_id" name="offer" >
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="checkbox" checked name="vehicle1" class="checkOff">
                                        </div>
                                    </div>
                                                                
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Rate<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPhoneNo2"  name="rate" placeholder="Rate($)">
                                            @if($errors->has('rate'))
                                            <div class="error" style="color:red;">{{ $errors->first('rate') }}</div>
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


<script>
    $(document).ready ( function(){
        var service_id = $('#additionalServiceId').val();
        
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("seller.manage-services.get-service-details")}}',
            data: {
                'additional_service_id': service_id    
            },
            success: function(data) {
                $('#categoryName').val(data.detail.category.name);
                $('#serviceTypeName').val(data.detail.service_type.name);
                $('#duration').val(data.detail.duration);
                $('#description').val(data.detail.description);   
                if(data.detail.offer == null){
                    $('#offer').val('');
                    $('#offer_id').val('');
                }else{
                    $('#offer').val(data.detail.offer.offer_amount); 
                    $('#offer_id').val(data.detail.offer.id);
                }
            
            }
        });
    
    });
</script>

<script>
   function serviceChange(){
            var service_id = $('#additionalServiceId').val();
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{route("seller.manage-services.get-service-details")}}',
                data: {
                    'additional_service_id': service_id    
                },
                success: function(data) {
                    $('#categoryName').val(data.detail.category.name);
                    $('#serviceTypeName').val(data.detail.service_type.name);
                    $('#duration').val(data.detail.duration);
                    $('#description').val(data.detail.description);   
                    if(data.detail.offer == null){
                        $('#offer').val('');
                        $('#offer_id').val('');
                    }else{
                        $('#offer').val(data.detail.offer.offer_amount); 
                        $('#offer_id').val(data.detail.offer.id);
                    }
                    
                }
            });
    }
    
</script>

<script>
    $(document).ready ( function(){
        $('.checkOff').change(function() {  
            if($(this).is(":checked")) {  
                var service_id = $('#additionalServiceId').val();
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{route("seller.manage-services.get-service-details")}}',
                    data: {
                        'additional_service_id': service_id    
                    },
                    success: function(data) {  
                        if(data.detail.offer == null){
                        $('#offer').val('');
                        $('#offer_id').val('');
                    }else{
                        $('#offer').val(data.detail.offer.offer_amount); 
                        $('#offer_id').val(data.detail.offer.id);
                    }
                        
                    }
                });
                } else {  
                    $('#offer').val(''); 
                }  
            });
        
    });
    </script>
@endpush