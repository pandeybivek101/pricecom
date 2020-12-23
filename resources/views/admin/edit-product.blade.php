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
                    <h5>Edit Products</h5>
                   
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='editajax' class='dropzone dz-clickable dz-started'
                        action="{{route('update-product')}}" method='post'  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{$product->title}}"
                                        placeholder="Enter Title" name='title'>
                                    <input type='hidden' name='pid' value='{{$product->id}}'>
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




            <!--<div class="card">
                <div class="card-header">
                    <h5>ADD Common</h5>
                    
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='addcommon' class='dropzone dz-clickable dz-started'
                        action="{{route('edit-common', $product->id)}}" method='post' enctype="multipart/form-data">
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
            </div>-->

        </div>
    </div>
</div>


<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Common List</h5>
                    <button type="button"
                        class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal-13e"> <i class="icofont icofont-plus m-r-5"></i> Add Product
                    </button>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>URL</th>
                                            <th>Website</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                    @foreach($similar as $simi)
                                        <tr>

                                        <td>{{$simi->id}}</td>
                                           
                                            <td class="pro-name">
                                                <span>{{$simi->product_url}}</span>
                                            </td>
                                            
                                            <td>
                                                <label class="">{{$simi->website}}</label>
                                            </td>
                                            <td class="action-icon">

                                                <a class="m-r-15 text-muted" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit"><i
                                                        class="icofont icofont-ui-edit md-trigger" data-modal="modal-{{$simi->id}}"></i></a>
                                               </a>
                                                
                                                <a value="submit" class="text-muted" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"><i
                                                        class="icofont icofont-delete-alt" ></i>
                                                </a>
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

        </div>
    </div>

    <div class="md-modal md-effect-13 addcontact" id="modal-13e">
        <form action="{{route('add-common')}}" method='post' id='ajaxform'>
            @csrf
        <div class="md-content">
            <h3 class="f-26">Add Common</h3>
            <div>
            
                
                <div class="input-group">
                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                    
                    <input type="text" class="form-control" placeholder="Enter URL" name='url'>
                        <input type='hidden' value="{{$product->id}}" name='product_id'>
                </div>
                <div class="input-group">
                    
                    <select class="form-control" name="website_name">
                    <option value="">select discount type</option>
                    @foreach($website as $web)
                    <option value="{{$web->id}}">{{$web->name}}</option>
                    @endforeach
                </select>
                   
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Save</button>
                    <button type="button"
                        class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                </div>
            </div>
                                
        </div>
        </form>
    </div>


    @foreach($similar as $simi)

    <div class="md-modal md-effect-13 addcontact" id="modal-{{$simi->id}}">
        <form action="{{route('edit-common', $simi->id)}}" method='post'>
            @csrf
        <div class="md-content">
            <h3 class="f-26">Update Common</h3>
            <div>
            
                
                <div class="input-group">
                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                    
                    <input type="text" class="form-control" value="{{$simi->product_url}}" placeholder="Enter URL" name='url'>
                        <input type='hidden' value="{{$product->id}}" name='product_id'>
                </div>
                <div class="input-group">
                    
                    <select class="form-control" name="website_name">
                    <option value="">select website</option>
                    @foreach($website as $web)
                    <option value="{{$web->id}}" @if($web->id == $simi->websites_id) selected @endif >{{$web->name}}</option>
                    @endforeach
                </select>
                   
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Update</button>
                    <button type="button"
                        class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                </div>
            </div>
                                
        </div>
        </form>
    </div>
    @endforeach
    <div class="md-overlay"></div>

</div>

@endsection