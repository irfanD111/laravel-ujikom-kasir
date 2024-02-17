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
            <table class="table table-borderless" style="border-style:solid; border-color:black; border-width:3px">
                <thead class="table-secondary"style="border-style:solid; border-color:black ; border-width:3px">
                    <tr>
                        <th scope="col" colspan="5" >
                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                               <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z"/>
                              </svg>Data penjualan</h5> 
                        </th>
                    </tr>
                </thead>
                <thead class="table table-bordered">
                    <tr>
                        <th scope="col" style="text-align: center; width:10%">no</th>
                        <th scope="col" style="text-align: center">Tanggal</th>
                        <th scope="col" style="text-align: center">Nama Pelanggan</th>
                        <th scope="col" style="text-align: center">Total</th>
                        <th scope="col" style="text-align: center; width:8%">Opsi</th>

                    </tr>
                </thead>
                <?php $no = 1?>
                @foreach ($penjualan as $penjualan)
                    <tbody class="table table-bordered">
                        <tr>
                            <th scope="row" style="text-align: center;">{{ $no++}}</th>
                            {{-- $penjualan->PenjualanID --}}
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
