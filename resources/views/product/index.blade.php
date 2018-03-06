<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EpShop</title>
</head>
<body>

@foreach($products as $product)
    <div>
        <div>{{$product->title}}</div>
        <div>{{$product->name}}</div>
        <div>{{$product->price}}</div>
        <div>{{$product->guaranty}}</div>
        <div>{{$product->body}}</div>
        <div>{{$product->type}}</div>
        <hr>
    </div>
@endforeach

</body>
</html>








