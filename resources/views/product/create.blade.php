<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EpShop</title>
</head>
<body>

<form method="post" action="/product">
    @csrf
    <lable>title : </lable><input type="text" name="title">
    <br>
    <lable>name: </lable><input type="text" name="name">
    <br>
    <lable>price: </lable><input type="text" name="price">
    <br>
    <lable>guaranty: </lable><input type="text" name="guaranty">
    <br>
    <lable>type: </lable><input type="text" name="type">
    <br>
    <lable>body: </lable><input type="text" name="body">
    <br>
    <lable>img_uri: </lable><input type="text" name="img">
    <br>
    <hr>
    <button type="submit">submit</button>
</form>

</body>
</html>


{{--// Product--}}

{{--index        get:/products--}}
{{--show         get:/products/{id}--}}

{{--create:      get:/product--}}
{{--store        post:/product--}}

{{--edit         get:/product/{id}--}}
{{--update       update:/product/{id}--}}

{{--destroy      delete:/product/{id}--}}










