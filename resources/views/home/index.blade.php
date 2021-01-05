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
                
                
            </div>

            <div class='row btn-row text-center'>
                <a href="" id='load_more'>Load More</a>
            </div>
        </div>  
      </section>
      @endsection