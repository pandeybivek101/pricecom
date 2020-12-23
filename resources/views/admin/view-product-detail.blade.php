
@extends('layouts.admin.admin-layout')
@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Product detail</h4>
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
            <li class="breadcrumb-item"><a href="#!">Product Detail</a>
            </li>
        </ul>
    </div>
</div>

<div class="page-body">
    <div class="row">
        <div class="col-md-12">

            <div class="card product-detail-page">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12">
                            <div class="port_details_all_img row">
                                <div class="col-lg-12">
                                    <div id="big_banner">
                                   
                                    @foreach($product->image as $img)
                                        <div class="port_big_img">
                                            <img class="img img-fluid" src="{{asset('uploads/products/'.$img)}}"
                                                alt="Big_ Details">
                                        </div>
                                    @endforeach                                        
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12 product-right">
                                    <div id="small_banner">
                                    @foreach($product->image as $img)
                                        <div>
                                            <img class="img img-fluid" src="{{asset('uploads/products/'.$img)}}"
                                                alt="small-details">
                                        </div>
                                        
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                            <div class="row">
                                <div>
                                    <div class="col-lg-12">
                                        <span class="txt-muted d-inline-block">Product
                                            Id: <a href="#!"> {{$product->id}} </a>
                                        </span>
                                        <span style='opacity:0;' class="f-right">Availablity : <a href="#!"> In Stock </a> </span>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="pro-desc">{{$product->title}}</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="txt-muted"> {{$product->brands}}
                                        </span>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <span class="text-primary product-price"><i
                                                class="icofont icofont-cur-dollar"></i>{{$product->price}}</span>
                                       
                                        <hr>
                                        {{$product->description}}
                                        
                                        <hr>
                                        
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card product-detail-page">
        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
            <li class="nav-item">
                <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Description</a>
                <div class="slide"></div>
            </li>
            <li class="nav-item m-b-0">
                <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Review</a>
                <div class="slide"></div>
            </li>
            <li class="nav-item m-b-0">
                <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#sizeguide" role="tab">Sizing Guide</a>
                <div class="slide"></div>
            </li>
            <li class="nav-item m-b-0">
                <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#about" role="tab">About</a>
                <div class="slide"></div>
            </li>
        </ul>
    </div>


    <div class="card">
        <div class="card-block">

            <div class="tab-content bg-white">
                <div class="tab-pane active" id="description" role="tabpanel">
                    {{$product->description}}
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="col-lg-2">Title</td>
                                <td class="col-lg-10">{{$product->title}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Brand</td>
                                <td class="col-lg-10">{{$product->brands}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Series</td>
                                <td class="col-lg-10">{{$product->series}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Title</td>
                                <td class="col-lg-10">{{$product->title}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Model</td>
                                <td class="col-lg-10">{{$product->models}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Generation</td>
                                <td class="col-lg-10">{{$product->generation}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Ram</td>
                                <td class="col-lg-10">{{$product->ram}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Storage</td>
                                <td class="col-lg-10">{{$product->storage}}</td>
                            </tr>

                            <tr>
                                <td class="col-lg-2">Display</td>
                                <td class="col-lg-10">{{$product->display}}</td>
                            </tr>
   
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="review" role="tabpanel">
                    {{$product->description}}
                </div>
                <div class="tab-pane" id="sizeguide" role="tabpanel">
                    <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a
                        type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining
                        essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it.</p>
                </div>
                <div class="tab-pane" id="about" role="tabpanel">
                    <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a
                        type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining
                        essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it.</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection