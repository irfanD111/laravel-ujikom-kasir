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
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col" colspan="7" style="text-align: center">
                            <h1>Detail penjualan</h1>
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:10%">ID Penjualan</th>
                        <th scope="col" style="text-align: center">Tanggal</th>
                        <th scope="col" style="text-align: center">Nama Pelanggan</th>
                        <th scope="col" style="text-align: center">Nama Produk</th>
                        <th scope="col" style="text-align: center">Harga</th>
                        <th scope="col" style="text-align: center">qty</th>
                        <th scope="col" style="text-align: center">Sub Total</th>

                    </tr>
                </thead>
                @foreach ($detail as $detail) 
                    <tbody>
                        <tr>
                            <th scope="row" style="text-align: center;">{{$detail->PenjualanID}}</th>
                            <td style="text-align: center;">{{$detail->TanggalPenjualan}}</td>
                            <td style="text-align: center;">{{$detail->NamaPelanggan}}</td>
                            <td style="text-align: center;">{{$detail->NamaProduk}}</td>
                            <td style="text-align: center;">{{$detail->Harga}}</td>
                            <td style="text-align: center;">{{$detail->JumlahProduk}}</td>
                            <td style="text-align: center;">{{$detail->SubTotal}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <h1>Total Harga :{{$detail->TotalHarga}}</h1>
    </div>
</body>
</html>