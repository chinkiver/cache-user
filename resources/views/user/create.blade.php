<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a user</title>
</head>
<body>
    <div>
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div>
                <label for="user_name">用户名</label>
                <input type="text" name="user_name" id="user_name" required autofocus maxlength="100"/>
            </div>
            <div>
                <label for="user_email">注册邮箱</label>
                <input type="email" name="user_email" id="user_email" required maxlength="100"/>
            </div>
            <div>
                <label for="user_password">用户密码</label>
                <input type="password" name="user_password" id="user_password" required/>
            </div>
            <div>
                <label for="user_password_confirm">再次输入密码</label>
                <input type="password" name="user_password_confirm" id="user_password_confirm" required/>
            </div>
            <div>
                <button type="submit">提交</button>
            </div>
        </form>
    </div>
</body>
</html>
