<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        <a class="nav-link active" href="Asyraf_add-car.php">MyCar</a>
        <a href="Asyraf_add-car.php" style="width: 100px;position:relative;left:1000px;" class="btn btn-light fw-bold">Add Car</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-5 px-5">
    <h1>My Showroom</h1>
    <p>List Showroom Asyraf - 1202200054</p>
    <div class="row">
      <?php
        include '../config/connectormodul3.php';
        $query = "SELECT * FROM modul3 ORDER BY id_mobil ASC";
        $show = mysqli_query($connect,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>
          <div class="col">
            <div class="card mt-2" style="width: 18rem;margin-bottom:25px;">
              <img src="../assets/upload-img/<?php echo $data['foto_mobil'];?>" class="card-img-top"  style="min-height:200px;">
              <div class="card-body"  style="max-height:200px;">
                <h5 class="card-title"><?php echo $data['nama_mobil'];?></h5>
                <p class="card-text"><?php echo $data['deskripsi'];?></p>
                <div class="container px-5">
                  <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-danger">Delete</a>
                </div>
              </div>
            </div>
          </div>
        <?php  } ?>
    </div>
    <?php
  
    $carData = mysqli_query($connect,"SELECT * FROM modul3");
    $countCar = mysqli_num_rows($carData);

    ?>
    <div class="container mt-5">
        <p class="fw-bold opacity-50 fixed-bottom px-3">Jumlah Mobil : <?php echo "$countCar" ?></p>
    </div>
</div>


</body>
</html>