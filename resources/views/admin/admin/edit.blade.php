@extends('admin.layouts.master')
@section('title')
    Groomely | Admin
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admins</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="{{ route('admin.index') }}"><button type="button" class="btn btn-dark">
                                    < Back</button></a>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->

                <!--end row-->
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Edit Admin</h6>
                        <hr>
                        <div class="card border-top border-0 border-4 border-info">
                            <div class="card-body">
                                <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="admin_id" value="{{ $admin->id }}">
                                    <div class="border p-4 rounded">
                                      
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name<span
                                                    style="color:red">*<span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputEnterYourName"
                                                    value="{{ $admin->name }}" name="name"
                                                    placeholder="Enter Name">
                                                @if ($errors->has('name'))
                                                    <div class="error" style="color:red;">{{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Email<span
                                                    style="color:red">*<span></label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    value="{{ $admin->email }}" name="email" placeholder="Enter Email">
                                                @if ($errors->has('email'))
                                                    <div class="error" style="color:red;">{{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPhoneNo" class="col-sm-3 col-form-label">Phone<span
                                                    style="color:red">*<span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhoneNo"
                                                    value="{{ $admin->phone }}" name="phone" placeholder="Enter Phone">
                                                @if ($errors->has('phone'))
                                                    <div class="error" style="color:red;">{{ $errors->first('phone') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Password<span
                                                    style="color:red">*<span></label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputPassword"
                                                    value="{{ old('password') }}" name="password" placeholder="Enter Password">
                                                @if ($errors->has('password'))
                                                    <div class="error" style="color:red;">{{ $errors->first('password') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputImage" class="col-sm-3 col-form-label">Image<span
                                                    style="color:red">*<span></label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="inputImage"
                                                    name="image" placeholder="Enter Image">
                                                @if ($errors->has('image'))
                                                    <div class="error" style="color:red;">{{ $errors->first('image') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        @if($admin['profile_picture'])
                                        <div class="row mb-3">
                                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image Preview</label>
                                            <div class="col-sm-9">
                                                <img src="{{Storage::url($admin['profile_picture'])}}" style="width: 100px; height:100px;" alt="">
                                            </div>

                                        </div>
                                        @endif
                                        
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
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.on('instanceReady', function(evt) {
            var editor = evt.editor;

            editor.on('change', function(e) {
                var contentSpace = editor.ui.space('contents');
                var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
                var ckeditorFrame = ckeditorFrameCollection[0];
                var innerDoc = ckeditorFrame.contentDocument;
                var innerDocTextAreaHeight = $(innerDoc.body).height();
                console.log(innerDocTextAreaHeight);
            });
        });
    </script>
@endpush
