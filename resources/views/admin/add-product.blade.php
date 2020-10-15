<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add-product')}}" method='post' novalidate="" enctype="multipart/form-data">
    @csrf
        <input type="text" name='title' placeholder='title'><br>
        <input type="text" name='models' placeholder='Model'><br>
        <input type="text" name='brand' placeholder='Brands'><br>
        <input type="text" name='series' placeholder='Series'><br>
        <input type="number" name='generation' placeholder='generation'><br>
        <input type="number" name='ram' placeholder='ram'><br>
        <input type="number" name='storage' placeholder='storage'><br>
        <input type="display" name="display" placeholder='display'><br>
        <select name="discount_type" id="">
        <option value="">None</option>
        <option value="percent">Percent</option>
        <option value="flat">Flat</option>
        </select>
        <input type="number" name='discount' placeholder='Discount'>
        <input class="btn btn-primary"  type="file" name="image" >
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="summit">
    </form>

    <a href="{{route('view-product')}}">view lists</a>
</body>
</html>