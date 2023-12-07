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
    <h1 style="text-align: center">PENJUALAN</h1>
    <br>
    <div class="container">
        <form class="row row-cols-lg-auto g-3 align-items-center"
            style="  display: grid; grid-template-columns: auto auto auto; gap: 10px 10px;">
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                <select class="form-select" id="inlineFormSelectPref">
                    <option selected>Pilih Produk...</option>
                    @foreach ($produk as $produk)
                        <option>{{ $produk->NamaProduk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Jumlah Produk</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                        placeholder="Jumlah Produk.." name="qty">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-outline-dark">Tambah</button>
            </div>
        </form>
    </div>
    <BR><br>
    <div class="container">
    <div class="table-responsive">
        <table class="table table-bordered" style="width:80%">
            <thead >
                <tr>
                    <th scope="col" style="text-align: center; width:5%">Nama Produk</th>
                    <th scope="col" style="text-align: center; width:5%">Harga</th>
                    <th scope="col" style="text-align: center;width:5%">Qty</th>
                    <th scope="col" style="text-align: center; width:5%">Sub Total</th>
                </tr>
            </thead>
         
                <tbody>
                    <tr>
                        <th scope="row" style="text-align: center;">indomie</th>
                        <td style="text-align: center">4000</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">8000</td>
                    </tr>
                </tbody>
         
        </table>
    </div>
</div>
</body>

</html>
