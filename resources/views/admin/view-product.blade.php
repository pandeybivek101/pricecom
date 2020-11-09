<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellspacing='0' cellpadding='0' border='1'>
    <tr>  
    <th>Name</th>
    <th>series</th>
    <th>brand</th>
    <th>Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
    <th>{{$product->title}}</th>
    <th>{{$product->series}}</th>
    <th>{{$product->brands}}</th>
    <th>
    <a href="{{route('edit-product', $product->id)}}">Edit</a>
    <a href="{{route('delete-product', $product->id)}}">Delete</a>
    </th>
    </tr>
    @endforeach
    </table>
</body>
</html>-->
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
                        onclick='window.location.href="{{route("add-product")}}"' class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Product
                    </button>
                </div>
                <div class="card-block">
                    
                    <div class="dt-responsive table-responsive">
                        <div id="base-style_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="base-style_length"><label>Show <select
                                                name="base-style_length" aria-controls="base-style"
                                                class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div id="base-style_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control input-sm" placeholder=""
                                                aria-controls="base-style"></label></div>
                                </div>
                            </div>
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
                                                    style="width: 54px;">Price</th>

                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Salary: activate to sort column ascending"
                                                    style="width: 92px;">Brand</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 92px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php $i=0 @endphp

                                            @foreach($products as $pro)

                                            @php $i++ @endphp
                                            @php $class= $i%2 ==0 ? 'even' : 'odd'; @endphp

                                            <tr role="row" class="@php echo $class; @endphp">
                                            <td>{{$pro->id}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/products/'.$pro->image)}}" height='100' width='100' class="img-fluid" alt="tbl">
                                                </td>
                                                <td>{{$pro->title}}</td>
                                                <td>Rs.{{$pro->price}}</td>
                                                <td>{{$pro->brands}}</td>
                                                <td>

                                                <a href="{{route('view-product-detail', $pro->id)}}" class="m-r-15 text-muted"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="view"><i class="icofont icofont-eye-alt f-16 m-0"></i></a>
                                                    <a href="{{route('view-product-detail', $pro->id)}}"
                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"><i
                                                            class="icofont icofont-ui-edit"></i></a>
                                                    <a href="{{route('delete-product', $pro->id)}}" class="text-muted"
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
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="base-style_info" role="status" aria-live="polite">
                                        Showing 21 to 30 of 57 entries</div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="base-style_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous" id="base-style_previous"><a
                                                    href="#" aria-controls="base-style" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="base-style" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="base-style" data-dt-idx="2" tabindex="0"
                                                    class="page-link">2</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="base-style" data-dt-idx="3" tabindex="0"
                                                    class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="base-style" data-dt-idx="4" tabindex="0"
                                                    class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="base-style" data-dt-idx="5" tabindex="0"
                                                    class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="base-style" data-dt-idx="6" tabindex="0"
                                                    class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="base-style_next"><a href="#"
                                                    aria-controls="base-style" data-dt-idx="7" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div>
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

