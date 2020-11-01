@extends('layouts.admin.admin-layout')
@section('content')
   <!-- <h3>for common product</h3>
    <form action="{{route('add_common')}}" method='post'>
    @csrf
    <input type="text" name='url' placeholder='Enter a url'>
    <select name="website_name" id="">
    <option value="">Select Website</option>
    @foreach($website as $web)
    <option value="{{$web->id}}">{{$web->name}}</option>
    @endforeach
    <input type='hidden' value="{{$product->id}}" name='product_id'>
    </select>
    <input type='submit' name='submit' value='submit'>
    </form>-->
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

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Edit Products</h5>
                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <!--<i class="icofont icofont-close-circled"></i>-->
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='addproduct' class='dropzone dz-clickable dz-started'
                        action="{{route('edit-product', $product->id)}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{$product->title}}" placeholder="Enter Title" name='title'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Models</label>
                                    <input type="text" class="form-control" value="{{$product->models}}" placeholder="Enter Model" name='models'>
                                </div>
                            </div>
                        </div>

                        <!-- input states -->
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Brands</label>
                            <input type="text" value="{{$product->brands}}" class="form-control is-valid" id="inputSuccess" name='brand'
                                placeholder="Enter Brands">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputWarning">Series</label>
                            <input type="text" value="{{$product->series}}" class="form-control is-invalid" id="inputWarning" name='series'
                                placeholder="Enter Series">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Generation</label>
                            <input type="text" value="{{$product->generation}}" class="form-control is-invalid" name='generation'
                                placeholder="Enter Generation">
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>RAM</label>
                                    <input type="text" value="{{$product->ram}}" class="form-control" placeholder="Enter RAM" name='ram'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Storage</label>
                                    <input type="text" value="{{$product->storage}}" class="form-control" placeholder="Enter storage" name='storage'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Display</label>
                            <input type="text" class="form-control is-invalid" name='display'
                                placeholder="Enter Display" value="{{$product->display}}">
                        </div>


                        <div class="form-group">
                            <label class="col-form-label" for="inputError" >Price</label>
                            <input type="number" class="form-control is-invalid" value="{{$product->price}}" name='price' placeholder="Enter Price">
                        </div>



                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
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
                                        <option value='' @php if($product->discount_type=="") echo 'selected' @endphp>select discount type</option>
                                        <option value='flat' @php if($product->discount_type == 'flat') echo 'selected'  @endphp>Flat</option>
                                        <option value='percent' @php if($product->discount_type == 'percent') echo 'selected'  @endphp>Percent</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-sm-12">
                            @php if(!empty($product->image)){ @endphp
                            <img src="{{asset('uploads/products/'.$product->image)}}" width="200" height='200' style='display:block; padding-top:20px; padding-bottom:20px;'>
                                @php } @endphp
                                
                                <label>Image</label>
                                
                                <input type="file" class="form-control" name='image'>
                                <input type="hidden" class="form-control" name='old_image' value='{{$product->image}}'>
                            </div>
                        </div>

                        <!-- /.card-header -->
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

        </div>
    </div>
</div>

@endsection


