<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
</head>
<style>
    .form select{
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    }
</style>
<body>
    <div class="login-page">
        <form action={{ url('/tambah-akun') }} method="post">
            @method('POST')
            @csrf
        <div class="form">  
            <form class="register-form">
                <h1>BUAT AKUN </h1>
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <input type="text" placeholder="full name" name ="fn"/>
                <select class="form-select" name="role">
                    <option selected>Pilih role...</option>
                        <option>admin</option>
                        <option>petugas</option>
                </select>
                
                <button>BUAT</button>
              </form>
            </form>
        </div>
</body>
</html>