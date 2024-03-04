<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Email</label>
    <input id="email" type="email" name="email" required>

    <label for="password">Password</label>
    <input id="password" type="password" name="password" required>

    <button type="submit">Login</button>
</form>

</body>
</html>