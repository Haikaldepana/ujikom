<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
</head>
<body>
    <div class="login-page">
        <form action={{ url('/tambah-admin') }} method="post">
            @method('POST')
            @csrf
        <div class="form">
            <form class="register-form">
               <center><h1>BUAT AKUN ADMIN</h1></center> 
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <input type="text" placeholder="full name" name ="fn"/>
                <button>BUAT</button>
              </form>
            </form>
        </div>
</body>
</html>