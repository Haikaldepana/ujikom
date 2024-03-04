<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Riot&family=Single+Day&display=swap" rel="stylesheet">
<style>

  *{  font-family: "Protest Riot", sans-serif;
  font-weight: 400;
  font-style: normal;}
</style>
</head>

<body>

  <nav class="navbar" style="background-color: #ddf9d9;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('home')}}" style="font-size: 5vh">KASIR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">HOME STAY</a>
        </li>         
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Produk</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('data-produk')}}">Data Produk</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{url('stok')}}">Stok</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pelanggan</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('data-pelanggan')}}">Data Pelanggan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">....</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Penjualan</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('tambah-penjualan')}}">Penjualan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{url('data-penjualan')}}">Data Penjualan</a></li>
            </ul>
          </li>
      </ul>
      <a class="btn btn-outline-success" href="{{url('register')}}" role="button">Register</a>
      <a class="btn btn-outline-success" href="{{url('logout')}}" role="button">Logout</a>
      <a class="btn btn-outline-success" href="{{url('login')}}" role="button">Login</a>
    </div>
  </div>

</nav>

</body>
</html>