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
    @include('layout.navbar')
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="login-page">
        <form action={{ url('/register') }} method="post">
            @method('POST')
            @csrf
        <div class="form">  
            <form class="register-form">
               <h1>REGISTER</h1>
                <label from="name" class="form-label">name</label> 
                <input type="text" placeholder="" name="name"/>
                <label from="email" class="form-label">email</label> 
                <input type="email" placeholder="" name="email"/>
                <label from="password" class="form-label">password</label> 
                <input type="password" name="password" class="form-control" id="password" required/>
                <button>BUAT</button>
            
              </form>
            </form>
        </div>
</body>
</html>