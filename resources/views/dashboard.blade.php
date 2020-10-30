
@extends('layouts.admin.admin-layout')

@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Ecommerce Dashboard</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Ecommerce Dashboard</a>
            </li>
        </ul>
    </div>
</div>
<div class="page-body">
<div class="row">

    <div class="col-md-12 col-xl-4">
        <div class="card counter-card-1">
            <div class="card-block-big">
                <div>
                    <h3>4000</h3>
                    <p>Most Played Last Month
                        <span class="f-right text-primary">
                            <i class="icofont icofont-arrow-up"></i>
                            37.89%
                        </span></p>
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink"
                            role="progressbar" style="width: 70%"
                            aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <i class="icofont icofont-comment"></i>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-xl-4">
        <div class="card counter-card-2">
            <div class="card-block-big">
                <div>
                    <h3>2500</h3>
                    <p>Coffee cups per day
                        <span class="f-right text-success">
                            <i class="icofont icofont-arrow-up"></i>
                            34.52%
                        </span>
                    </p>
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped progress-xs progress-bar-success"
                            role="progressbar" style="width: 50%"
                            aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <i class="icofont icofont-coffee-mug"></i>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-xl-4">
        <div class="card counter-card-3">
            <div class="card-block-big">
                <div>
                    <h3>800 Gb</h3>
                    <p>Average Monthly Uploads
                        <span class="f-right text-default">
                            <i class="icofont icofont-arrow-down"></i>
                            22.34%
                        </span></p>
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped progress-xs progress-bar-default"
                            role="progressbar" style="width: 90%"
                            aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <i class="icofont icofont-upload"></i>
            </div>
        </div>
    </div>


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5>Monthly Growth</h5>
            </div>
            <div class="card-block">
                <div id="chart4"></div>
            </div>
        </div>
    </div>


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5>Daily Increment</h5>
            </div>
            <div class="card-block">
                <div id="chart_Donut" style="width: 100%; height: 320px;"></div>
            </div>
        </div>
    </div>


    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h5>RECENT ORDERS</h5>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <div class="dt-responsive table-responsive">
                        <table id="res-config"
                            class="table table-bordered w-100">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l1.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6>Frock Designs</h6>
                                        <span class="text-muted f-12">Lorem
                                            ipsum dolor sit consec te imperdiet
                                            iaculis ipsum..</span>
                                    </td>
                                    <td>$456</td>
                                    <td>
                                        <label class="text-danger">Out Of
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l6.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6> Style Tops </h6>
                                        <span
                                            class="text-muted f-12">Interchargebla
                                            lens Digital Camera with APS-C-X
                                            Trans CMOS Sens</span>
                                    </td>
                                    <td>$689</td>
                                    <td>
                                        <label class="text-success">In
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l1.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6>Frock Designs</h6>
                                        <span class="text-muted f-12">Lorem
                                            ipsum dolor sit consec te imperdiet
                                            iaculis ipsum..</span>
                                    </td>
                                    <td>$456</td>
                                    <td>
                                        <label class="text-danger">Out Of
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l2.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6> Kurta Women </h6>
                                        <span class="text-muted f-12">Lorem
                                            ipsum dolor sit consec te imperdiet
                                            iaculis ipsum..</span>
                                    </td>
                                    <td>$755</td>
                                    <td>
                                        <label class="text-warning">Low
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l3.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6> T Shirts For Women </h6>
                                        <span class="text-muted f-12">Lorem
                                            ipsum dolor sit consec te imperdiet
                                            iaculis ipsum..</span>
                                    </td>
                                    <td>$989</td>
                                    <td>
                                        <label class="text-success">In
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l4.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6> Black Frock For Women </h6>
                                        <span
                                            class="text-muted f-12">Interchargebla
                                            lens Digital Camera with APS-C-X
                                            Trans CMOS Sens</span>
                                    </td>
                                    <td>$1150</td>
                                    <td>
                                        <label class="text-success">In
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="img-pro">
                                        <img src="assets/images/e-commerce/product-list/pro-l5.png"
                                            class="img-fluid d-inline-block"
                                            alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6> T Shirts For Women </h6>
                                        <span class="text-muted f-12">Lorem
                                            ipsum dolor sit consec te imperdiet
                                            iaculis ipsum..</span>
                                    </td>
                                    <td>$2006</td>
                                    <td>
                                        <label class="text-danger">Out Of
                                            Stock</label>
                                    </td>
                                    <td class="action-icon">
                                        <a href="#"
                                            class="m-r-15 text-muted f-18"><i
                                                class="icofont icofont-ui-edit"></i></a>
                                        <a href="#" class="text-muted f-18"><i
                                                class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-xl-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daily Visitors</h5>
                    </div>
                    <div class="card-block">
                        <div id="pie-chart" style="height:300px"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">

                <div class="card analytic-user">
                    <div class="card-block-big text-center">
                        <i class="icofont icofont-wallet"></i>
                        <h1>$ 324587</h1>
                        <h4>All Income</h4>
                    </div>
                    <div class="card-footer p-t-25 p-b-25">
                        <p class="m-b-0">This is standard panel footer</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection