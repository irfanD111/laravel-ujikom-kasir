
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
    <form class="row g-3" action="{{url('tambah-pelanggan')}}" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="row g-3 align-items-center">
      <h1 style="text-align: center">Tambah pelanggan</h1>
        <div class="col-auto">
          <label  class="col-form-label">Nama</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nama" style="position: absolute;
          left:15%; top:12%; width:15%" required>
        </div>
      </div>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label class="col-form-label">Alamat</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="alamat" style="position: absolute; left:15%; top:22%; width:15%" required>
        </div>
      </div>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label  class="col-form-label">No.telp</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nt" style="position: absolute; left:15%; top:31%; width:15%" required>
      </div>
      <div>
      <button type="submit" class="btn btn-outline-secondary" style="width:80px">Tambah</button>
    </div>
    </form>
</div>
<br>

</body>
</html>