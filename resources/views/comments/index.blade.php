<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach($comments as $comment)
    <div>{{ $comment->user_id }}</div>
    <div>{{ $comment->product_id }}</div>
    <div>{{ $comment->body }}</div>
    <hr>
@endforeach

</body>
</html>