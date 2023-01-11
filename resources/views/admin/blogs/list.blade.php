@extends('admin.layouts.master')
@section('title')
Groomly | Blogs
@endsection
@push('styles')
<style>
    .tooltip-inner {
    max-width: 1500px !important; //define whatever width you want
}
.tooltip {
  font-family: Georgia;
  font-size: 15px;
}
.tooltip .tooltip-inner {
  background-color: #d5a353;
  color: white;
}
</style>
@endpush

@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Blogs</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6"><h4 class="mb-0">Blogs</h4></div>
                            <div class="col-md-6"><a href="{{route('blogs.create')}}" style="float: right;" ><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add blog</button></a></div>
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Descripiton</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>

                                    <td>{{$blog['name']}}</td>
                                    <td style="cursor: pointer;" data-toggle="tooltip" rel="tooltip" data-placement="top" title="{!! $blog['description'] !!}">{!! substr($blog['description'], 0,60) !!}.......</td>
                                    <td>{{$blog['slug']}}</td>
                                    <td>{{$blog['category']['name']}}</td>
                                    <td>
                                        <input data-id="{{$blog['id']}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $blog['status'] ? 'checked' : '' }}>
                                    </td>
                                    <td align="center">
                                        <a href="{{route('blogs.show', $blog->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                        <a href="{{route('blogs.delete', $blog->id)}}" onclick="return confirm('Are you sure to delete this blog?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection

@push('scripts')

 <script>
     $( document ).ready(function() {
         $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
     });
 </script>

<script>
    $(document).ready(function() {
        //Default data table
        $('#example').DataTable({
            "aaSorting": [],
            "columnDefs": [{
                "orderable": false,
                "targets": [3, 4]
            },
            {
                "orderable": true,
                "targets": [0,1,2]
            }
        ]
        });

    });
</script>
<script>
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/changeBlogStatus',
            data: {
                'status': status,
                'user_id': user_id
            },
            success: function(resp) {
                console.log(resp.success)
            }
        });
    });
</script>
@endpush
