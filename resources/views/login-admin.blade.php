<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action={{url('/login/admin')}} method="post">
            @method("post")
            @csrf 
          <h1>Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text" name="username" required><br>
                <label>Password</label><br>
                <input type="password" name ="password" required><br>
                <button type="submit">Log in</button>
           
            </form>
        </div>     
</body>
</html>