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
                <thead class="table-success">
                    <tr>
                        <th scope="col" colspan="5" style="text-align: center">
                            <h1>Data penjualan</h1>
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:10%">ID Penjualan</th>
                        <th scope="col" style="text-align: center">Tanggal</th>
                        <th scope="col" style="text-align: center">Nama Pelanggan</th>
                        <th scope="col" style="text-align: center">Total</th>
                    </tr>
                </thead>
                @foreach ($detail as $detail) 
                    <tbody>
                        <tr>
                            <th scope="row" style="text-align: center;"></th>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>