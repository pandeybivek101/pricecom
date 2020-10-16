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
    <th>Url</th>
    <th>Logo Url</th>
    <th>Action</th>
    </tr>
    @foreach($websites as $website)
    <tr>
    <th>{{$website->name}}</th>
    <th>{{$website->url}}</th>
    <th>{{$website->logo_url}}</th>
    <th>
    <a href="{{route('edit-website', $website->id)}}">Edit</a>
    <a href="{{route('delete-website', $website->id)}}">Delete</a>
    </th>
    </tr>
    @endforeach
    </table>
</body>
</html>