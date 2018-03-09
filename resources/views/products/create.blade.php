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
    <lable>name:</lable>
    <input type="text" name="name">
    <br>
    <lable>price:</lable>
    <input type="text" name="price">
    <br>
    <lable>type:</lable>
    <input type="text" name="type">
    <br>
    <lable>body:</lable>
    <input type="text" name="body">
    <br>
    <lable>img_uri:</lable>
    <input type="text" name="img">
    <br>
    <lable>guaranty:</lable>
    <select name="guaranty_id">
        @foreach($guaranties as $guaranty)
            <option value="{{ $guaranty->id }}">{{ $guaranty->company }}</option>
        @endforeach
    </select>
    <br>
    <lable>admin j:</lable>
    <select name="admin_id">
        @foreach($admins as $admin)
            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
        @endforeach
    </select>
    <br>
    <hr>
    <button type="submit">submit</button>
</form>

</body>
</html>
