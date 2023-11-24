<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-page">
        <div class="form">

          <form action={{url('/login')}} method="post">
            @method("post")
            @csrf 
            <form class="login-form">
                <h1>login petugas</h1>
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit">login</button>
            </form>
          </form>
        </div>
    </div>
</body>
</html>
