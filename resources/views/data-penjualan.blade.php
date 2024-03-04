<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('layout.navbar')
    <div class="container">
        <BR>
            <div class="table-responsive">
                <table class="table table-borderless" style="border-style:solid; border-color:rgb(89, 0, 255); border-width:3px">
                    <thead class="table"style="border-style:solid; border-color:purple ; border-width:3px">
                    <tr>
                        <th scope="col" colspan="5" >
                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                              </svg>Data penjualan</h5> 
                        </th>
                    </tr>
                </thead>
                <thead class="table table-bordered">
                    <tr>
                        <th scope="col" style="text-align: center; width:10%">ID Penjualan</th>
                        <th scope="col" style="text-align: center">Tanggal</th>
                        <th scope="col" style="text-align: center">Nama Pelanggan</th>
                        <th scope="col" style="text-align: center">Total</th>
                        <th scope="col" style="text-align: center; width:8%">Opsi</th>

                    </tr>
                </thead>
                @foreach ($penjualan as $penjualan)
                    <tbody class="table table-bordered">
                        <tr>
                            <th scope="row" style="text-align: center;">{{ $penjualan->PenjualanID }}</th>
                            <td style="text-align: center;">{{ $penjualan->TanggalPenjualan }}</td>
                            <td style="text-align: center;">{{ $penjualan->NamaPelanggan }}</td>
                            <td style="text-align: center;">{{ $penjualan->TotalHarga }}</td>
                            <td>
                                <a href="detail-penjualan/{{ $penjualan->PenjualanID }}" type="submit"
                                    class="btn btn-outline-dark" style="margin:4px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                    </svg>Detail</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>