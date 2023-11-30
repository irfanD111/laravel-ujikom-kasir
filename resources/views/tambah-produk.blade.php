<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form class="row g-3" action="{{url('tambah-produk')}}" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label  class="col-form-label">Nama Produk</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="np">
        </div>
      </div>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label class="col-form-label">Harga</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="harga">
        </div>
      </div>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label  class="col-form-label">Stok</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="stok">
      </div>
      <button type="submit" class="btn btn-outline-secondary">Buat</button>
    </form>
</div>
<br>

</body>
</html>