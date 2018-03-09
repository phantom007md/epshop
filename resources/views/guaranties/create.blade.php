<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/guaranties" method="post">
    @csrf
    <label for="">company: </label><input name="company" type="text">
    <br>
    <label for="">expire_time: </label><input name="exp_time" type="text">
    <br>
    <button>submit</button>
</form>

</body>
</html>