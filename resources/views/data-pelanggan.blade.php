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
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-borderless" style="border-style:solid; border-color:rgb(89, 0, 255); border-width:3px">
                <thead class="table"style="border-style:solid; border-color:purple ; border-width:3px">
                    <tr>
                        <th scope="col" colspan="5">
                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                              </svg>Data Pelanggan</h5> 
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:10%">ID Pelanggan</th>
                        <th scope="col" style="text-align: center">Nama Pelanggan</th>
                        <th scope="col" style="text-align: center">Alamat</th>
                        <th scope="col" style="text-align: center">Nomor Telepon</th>
                        <th scope="col" style="text-align: center; width:9%">Opsi</th>

                    </tr>
                </thead>
                @foreach ($pelanggan as $pelanggan)
                    <tbody class="table table-bordered">
                        <tr>
                            <th scope="row" style="text-align: center; height:30px">{{ $pelanggan->PelangganID  }}</th>
                            <td style="text-align: center">{{ $pelanggan->NamaPelanggan	 }}</td>
                            <td style="text-align: center">{{ $pelanggan->Alamat }}</td>
                            <td style="text-align: center">{{ $pelanggan->NomorTelpon }}</td>
                            <td>
                                <a href="/hapus-pelanggan/{{$pelanggan->PelangganID}}" type="submit"
                                    class="btn btn-outline-danger" style="margin:4px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                    </svg></a>
                                <a href="/update-pelanggan/{{ $pelanggan->PelangganID }}" type="submit"
                                    class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                                      </svg></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <a href="{{ url('tambah-pelanggan') }}" type="submit" class="btn btn-outline-dark"
                style="position: absolute;
            left:85%;"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg></a>
        </div>
    </div>
</body>

</html>