@extends('layouts.admin.admin-layout')
@section('content')

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<div class="page-header">
    <div class="page-header-title" style='visibility:hidden;'>
        <h4>Add Website</h4>
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
                    <h5>Add Website</h5>
                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <!--<i class="icofont icofont-close-circled"></i>-->
                    </div>
                </div>
                <div class="card-block">
                    <form role="form" id='ajaxform' class='dropzone dz-clickable dz-started'
                        action="{{route('website-create')}}" method='post' enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name"
                                    name='name' required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" class="form-control" placeholder="Enter Url"
                                    name='url' required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Logo URL</label>
                                    <input type="text" class="form-control" placeholder="Enter Logo Url"
                                        name='logo_url' required>
                                </div>
                            </div>
                        </div>

                        <button type='submit' value="submit" class='btn btn-primary btn-block'>Add Website</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
