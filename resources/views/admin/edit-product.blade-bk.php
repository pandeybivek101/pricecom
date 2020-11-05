@extends('layouts.admin.admin-layout')
@section('content')

<div class="page-header">
    <div class="page-header-title" style='visibility:hidden;'>
        <h4>Edit Product</h4>
        <!--<span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>-->
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Form Components</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Form Components</a>
            </li>
        </ul>
    </div>
</div>

<!--<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Edit Products</h5>
                   
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='addproduct' class='dropzone dz-clickable dz-started'
                        action="{{route('edit-product', $product->id)}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{$product->title}}"
                                        placeholder="Enter Title" name='title'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Models</label>
                                    <input type="text" class="form-control" value="{{$product->models}}"
                                        placeholder="Enter Model" name='models'>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Brands</label>
                            <input type="text" value="{{$product->brands}}" class="form-control is-valid"
                                id="inputSuccess" name='brand' placeholder="Enter Brands">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputWarning">Series</label>
                            <input type="text" value="{{$product->series}}" class="form-control is-invalid"
                                id="inputWarning" name='series' placeholder="Enter Series">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Generation</label>
                            <input type="text" value="{{$product->generation}}" class="form-control is-invalid"
                                name='generation' placeholder="Enter Generation">
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                
                                <div class="form-group">
                                    <label>RAM</label>
                                    <input type="text" value="{{$product->ram}}" class="form-control"
                                        placeholder="Enter RAM" name='ram'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Storage</label>
                                    <input type="text" value="{{$product->storage}}" class="form-control"
                                        placeholder="Enter storage" name='storage'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Display</label>
                            <input type="text" class="form-control is-invalid" name='display'
                                placeholder="Enter Display" value="{{$product->display}}">
                        </div>


                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Price</label>
                            <input type="number" class="form-control is-invalid" value="{{$product->price}}"
                                name='price' placeholder="Enter Price">
                        </div>



                        <div class="row">
                            <div class="col-sm-6">
                               
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="number" class="form-control" placeholder="Enter Disount"
                                        name='discount' value="{{$product->discount}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Discount Type</label>
                                    <select class="form-control" name='discount_type'>
                                        <option value='' @php if($product->discount_type=="") echo 'selected'
                                            @endphp>select discount type</option>
                                        <option value='flat' @php if($product->discount_type == 'flat') echo 'selected'
                                            @endphp>Flat</option>
                                        <option value='percent' @php if($product->discount_type == 'percent') echo
                                            'selected' @endphp>Percent</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-sm-12">
                                @php if(!empty($product->image)){ @endphp
                                <img src="{{asset('uploads/products/'.$product->image)}}" width="200" height='200'
                                    style='display:block; padding-top:20px; padding-bottom:20px;'>
                                @php } @endphp

                                <label>Image</label>

                                <input type="file" class="form-control" name='image'>
                                <input type="hidden" class="form-control" name='old_image' value='{{$product->image}}'>
                            </div>
                        </div>

                        
                        <div class="card-body pad" style='padding-left:0px; padding-right:0px;'>
                            <div class="mb-3">

                                <textarea class="textarea" name='description' id='desc'
                                    placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd">{{$product->description}}</textarea>
                            </div>
                        </div>

                        <button type='submit' value="submit" class='btn btn-primary btn-block'>Update Product</button>

                    </form>

                </div>
            </div>




            <div class="card">
                <div class="card-header">
                    <h5>ADD Common</h5>
                    
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='addcommon' class='dropzone dz-clickable dz-started'
                        action="{{route('add_common')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                               
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" class="form-control" placeholder="Enter URL" name='url'>
                                    <input type='hidden' value="{{$product->id}}" name='product_id'>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Website Name</label>
                                    <select class="form-control" name="website_name">
                                        <option value="">select discount type</option>
                                        @foreach($website as $web)
                                        <option value="{{$web->id}}">{{$web->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class='col-sm-4'>
                                <label style='visibility:hidden;'>Submit</label>
                                <button type='submit' value="submit" class='btn btn-primary btn-block'>ADD
                                    COMMON</button>
                            </div>
                        </div>




                    </form>

                </div>
            </div>

        </div>
    </div>
</div>







<div class="card">
    <div class="card-header">
        <h5>Product List</h5>
        <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
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
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;">
                                                Image</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 550px;">
                                                Product Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74px;">
                                                Amount</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">
                                                Stock</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64px;">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr role="row" class="odd">
                                            <td class="pro-list-img" tabindex="0">
                                                <img src="assets/images/product-list/pro-l1.png" class="img-fluid"
                                                    alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6>Frock Designs</h6>
                                                <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>$456</td>
                                            <td>
                                                <label class="text-danger">Out Of Stock</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit"><i
                                                        class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"><i
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
        </div>
    </div>
</div>-->

<div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product List</h5>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Add Product
                                                        </button>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <div class="table-content">
                                                                <div class="project-table">
                                                                    <table id="e-product-list"
                                                                        class="table table-striped dt-responsive nowrap">
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
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l1.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6>Frock Designs</h6>
                                                                                    <span>Lorem ipsum dolor sit consec
                                                                                        te imperdiet iaculis
                                                                                        ipsum..</span>
                                                                                </td>
                                                                                <td>$456</td>
                                                                                <td>
                                                                                    <label class="text-danger">Out Of
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l6.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> Style Tops </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$689</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l2.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> Kurta Women </h6>
                                                                                    <span>Lorem ipsum dolor sit consec
                                                                                        te imperdiet iaculis
                                                                                        ipsum..</span>
                                                                                </td>
                                                                                <td>$755</td>
                                                                                <td>
                                                                                    <label class="text-warning">Low
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l3.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Lorem ipsum dolor sit consec
                                                                                        te imperdiet iaculis
                                                                                        ipsum..</span>
                                                                                </td>
                                                                                <td>$989</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l4.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> Black Frock For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$1150</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l5.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Lorem ipsum dolor sit consec
                                                                                        te imperdiet iaculis
                                                                                        ipsum..</span>
                                                                                </td>
                                                                                <td>$2006</td>
                                                                                <td>
                                                                                    <label class="text-danger">Out Of
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l7.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> Digital Print Top </h6>
                                                                                    <span>sum dolor sit consec te
                                                                                        imperdiet iaculis ipsum..</span>
                                                                                </td>
                                                                                <td>$1199</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l8.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> One Piece Dress</h6>
                                                                                    <span class="text-muted f-12">Lorem
                                                                                        ipsum dolor sit consec te
                                                                                        imperdiet iaculis ipsum..</span>
                                                                                </td>
                                                                                <td>$589</td>
                                                                                <td>
                                                                                    <label class="text-warning">Low
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l9.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> kurat style Dress </h6>
                                                                                    <span>sum dolor sit consec te
                                                                                        imperdiet iaculis ipsum..</span>
                                                                                </td>
                                                                                <td>$1255</td>
                                                                                <td>
                                                                                    <label class="text-danger">Out Of
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l8.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$499</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l7.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$259</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l6.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$456</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l5.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$456</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l4.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$456</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l2.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$456</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pro-list-img">
                                                                                    <img src="assets/images/product-list/pro-l1.png"
                                                                                        class="img-fluid" alt="tbl">
                                                                                </td>
                                                                                <td class="pro-name">
                                                                                    <h6> T Shirts For Women </h6>
                                                                                    <span>Interchargebla lens Digital
                                                                                        Camera with APS-C-X Trans CMOS
                                                                                        Sens</span>
                                                                                </td>
                                                                                <td>$456</td>
                                                                                <td>
                                                                                    <label class="text-success">In
                                                                                        Stock</label>
                                                                                </td>
                                                                                <td class="action-icon">
                                                                                    <a href="#!"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a href="#!" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="md-modal md-effect-13 addcontact" id="modal-13">
                                            <div class="md-content">
                                                <h3 class="f-26">Add Product</h3>
                                                <div>
                                                    <div class="md-group-add-on">
                                                        <input type="file" name="files" id="filer_input_single">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control pname"
                                                            placeholder="Prodcut Name">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control pamount"
                                                            placeholder="Amount">
                                                    </div>
                                                    <div class="input-group">
                                                        <select id="hello-single" class="form-control stock">
                                                            <option value="">---- Select Stock ----</option>
                                                            <option value="married">In Stock</option>
                                                            <option value="unmarried">Out of Stock</option>
                                                            <option value="unmarried">Law Stock</option>
                                                        </select>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Save</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>

                                    </div>
@endsection