
@extends('layouts.admin.admin-layout')
@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Product List</h4>
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
            <li class="breadcrumb-item"><a href="#!">Product List</a>
            </li>
        </ul>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Product List</h5>
                    <button type="button"
                        onclick='window.location.href="{{route("add-product")}}"' class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Product
                    </button>
                </div>
                <div class="card-block">
                    
                    <div class="dt-responsive table-responsive">
                        <div id="base-style_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <table id="base-style" class="table table-striped table-bordered nowrap dataTable"
                                        role="grid" aria-describedby="base-style_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="base-style"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 155px;">ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 254px;">Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 116px;">Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                                    style="width: 54px;">Price</th>

                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                    colspan="1" aria-label="Salary: activate to sort column ascending"
                                                    style="width: 92px;">Brand</th>
                                                <th class="sorting" tabindex="0" aria-controls="base-style" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 92px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php $i=0 @endphp

                                            @foreach($products as $pro)

                                            @php $i++ @endphp
                                            @php $class= $i%2 ==0 ? 'even' : 'odd'; @endphp

                                            <tr role="row" id="row-{{$pro->id}}" class="@php echo $class; @endphp">
                                            <td>{{$pro->id}}</td>
                                                <td>
                                                
                                                    <img src="@php  echo get_image($pro->image) @endphp" height='100' width='100' class="img-fluid" alt="tbl">
                                                </td>
                                                <td>{{$pro->title}}</td>
                                                <td>http://127.0.0.1:8000/dashboard/view-productRs.{{$pro->price}}</td>
                                                <td>{{$pro->brands}}</td>
                                                <td>

                                                <a href="{{route('view-product-detail', $pro->id)}}" class="m-r-15 text-muted"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="view"><i class="icofont icofont-eye-alt f-16 m-0"></i></a>
                                                    <a href="{{route('edit-product', $pro->id)}}"
                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"><i
                                                            class="icofont icofont-ui-edit"></i></a>
                                                    <a href="{{route('delete-product')}}" class="delete text-muted"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete" data-id="{{$pro->id}}"><i
                                                            class="icofont icofont-delete-alt"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">ID</th>
                                                <th rowspan="1" colspan="1">Image</th>
                                                <th rowspan="1" colspan="1">Title</th>
                                                <th rowspan="1" colspan="1">Price</th>
                                                <th rowspan="1" colspan="1">Brand</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-overlay"></div>

</div>

@endsection


@section('js')

<script>
$('.delete').click(function(e){
    e.preventDefault();
    var id=$(this).attr('data-id');
    var data={
        'id':id,
    }


    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:"DELETE",
            data:data,
            url:$(this).attr('href'),
            success:function(){
               $('#row-'+id).remove();
            },
            error:function(){
                alert('error')
            }

        })
        
    }
    })
    
})
//

</script>

@endsection

