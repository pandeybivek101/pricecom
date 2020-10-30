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
                        class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Product
                    </button>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <div id="e-product-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <table id="e-product-list"
                                                class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline"
                                                role="grid" style="width: 1007px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 88px;">Image</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 550px;">Product Name</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 74px;">Amount</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 111px;">Stock</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 64px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @php $i=0 @endphp

                                                @foreach($products as $pro)

                                                @php $i++ @endphp
                                                @php $class= $i%2 ==0 ? 'even' : 'odd';  @endphp

                                                    <tr role="row" class="@php echo $class; @endphp">
                                                        <td class="pro-list-img" tabindex="0">
                                                            <img src="{{asset('uploads/products/'.$pro->image)}}"
                                                                class="img-fluid" alt="tbl">
                                                        </td>
                                                        <td class="pro-name">
                                                            <h6>{{$pro->title}}</h6>
                                                            <span>{{$pro->series}}</span>
                                                        </td>
                                                        <td>Rs.{{$pro->price}}</td>
                                                        <td>
                                                            <label class="text-danger">Out Of Stock</label>
                                                        </td>
                                                        <td class="action-icon">
                                                            <a href="{{route('edit-product', $pro->id)}}" class="m-r-15 text-muted" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Edit"><i
                                                                    class="icofont icofont-ui-edit"></i></a>
                                                            <a href="{{route('delete-product', $pro->id)}}" class="text-muted" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Delete"><i
                                                                    class="icofont icofont-delete-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-5"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="e-product-list_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="e-product-list_previous"><a href="#"
                                                            aria-controls="e-product-list" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="e-product-list" data-dt-idx="1" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="e-product-list" data-dt-idx="2" tabindex="0"
                                                            class="page-link">2</a></li>
                                                    <li class="paginate_button page-item next" id="e-product-list_next">
                                                        <a href="#" aria-controls="e-product-list" data-dt-idx="3"
                                                            tabindex="0" class="page-link">Next</a></li>
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

        </div>
    </div>

    <div class="md-overlay"></div>

</div>

@endsection