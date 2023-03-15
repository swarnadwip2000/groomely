@extends('admin.layouts.master')
@section('title')
Groomely | Additional Service List
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
                <div class="breadcrumb-title pe-3">Additional Service</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('service-type.index')}}">Service type</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Additional Service</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">{{ $service_type->name }}'s Additional Service</h4>
                            </div>
                            <div class="col-md-6"><a href="{{route('additional-service.create',$service_type->id)}}" style="float: right;"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i>
                                Add Additional service</button></a></div>

                                
                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Additional Service</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($additional_services as $additionalService)
                                <tr>
                                    <td>{{$additionalService['name']}}</td>    
                                    <td>
                                        <div class="button-switch">
                                            <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                data-id="{{ $additionalService['id'] }}"
                                                {{ $additionalService['status'] ? 'checked' : '' }} />
                                            <label for="switch-orange" class="lbl-off"></label>
                                            <label for="switch-orange" class="lbl-on"></label>
                                        </div>
                                    </td>
                                    <td align="center">
                                        <a href="#" ><i class="fas fa-edit" onclick="editadditionalservice({{$additionalService['id']}})"></i></a> &nbsp;&nbsp; 
                                        <a href="{{route('additional-service.delete', $additionalService['id'])}}" onclick="return confirm('Are you sure to delete this additional service?')"><i class="fas fa-trash"></i></a>                                      
                                    </td>
                                    
                                </tr>

                                <div class="modal fade" id="exampleModalCenter_{{$additionalService['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Additional Service</h5>
                                          <button type="button" class="btn btn-primary close" data-bs-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form action="{{route('additional-service.update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden"  name="addiitional_serviceId" value="{{$additionalService['id']}}">
                                                    <input type="hidden" name="service_typeId" value="{{$service_type->id}}">
                                                    
                                                    <div class="border p-4 rounded">
                                                        <div class="row mb-3">
                                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputEnterYourName" name="additional_service" value="{{$additionalService['name']}}" placeholder="Enter Service" >
                                                                @if($errors->has('name'))
                                                                <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                                @endif
                                                            </div>                   
                                                        </div>
                                                        

                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-9">
                                                                <button type="submit" class="btn btn-primary px-5">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                   
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
    $(document).ready(function() {
        //Default data table
        $('#example').DataTable({
            "aaSorting": [],
            "columnDefs": [{
                "orderable": false,
                "targets": [2]
            },
            {
                "orderable": true,
                "targets": [0,1]
            }
        ]
        });

    });
</script>
<script>
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var additional_service_id = $(this).data('id');
        
        

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("admin.additional-service.change-status")}}',
            data: {
                'status': status,
                'additional_service_id': additional_service_id
            },
            success: function(resp) {
                console.log(resp.success)
            }
        });
    });
</script>

<script>
    function editadditionalservice(id){
        $('#exampleModalCenter_'+id).modal('show');
    }
</script>



@endpush
