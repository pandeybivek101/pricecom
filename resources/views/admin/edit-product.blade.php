<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('edit-product', $product->id)}}" method='post' novalidate="" enctype="multipart/form-data">
    @csrf
        <input type="text" name='title' placeholder='title' value="{{$product->title}}"><br>
        <input type="text" name='models' placeholder='Model' value="{{$product->models}}"><br>
        <input type="text" name='brand' placeholder='Brands' value="{{$product->brands}}"><br>
        <input type="text" name='series' placeholder='Series' value="{{$product->series}}"><br>
        <input type="number" name='generation' placeholder='generation' value="{{$product->generation}}"><br>
        <input type="number" name='ram' placeholder='ram' value="{{$product->ram}}"><br>
        <input type="number" name='storage' placeholder='storage' value="{{$product->storage}}"><br>
        <input type="display" name="display" placeholder='display' value="{{$product->display}}"><br>
        <input class="btn btn-primary"  type="file" name="image" >
        <textarea name="description" id="" cols="30" rows="10">{{$product->description}}</textarea><br>
        <input type='hidden'  type="file" name="old_image" value='{{$product->image}}'>
        <input type="submit" value="summit">
    </form>

</body>
</html>