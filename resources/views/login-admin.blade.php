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
        <div class="form">
            <form action={{url('/login/admin')}} method="post">
                @method("post")
                @csrf 
            <form class="login-form">
                <h1>login admin</h1>
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit">login</button>
            </form>
          </form>
        </div>
</body>
</html>



{{-- <form class="register-form">
    <input type="text" placeholder="name" name="username"/>
    <input type="password" placeholder="password" name="password"/>
    <input type="text" placeholder="email address"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form> --}}