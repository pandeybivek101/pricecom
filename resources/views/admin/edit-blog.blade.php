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
                    {{Session::get('success') }}
                    <form role="form" id='ajaxform' class='dropzone dz-clickable dz-started'
                        action="{{ route('update-blog', $blog->id )}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" value="{{$blog->title}}" class="form-control" placeholder="Enter Title" name='title'>
                                </div>
                            </div>
                           
                        </div>

                
                        <div class="form-group row">

                        <div class="col-sm-12">
                            <img style='width:200px; height:200px' src="@php  echo get_cloudinary_image_link($blog->image);  @endphp" alt="">
                        </div>
                        
                            <div class="col-sm-12">
                            <label>Image</label>
                                <input type="file" id='imgdrop' class="form-control" name='image' multiple>
                                <input type="hidden" id="" class="form-control" name='old_image' value='{{$blog->image}}'>
                            </div>
                        </div>


                        <div class="form-group row">
                        
                        <div class="col-sm-12">
                        <label>Tags</label>
                        <div class="tags_max_char">
                            <input class="" name='tags' type="text" value="{{$blog->tags}}" data-role="tagsinput">
                        </div>
                        </div>
                    </div>

                        <!-- /.card-header -->
                        <div class="card-body pad" style='padding-left:0px; padding-right:0px;'>
                            <div class="mb-3">
                            
                                <textarea class="textarea" name='content' id='desc' placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd">{{$blog->content}}</textarea>
                            </div>
                        </div>


                        <button type='submit' value="submit" class='btn btn-primary btn-block'>Add Blog</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')

@endsection