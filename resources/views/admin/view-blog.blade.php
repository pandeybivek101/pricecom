
@extends('layouts.admin.admin-layout')
@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Product List</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">E-Commerce</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Product List</a>
            </li>
        </ul>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Product List</h5>
                    <button type="button"
                        onclick='window.location.href="{{route("create-blog")}}"' class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Blog
                    </button>
                </div>
                <div class="card-block">
                    
                    <div class="dt-responsive table-responsive">
                        <div id="base-style_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <table id="base-style" class="table table-striped table-bordered nowrap dataTable"
                                        role="grid" aria-describedby="base-style_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="base-style"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 155px;">ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 254px;">Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 116px;">Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                                    style="width: 54px;">Author</th>

                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 92px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php $i=0 @endphp

                                            @foreach($blogs as $blog)

                                            @php $i++ @endphp
                                            @php $class= $i%2 ==0 ? 'even' : 'odd'; @endphp

                                            <tr role="row" class="@php echo $class; @endphp">
                                            <td>{{$blog->id}}</td>
                                                <td>
                                                
                                                    <img src="@php  echo get_image($blog->image) @endphp" height='100' width='100' class="img-fluid" alt="tbl">
                                                </td>
                                                <td>{{$blog->title}}</td>
                                                
                                                <td>{{$blog->name}}</td>
                                                <td>

                                                <a href="{{route('edit-blog', $blog->id)}}" class="m-r-15 text-muted"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="view"><i class="icofont icofont-eye-alt f-16 m-0"></i></a>
                                                    <a href="{{route('edit-blog', $blog->id)}}"
                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"><i
                                                            class="icofont icofont-ui-edit"></i></a>
                                                    <a href="{{route('delete-blog', $blog->id)}}" class="text-muted"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete" onclick="alertify();"><i
                                                            class="icofont icofont-delete-alt"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">ID</th>
                                                <th rowspan="1" colspan="1">Image</th>
                                                <th rowspan="1" colspan="1">Title</th>
                                                <th rowspan="1" colspan="1">Price</th>
                                                <th rowspan="1" colspan="1">Brand</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-overlay"></div>

</div>

@endsection


