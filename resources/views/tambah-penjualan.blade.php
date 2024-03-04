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
    <div class="container">
        <form class="row g-3" action="{{ url('tambah-penjualan') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <br>
            <div class="row g-3 align-items-center">
                <h1 style="text-align: center">tambah penjualan</h1>
                <div class="col-auto">
                    <label class="col-form-label">PenjualanID</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                        name="np" style="position: absolute;
          left:35%; top:12%; width:50%" required>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">TanggalPenjualan</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                        name="harga" style="position: absolute; left:35%; top:22%; width:50%" required>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">TotalHarga</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                        name="stok" style="position: absolute; left:35%; top:31%; width:50%" required>
                </div>
                <div>
                  <a href="{{url('data-penjualan')}}" type="submit" class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                  </svg> kembali</a>
                    <button type="submit" class="btn btn-outline-dark" style="width:80px">Tambah</button>
                </div>
        </form>
    </div>
    <br>

</body>

</html>