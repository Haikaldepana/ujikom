<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <br>
    <h1 style="text-align: center">PENJUALAN</h1>
    <div class="container">
        <div class="col-md-4" style="width:18%">
            <label for="inputState" class="form-label">Data Produk</label>
            <select id="inputState" class="form-select">
                <option selected>...</option>
                @foreach($produk as $produk)
                <option>{{ $produk->NamaProduk }}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div class="mb-3" style="width:18%">
            <label for="formGroupExampleInput2" class="form-label">Jumlah Produk</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
        </div>
        <br>
        <button class="btn btn-outline-success" type="submit" style="position: absolute; left:17%">Tambah</button>
    </div>
</body>

</html>