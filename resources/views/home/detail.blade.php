@extends('layouts.main-layout')
@section('content')
<?php  use \App\Http\Controllers\HomeController;  ?>
    <section class="search-box-container">
        <div class="container text-center">
            <form class="main" id='search-form' action='{{route("search")}}' method='get'>
                <div class="input-group">
                    <div class="custom-file">
                      <input type="text" class="form-control" name='q' required>
                      <!--<label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>-->
                    </div>
                    <button><i class="fa fa-search" aria-hidden="true"></i>search</button>
                </div>
            </form>
        </div>
    </section>
    <section class='product-detail-section'>
        <div class='container'>

                <div class='row detail-row'>
                    <div class="col-md-4 col-sm-12 border-side">
                        <div class='product-image'>
                            <img src="@php  echo HelperClass::get_image($product->image) @endphp" alt="dell">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class='product-information'>
                            <div class="inner-section">
                                <div class='product-brand'>
                                    <p>Product Brand:{{$product->brands}}</p>
                                </div>
                                <div class='price-drop-alert'>
                                    <button class='goto-store' data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Price Alert <i class="fa fa-bell"></i></button>
                                </div>
                                <div class='product-model'>
                                    <h5>{{$product->title}}</h5>
                                    <h5 style='color:red;'>Rs {{$product->price}}</h5>
                                </div>
                                <div class='product-Features'>
                                    <p class='feature-heading'>Features</p>
                                    <ul class='feature-list'>
                                        <li>Processor:{{$product->series}}</li>
                                        <li>Display:{{$product->display}}</li>
                                        <li>RAM:{{$product->ram}}</li>
                                        <li>ROM/Storage:{{$product->storage}}</li>
                                        <li>Generation:{{$product->generation}}</li>
                                    </ul>
                                    <p class='desc'>{{$product->description}}</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class='internal-similar'>
                    @foreach($commons as $common)
                    <div class="row similar">
                        <div class='col-md-4'>
                            <div class='similar-logo'>
                                <img src="{{$common->logo_url}}" alt="">
                            </div>
                            <div class='logo-name'><a href="">{{$common->name}}</a></div>
                        </div>

                        @php
                        
                        $record= HomeController::fetch_data($common->product_url, $common->name, $common); 
                        
                        
                        @endphp
                        <div class='col-md-4'>
                            <div class='old-new' style='display:flex;'>
                            @php if(!empty($record[1])){ @endphp
                            <div class="old-price">@php echo $record[1]; @endphp</div>
                            @php } @endphp 

                            @php if(!empty($record[2])){ @endphp
                                <span style='font-size: 13px; position: relative;left: 20px;'>@php echo $record[2]; @endphp</span>
                            @php } @endphp 

                            </div>   
                            @php if(!empty($record[0])){ @endphp                    
                            <div class='new-price'>@php echo $record[0]; @endphp</div>
                            @php } @endphp 
                        </div>
                        <div class='col-md-4'>
                            <div class="button-store"><a href='{{$common->product_url}}' class='goto-store'><i class="fa fa-shopping-basket" aria-hidden="true"></i>Buy From Store</a></div>
                        </div>
                    </div>
                    @endforeach
                    <!--<div class="row similar">
                        <div class='col-md-4'>
                            <div class='similar-logo'>
                                <img src="https://www.sastodeal.com/media/logo/stores/1/SDLogo_White-Logo.png" alt="">
                            </div>
                            <div class='logo-name'><a href="">Sasto Deal</a></div>
                        </div>
                        <div class='col-md-4'>
                            <div class='old-price'>Rs 18000</div>
                            <div class='new-price'>Rs 16000</div>
                        </div>
                        <div class='col-md-4'>
                            <div class="button-store"><button class='goto-store'><i class="fa fa-shopping-basket" aria-hidden="true"></i>Buy From Store</button></div>
                        </div>
                    </div>-->
                    <!--<div class="row similar">
                        <div class='col-md-4'>
                            <div class='similar-logo'>
                                <img src="assets/images/esewa_logo.png" alt="">
                            </div>
                            <div class='logo-name'><a href="">Esewa</a></div>
                        </div>
                        <div class='col-md-4'>
                            <div class='old-price'>Rs 12000</div>
                            <div class='new-price'>Rs 11000</div>
                        </div>
                        <div class='col-md-4'>
                            <div class="button-store"><button class='goto-store'><i class="fa fa-shopping-basket" aria-hidden="true"></i>Buy From Store</button></div>
                        </div>
                    </div>-->
                </div>
        </div>
    </section>
    <section class='similar-products'>
        <div class='container'>
            <div class='similar-heading'>
                <h5>Similar Products</h5>
            </div>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='similar-card text-center'>
                        <div class='pro-image'>
                            <a href=""><img src="{{asset('front/assets/images/dell1.jpg')}}" alt=""></a>
                        </div>
                        <div class='pro-imformation'>
                            <p class='name'>HP Pavilion xp11</p>
                            <p><span>Best Price: </span>Rs 71000</p>
                        </div> 
                    </div> 
                </div>
                <div class='col-md-4'>
                    <div class='similar-card text-center'>
                        <div class='pro-image'>
                            <a href=""><img src="{{asset('front/assets/images/dell.jpg')}}" alt=""></a>
                        </div>
                        <div class='pro-imformation'>
                            <p class='name'>HP Pavilion xp11</p>
                            <p><span>Best Price: </span>Rs 71000</p>
                        </div> 
                    </div> 
                </div>
                <div class='col-md-4'>
                    <div class='similar-card text-center'>
                        <div class='pro-image'>
                            <a href=""><img src="{{asset('front/assets/images/dell1.jpg')}}" alt=""></a>
                        </div>
                        <div class='pro-imformation'>
                            <p class='name'>HP Pavilion xp11</p>
                            <p><span>Best Price: </span>Rs 71000</p>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </section>


    <!-- pop up model-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price Drop Alert</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='index.html' method='post'>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" style='color:#888;'>You will be notified when pricr drops more then 20%.</label>
                            <input type="email" class="form-control alerts" id="recipient-name" placeholder='Enter Your Email'>
                            <button class='goto-store custom-botton'>Save Alert</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end pop up model-->
@endsection