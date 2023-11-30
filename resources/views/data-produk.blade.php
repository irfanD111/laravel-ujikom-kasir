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
            <table class="table table-bordered">
                <thead class="table-success">
                    <tr>
                        <th scope="col" colspan="5" style="text-align: center">
                            <h1>Data Produk</h1>
                        </th>
                    </tr>
                </thead>
                <thead>   
                    <tr>
                    <th scope="col" style="text-align: center">ID Produk</th>
                    <th scope="col" style="text-align: center">Nama Produk</th>
                    <th scope="col" style="text-align: center">Harga</th>
                    <th scope="col" style="text-align: center">Stok</th>
                    <th scope="col" style="text-align: center; width:14%">Opsi</th>

                    </tr>
                </thead>
                @foreach ($produk as $produk)
                <tbody>
                    <tr>
                    <th scope="row" style="text-align: center; height:30px">{{$produk->ProdukID}}</th>
                    <td style="text-align: center">{{$produk->NamaProduk}}</td>
                    <td style="text-align: center">{{$produk->Harga}}</td>
                    <td style="text-align: center">{{$produk->Stok}}</td>
                    <td>
                        <a href="hapus-produk/{{ $produk->ProdukID }}" type="submit" class="btn btn-outline-danger" style="padding: ">Hapus</a>
                        <a href="update-produk/{{ $produk->ProdukID }}" type="submit" class="btn btn-outline-success">Update</a>
                    </td>
                    </tr>
                </tbody>
                @endforeach 
            </table>
            <a href="{{url('tambah-produk')}}" type="submit" class="btn btn-outline-info" style="position: absolute;
            left:85%">Tambah</a>
        </div>
      </div>
</body>
</html>