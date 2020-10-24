@extends('layouts.admin.admin-layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex justify-content-between mb-30">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dotan</a></li>
                    <li class="breadcrumb-item active">Am Chart</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <div class='col-md-2'></div>
    <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" id='addproduct' action="{{route('add-product')}}" method='post' enctype="multipart/form-data">
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
                    <input type="text" class="form-control is-valid" id="inputSuccess" name='brand' placeholder="Enter Brands">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning">Series</label>
                    <input type="text" class="form-control is-invalid" id="inputWarning" name='series' placeholder="Enter Series">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError">Generation</label>
                    <input type="text" class="form-control is-invalid"  name='generation' placeholder="Enter Generation">
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
                    <input type="text" class="form-control is-invalid" name='display' placeholder="Enter Display">
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
                        <input type="number" class="form-control" placeholder="Enter Disount" name='discount'>
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


                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name='image'>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                <!-- /.card-header -->
            <div class="card-body pad" style='padding-left:0px; padding-right:0px;'>
              <div class="mb-3">
                <textarea class="textarea" name='description' placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd"></textarea>
              </div>
            </div>

            <input type="submit" value="submit">
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>





          <div class='col-md-2'></div>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$('#addproduct').on('submit', function (e){
  e.preventDefault();
  

  $.ajax({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url:'/dashboard/add-product',
        data:$('#addproduct').serialize(),
        success:function(){
          $('input').val('');
          toastr.success('Have fun storming the castle!', 'Miracle Max Says');
                      
        },
        error:function(){
            alert('error');
        }
    });

});


</script>
@endsection