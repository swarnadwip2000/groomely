@extends('admin.layouts.master')
@section('title')
Groomly | Service cms
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
                            <li class="breadcrumb-item"><a href="{{route('service.cms')}}">Service cms</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Service cms</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('service.cms')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Service cms</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <form action="{{route('service-cms.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$serviceCms['id']}}">
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name <span style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$serviceCms['name']}}" name="name" placeholder="Enter Your Service-cms Name">
                                            @if($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Title <span style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$serviceCms['title']}}" name="title" placeholder="Enter Your Service-cms Title">
                                            @if($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Description <span style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inputEnterYourName" value="{{$serviceCms['description']}}" name="description" placeholder="Enter Your Service-cms Description">{{$serviceCms['description']}}</textarea>
                                            @if($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Image <span style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="image"  name="image">
                                            @if($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>                               
                                    </div>
                                    <div class="row mb-3 prevwimg" >
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-3 mb-2">
                                            @if($serviceCms->image)
                                            <img id="preview-image-before-upload" src="{{ Storage::url($serviceCms->image) }}"
                                                alt="preview image" style="max-height: 100px;">
                                            @endif    
                                        </div>
                                    </div>

                                   
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Icon<span style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="icon"  name="icon">
                                            @if($errors->has('icon'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3 prevwicn" >
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-3 mb-2">
                                            @if($serviceCms->icon)
                                            <img id="preview-icon-before-upload" src="{{ Storage::url($serviceCms->icon) }}"
                                                alt="preview image" style="max-height: 100px;">
                                            @endif    
                                        </div>
                                    </div>

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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<script type="text/javascript">
      
$(document).ready(function (e) { 
   $('#image').change(function(){ 
    $('.prevwimg').show();         
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]);   
   });   
});

$(document).ready(function (e) { 
   $('#icon').change(function(){ 
    $('.prevwicn').show();         
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#preview-icon-before-upload').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]);   
   });   
});
 
</script>
@endsection

@push('scripts')

@endpush