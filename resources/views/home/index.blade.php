@extends('layouts.home-layout')

@section('content')
<section class='shop-section'>
        <div class='container'>
            <div class="row" id='home-item-row'>

            @foreach($products as $product )
                <div class='col-md-3 col-6 home-card'>
                    <div class='product-card text-center'>
                        <div class='image-section'>
                            <div class="image">

                            <a href="{{route('detail', $product->id)}}">
                                <img src="@php  echo HelperClass::get_image($product->image) @endphp" alt="dell">
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
                
                
            </div>

            
        </div>  
      </section>
      @endsection