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
            <table class="table table-borderless" style="border-style:solid; border-color:black; border-width:3px">
                <thead class="table-secondary"style="border-style:solid; border-color:black ; border-width:3px">
                    <tr>
                        <th scope="col" colspan="5">
                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z"/>
                              </svg>Data Produk</h5>
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:10%">ID Produk</th>
                        <th scope="col" style="text-align: center;">Nama Produk</th>
                        <th scope="col" style="text-align: center">Harga</th>
                        <th scope="col" style="text-align: center;" >Stok</th>
                        

                    </tr>
                </thead>
                @foreach ($produk as $produk)
                    <tbody class="table table-bordered">
                        <tr>
                            <th scope="row" style="text-align: center; height:30px">{{ $produk->ProdukID }}</th>
                            <td style="text-align: center">{{ $produk->NamaProduk }}</td>
                            <td style="text-align: center">{{ $produk->Harga }}</td>
                            <td style="text-align: center">{{ $produk->Stok }}</td>
                           
                        </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>
</body>

</html>
