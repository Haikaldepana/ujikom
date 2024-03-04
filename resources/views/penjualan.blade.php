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
    @include('layout.navbar')
    <br>
    @if (session()->has('info'))
        <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">
            {{ session('info') }}
        </div>
    @endif
    <br>
    <h1 style="text-align: center">PENJUALAN</h1>
    <br>
    <div class="container">
        <form action={{ url('/tambah-penjualan') }} method="POST">
            @method('POST')
            @csrf

            <label class="row row-cols-lg-auto g-3 align-items-center"
                style="  display: grid; grid-template-columns: auto auto auto; gap: 10px 10px;">

                <div class="col-12">
                    <select class="form-select" name="produk">
                        <option selected>Pilih Produk...</option>
                        @foreach ($produk as $produk)
                            <option value="{{ $produk->ProdukID }}">{{ $produk->NamaProduk }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="idpenjualan" value={{ $idpenjualan }}>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Jumlah Produk</label>
                    <div class="input-group">
                        <div class="form-outline" style="width: 22rem;">
                            <input value="qty" min="1" type="number" id="typeNumber" class="form-control"
                                placeholder="qty" name="qty" />
                        </div>
                    </div>
                </div>
                <select class="form-select" name ="pelanggan">
                    <option selected>Nama Pelanggan</option>
                    @foreach ($pelanggan as $pelanggan)
                        <option value="{{ $pelanggan->PelangganID }}">{{ $pelanggan->NamaPelanggan }}</option>
                    @endforeach
                </select>

                <div class="col-12">
                    <button class="btn btn-outline-dark">Tambah</button>
                </div>
            </label>
        </form>
    </div>
    <BR><br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered" style="width:80%">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:5%">no</th>
                        <th scope="col" style="text-align: center; width:5%">Nama Produk</th>
                        <th scope="col" style="text-align: center; width:5%">Harga</th>
                        <th scope="col" style="text-align: center;width:5%">Qty</th>
                        <th scope="col" style="text-align: center; width:5%">Sub Total</th>
                        <th scope="col" style="text-align: center; width:5%">Opsi</th>
                    </tr>
                </thead>
                <?php $no = 1;
                $total_harga = 0;
                // $qty = $detailpenjualan->JumlahProduk
                // $pro = $detailpenjualan->ProdukID
                // $stok = $detailpenjualan->Stok
                ?>
                <tbody>
                    @foreach ($detailpenjualan as $detailpenjualan)
                        <tr>
                            <td style="text-align: center">{{ $no++ }}</td>
                            <td style="text-align: center">{{ $detailpenjualan->NamaProduk }}</td>
                            <td style="text-align: center">{{ number_format($detailpenjualan->Harga, 0, ',', '.') }}</td>
                            <td style="text-align: center">{{ $detailpenjualan->JumlahProduk }}</td>
                            <td style="text-align: center">{{ number_format($detailpenjualan->Subtotal, 0, ',', '.') }}</td>
                            <td><a href="cancel-produk/{{ $detailpenjualan->DetailID }}" type="submit"
                                    class="btn btn-outline-danger" style="margin:2px">
                                    {{-- <input type="hidden" name="qty" value={{$qty}}/>
                                <input type="hidden" name="produk" value={{$pro}}/>
                                <input type="hidden" name="stok" value={{$stok}}/> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                    </svg></a></td>
                            <?php $total_harga = $total_harga + $detailpenjualan->Subtotal; ?>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div class="container">
        <h1> Total Harga : {{ number_format($total_harga, 0, ',', '.') }}</h1>
    </div>
    <div class="container">
        <form action={{ url('Checkout') }} method="POST">
            @method('POST')
            @csrf
            <input type="hidden" name="idpenjualan" value={{ $idpenjualan }}>
            <input type="hidden" name="total" value={{ $total_harga }}>
            <button type="submit" class="btn btn-outline-dark">Checkout</button>

        </form>
    </div>
</body>

</html>