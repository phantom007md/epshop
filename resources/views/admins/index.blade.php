<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EpShop</title>
</head>
<body>

@foreach($admins as $admin)
    <div>
        <div>{{$admin->name}}</div>
        <div>{{$admin->access_level}}</div>
        <hr>
    </div>
@endforeach

</body>
</html>
