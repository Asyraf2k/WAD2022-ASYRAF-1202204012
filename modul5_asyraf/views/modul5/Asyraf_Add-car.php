<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP_MODUL3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="Asyraf_HOME.php">Home</a>
        <a class="nav-link" href="Asyraf_list-car.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>


<div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Tambah Mobil</h3>
    <p>Tambah Mobil Baru Anda ke List Show Room</p>
        <form action="create.php" method="POST" class="mt-5" style="margin-right:250px" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" placeholder="Silahkan masukan nama mobilmu">
            </div>
            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Pemilik Mobil</label>
                <input type="text" class="form-control" name="pemilik_mobil" placeholder="Silahkan masukan nama mobilmu">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk Mobil</label>
                <input type="text" class="form-control" name="merk" placeholder="Silahkan masukan nama mobilmu">
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli Mobil</label>
                <input type="date" class="form-control" name="tanggal_beli" placeholder="">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi Mobil</label>
                <textarea class="form-control" name="deskripsi" rows="3" 
                    placeholder="Contoh: Mobil ini adalah yang terbaik dimasanya ..." required></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>         
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status" value="lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
                <input class="form-check-input ms-5" type="radio" name="status" value="belum lunas">
                <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Selesai</button>
        </form>
</div>

</body>
</html>