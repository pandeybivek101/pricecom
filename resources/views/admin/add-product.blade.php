@extends('layouts.admin.admin-layout')
@section('content')

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<div class="page-header">
    <div class="page-header-title" style='visibility:hidden;'>
        <h4>Add Product</h4>
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
                    <h5>Add Products</h5>
                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <!--<i class="icofont icofont-close-circled"></i>-->
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='addproduct' class='dropzone dz-clickable dz-started'
                        action="{{route('add-product')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title" name='title'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Models</label>
                                    <input type="text" class="form-control" placeholder="Enter Model" name='models'>
                                </div>
                            </div>
                        </div>

                        <!-- input states -->
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Brands</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess" name='brand'
                                placeholder="Enter Brands">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputWarning">Series</label>
                            <input type="text" class="form-control is-invalid" id="inputWarning" name='series'
                                placeholder="Enter Series">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Generation</label>
                            <input type="text" class="form-control is-invalid" name='generation'
                                placeholder="Enter Generation">
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>RAM</label>
                                    <input type="text" class="form-control" placeholder="Enter RAM" name='ram'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Storage</label>
                                    <input type="text" class="form-control" placeholder="Enter storage" name='storage'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Display</label>
                            <input type="text" class="form-control is-invalid" name='display'
                                placeholder="Enter Display">
                        </div>


                        <div class="form-group">
                            <label class="col-form-label" for="inputError">Price</label>
                            <input type="text" class="form-control is-invalid" name='price' placeholder="Enter Price">
                        </div>



                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="number" class="form-control" placeholder="Enter Disount"
                                        name='discount'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Discount Type</label>
                                    <select class="form-control" name='discount_type'>
                                        <option value=''>select discount type</option>
                                        <option value='flat'>Flat</option>
                                        <option value='percent'>Percent</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                        
                            <div class="col-sm-12">
                            <label>Image</label>
                                <input type="file" class="form-control" name='image'>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body pad" style='padding-left:0px; padding-right:0px;'>
                            <div class="mb-3">
                            
                                <textarea class="textarea" name='description' id='desc' placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd"></textarea>
                            </div>
                        </div>

                        <button type='submit' value="submit" class='btn btn-primary btn-block'>Add Product</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script>

$('#addproduct').on('submit', function(e) {
    e.preventDefault();


    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/dashboard/add-product',
        data: $('#addproduct').serialize(),
        success: function() {
            $('input').val('');
            toastr.success('Product has been successfully added!', 'Thankyou!');
            

        },
        error: function() {
            alert('error');
        }
    });

});
</script>
@endsection