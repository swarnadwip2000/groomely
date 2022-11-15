@extends('admin.layouts.master')
@section('title')
Groomly | Blogs
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
                            <li class="breadcrumb-item"><a href="{{route('blogs.index')}}">Blogs</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('blogs.index')}}"><button type="button" class="btn btn-dark">
                                < Back</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--end row-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Blogs</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                        <form action="{{route('admin.blogs.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$blog['id']}}">
                                <div class="border p-4 rounded">
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <select name="blog_category_id" id="" class="form-control">
                                                <option value="">Select A Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category['id']}}" @if($blog['blog_category_id'] == $category['id']) selected @endif>{{$category['name']}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('blog_category_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('blog_category_id') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName" value="{{$blog['name']}}" name="name" placeholder="Enter Your Name">
                                            @if($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Slug<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPhoneNo2" value="{{$blog['slug']}}" name="slug" placeholder="Slug">
                                            @if($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="inputConfirmPassword2" name="image" placeholder="Confirm Password">
                                            @if($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    @if($blog['image'])
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image Preview</label>
                                        <div class="col-sm-9">
                                            <img src="{{Storage::url($blog['image'])}}" style="width: 100%; height:180px;" alt="">
                                        </div>

                                    </div>
                                    @endif
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Description<span style="color:red">*<span></label>
                                        <div class="col-sm-9">
                                            <textarea name="description" id="editor1" cols="30" rows="10">{{$blog['description']}}</textarea>
                                            @if($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
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