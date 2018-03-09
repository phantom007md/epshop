<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/users" method="post">
    @csrf
    <label for="">name: </label><input name="name" type="text">
    <br>
    <label for="">email: </label><input name="email" type="text">
    <br>
    <label for="">password: </label><input name="password" type="text">
    <br>
    <label for="">confirm your password: </label><input name="password_confirmation" type="text">
    <br>
    <button>submit</button>
</form>

</body>
</html>