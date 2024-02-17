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
                            <option value="{{ $produk->id }}">{{ $produk->NamaProduk }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="idpenjualan" value={{ $idpenjualan }}>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Jumlah Produk</label>
                    <div class="input-group">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="number" id="typeNumber" class="form-control" value="qty" name="qty" min="1" placeholder="qty" />
                          </div>
                    </div>
                   
                </div>
                <select class="form-select" name ="pelanggan">
                    <option selected>Nama Pelanggan</option>
                    @foreach ($pelanggan as $pelanggan)
                        <option value="{{ $pelanggan->pelangganID }}">{{ $pelanggan->NamaPelanggan }}</option>
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
                            <td style="text-align: center">{{ $detailpenjualan->Harga }}</td>
                            <td style="text-align: center">{{ $detailpenjualan->JumlahProduk }}</td>
                            <td style="text-align: center">{{ $detailpenjualan->SubTotal }}</td>
                            <?php $total_harga = $total_harga + $detailpenjualan->SubTotal; ?>
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
