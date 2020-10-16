<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('edit-website', $website->id)}}" method='post' novalidate="" enctype="multipart/form-data">
    @csrf
        <input type="text" name='name' placeholder='Name' value="{{$website->name}}"><br>
        <input type="text" name='url' placeholder='Url' value="{{$website->url}}"><br>
        <input type="text" name='logo_url' placeholder='Logo Url'value="{{$website->logo_url}}" ><br>
        <input type="submit" value="summit">
    </form>
</body>
</html>