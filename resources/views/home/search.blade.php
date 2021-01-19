@extends('layouts.main-layout')
@section('content')
<div class="container-fluid">
     <div class='row'>
         <div class="col-md-3">
             <div class='search-card'>
                 <div class='top-sec'>
                    <label for="search-box">SEARCH PRODUCT</label>
                    <form class="main" id='search-form' action='' method='post'>
                       <div class="input-group search-input">
                           <div class="custom-file">
                             <input type="text" id='ajax_search_for_pro' class="form-control" name='item' required>
                             <!--<label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>-->
                           </div>
                           <button><i class="fa fa-search" aria-hidden="true"></i></button>
                       </div>
                   </form>
                 </div>

                 <div class='top-sec mid' id='search_brand'>
                    <label for="search-box">BRANDS</label>
                    <div class='check'><input type="checkbox" value='dell' name='dell'/><span>DELL</span> </div>
                    <div class='check'><input type="checkbox" value='hp' name='hp'/><span>HP</span> </div>
                    <div class='check'><input type="checkbox" value='acer' name="acer"/><span>ACER</span> </div>
                 </div>

                 <div class='top-sec last'>
                    <label for="search-box">BEST PRICE</label>
                    <div class='last-frm'>
                        <form action="" style='display:flex;'>
                        <div class='price-from'>
                            <input type="text" class="form-control" name='item' required> 
                        </div>
                        <span class='sep'>-</span>
                        <div class='price-upto'>
                            <input type="text" class="form-control" name='item' required> 
                        </div> 

                        <div class='price-submit'>
                           <!-- <button><i class="fa fa-search" aria-hidden="true"></i></button>-->
                           <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </form> 


                         
                    </div>
                 </div>
                 
             </div>
         </div>
         <div class="col-md-9">
             <div class='serach_found_container'>
                <div class='search_found_title text-center'><span>we found <span id='total_search'>{{$total}}</span><span> product(s)<span></div>
                <div class='search_found_body'>
                    <div class='search_inner_container'>
                        <div class="container">
                            <div class='row' id='search-content'>
                            @php if($results){ @endphp
                            @foreach($results as $result)
                                <div class='col-md-4'>
                                    <div class='product-card text-center'>
                                        <div class='image-section'>
                                            <div class="image">
                                                <a href="{{route('detail', $result->id)}}">
                                                    <img src="{{asset('/uploads/products/'.$result->image)}}" alt="dell">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-model">
                                            <div class='brand-name'>{{$result->title}}</div>
                                        </div>
                                        <div class="product-price">
                                            <div class='price'>Best Price: <span>Rs {{$result->price}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @php } @endphp
                            </div>
                        </div>
                       
                    </div>
                </div>
             </div>
         </div>
     </div>
 </div>



@endsection



@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
   $('#ajax_search_for_pro').keyup(function(){
       //console.log('dddd');
       $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        
           type:'post',
           url:"{{route('ajax_search')}}",
           data:{
               'input':$(this).val()
           },
           success:function(response){
              $('#search-content').html(response.products)
              $('#total_search').text(response.total)
              
              
           },
           error:function(){
               alert('error');
           }
       }) 
   })
   $('#search_brand input').change(function(){
       $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        
           type:'post',
           url:"{{route('brands_ajax_search')}}",
           data:{
               'input':$(this).val()
           },
           success:function(response){
              $('#search-content').append(response.products)
              $('#total_search').text(response.total)
              
              
           },
           error:function(){
               alert('error');
           }
       })
    })
</script>
@endsection
