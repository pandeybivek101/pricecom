@extends('layouts.home-layout')

@section('content')
<section class='shop-section'>
        <div class='container'>
            <div class="row">

            @foreach($products as $product )
                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                            <a href="{{route('detail', $product->id)}}">
                                <img src="{{asset('/uploads/products/'.$product->image)}}" alt="dell">
                            </a>
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>{{$product->title}}</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>{{$product->price}}</span></div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!--<div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                

                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                
                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                
                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>
                
                <div class='col-md-3 col-6'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">
                                <img src="{{asset('front/assets/images/dell1.jpg')}}" alt="dell">
                            </div>
                        </div>
                        <div class="product-model">
                            <div class='brand-name'>Dell Insperion 5570</div>
                        </div>
                        <div class="product-price">
                            <div class='price'>Best Price: <span>Rs 50000</span></div>
                        </div>
                    </div>
                </div>-->
                
                
                
            </div>
        </div>  
      </section>
      @endsection