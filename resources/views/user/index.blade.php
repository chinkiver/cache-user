<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
</head>
<body>
    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
