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
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex justify-content-between mb-30">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dotan</a></li>
                    <li class="breadcrumb-item active">Am Chart</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-12">
                        <form class="form-inline d-flex justify-content-between">
                            <div class="form-group mb-30">
                                <label for="inputPassword2" class="sr-only">Search</label>
                                <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                            </div>
                            <div class="form-group mx-sm-3 mb-30">
                                <label for="status-select" class="mr-2">Status</label>
                                <select class="custom-select" id="status-select">
                                    <option selected="">Choose...</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Awaiting Authorization</option>
                                    <option value="3">Payment failed</option>
                                    <option value="4">Cash On Delivery</option>
                                    <option value="5">Fulfilled</option>
                                    <option value="6">Unfulfilled</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Order ID</th>
                                <th data-hide="phone">Customer</th>
                                <th data-hide="phone">Amount</th>
                                <th data-hide="phone">Date added</th>
                                <th data-hide="phone,tablet">Date modified</th>
                                <th data-hide="phone">Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    3214
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $500.00
                                </td>
                                <td>
                                    03/04/2015
                                </td>
                                <td>
                                    03/05/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-success-lighten">Shipped</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    324
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $320.00
                                </td>
                                <td>
                                    12/04/2015
                                </td>
                                <td>
                                    21/07/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    546
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $2770.00
                                </td>
                                <td>
                                    06/07/2015
                                </td>
                                <td>
                                    04/08/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-success-lighten">Shipped</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6327
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $8560.00
                                </td>
                                <td>
                                    01/12/2015
                                </td>
                                <td>
                                    05/12/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    642
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $6843.00
                                </td>
                                <td>
                                    10/04/2015
                                </td>
                                <td>
                                    13/07/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-success-lighten">Shipped</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7435
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $750.00
                                </td>
                                <td>
                                    04/04/2015
                                </td>
                                <td>
                                    14/05/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-success-lighten">Shipped</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3214
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $500.00
                                </td>
                                <td>
                                    03/04/2015
                                </td>
                                <td>
                                    03/05/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    324
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $320.00
                                </td>
                                <td>
                                    12/04/2015
                                </td>
                                <td>
                                    21/07/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    546
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $2770.00
                                </td>
                                <td>
                                    06/07/2015
                                </td>
                                <td>
                                    04/08/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-danger-lighten">Canceled</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6327
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $8560.00
                                </td>
                                <td>
                                    01/12/2015
                                </td>
                                <td>
                                    05/12/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    642
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $6843.00
                                </td>
                                <td>
                                    10/04/2015
                                </td>
                                <td>
                                    13/07/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-success-lighten">Shipped</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7435
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $750.00
                                </td>
                                <td>
                                    04/04/2015
                                </td>
                                <td>
                                    14/05/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    324
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $320.00
                                </td>
                                <td>
                                    12/04/2015
                                </td>
                                <td>
                                    21/07/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-danger-lighten">Expired</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    546
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $2770.00
                                </td>
                                <td>
                                    06/07/2015
                                </td>
                                <td>
                                    04/08/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6327
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $8560.00
                                </td>
                                <td>
                                    01/12/2015
                                </td>
                                <td>
                                    05/12/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    642
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $6843.00
                                </td>
                                <td>
                                    10/04/2015
                                </td>
                                <td>
                                    13/07/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-success-lighten">Shipped</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    7435
                                </td>
                                <td>
                                    Customer example
                                </td>
                                <td>
                                    $750.00
                                </td>
                                <td>
                                    04/04/2015
                                </td>
                                <td>
                                    14/05/2015
                                </td>
                                <td>
                                    <div class="product-en-btn">
                                        <a class="badge badge-warning-lighten">Pending</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection