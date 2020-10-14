<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellspacing='0' cellpadding='0' border='1'>
    <tr>  
    <th>Name</th>
    <th>series</th>
    <th>brand</th>
    <th>Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
    <th>{{$product->title}}</th>
    <th>{{$product->series}}</th>
    <th>{{$product->brands}}</th>
    <th>
    <a href="{{route('edit-product', $product->id)}}">Edit</a>
    <a href="{{route('delete-product', $product->id)}}">Delete</a>
    </th>
    </tr>
    @endforeach
    </table>
</body>
</html>