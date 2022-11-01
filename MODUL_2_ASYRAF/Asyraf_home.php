<!DOCTYPE html>
<html>
<head>
  <style>
    .navbg{
      background-color:black;
    }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <title>Tugas Pendahuluan Modul 2</title>
</head>

<body>
<ul class="nav justify-content-center navbg">
  <li class="nav-item">
    <a class="nav-link" href="Asyraf_home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Pendaftaran.php">Booking</a>
</ul>
<body>
  <br>


<center><h1>WELCOME TO EAD RENT</h1><center/>

<?php
echo "Find your best deal here!";
?>
<br><br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="brio.png" class="card-img-top" alt="brio">
                    <div class="card-body">
                        <h5 class="card-title">Brio</h5>
                        <p>Rp. 500000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">4 Kursi</li>
                        <li class="list-group-item">1200 CC</li>
                        <li class="list-group-item">Automatic</li>
                    </ul>
                    <div class="card-body">
                      <form action="Pendaftaran.php" method="post">
                        <button type="submit" name="Brio" class="btn btn-primary">Book Now</button>
                      </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 17rem;">
                    <img src="ertiga.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Ertiga</h5>
                        <p>Rp. 1000000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">6 Kursi</li>
                        <li class="list-group-item">1500 CC</li>
                        <li class="list-group-item">Manual</li>
                    </ul>
                    <div class="card-body">
                      <form action="Pendaftaran.php" method="post">
                        <button type="submit" name="Ertiga" class="btn btn-primary">Book Now</button>
                      </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 17rem;">
                    <img src="agya.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Agya</h5>
                        <p>Rp. 800000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">4 Kursi</li>
                        <li class="list-group-item">1300 CC</li>
                        <li class="list-group-item">Automatic</li>
                    </ul>
                    <div class="card-body">
                      <form action="Pendaftaran.php" method="post">
                        <button type="submit" name="Agya" class="btn btn-primary">Book Now</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
                <div style="width:100%;height: 70px !important;background-color: rgb(96, 89, 89);text-align: center;padding-top: 20px; ">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalfooter" style="color: aliceblue !important;" >Copyright 2022 (Asyraf_1202204012_SI4407)</a>
                  </div>
                  <div>
                    <div class="modal fade" id="modalfooter">
                      <div class="modal-dialog">
                        <div class="modal-content">
                    
                          <div class="modal-header">
                            <h4 class="modal-title">Copyright</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                    
                          
                          <div class="modal-body">
                            <p>Nama : MUH Asyraf_1202204012</p>
                            <p>NIM : 1202204012</p>
                            <p>Kelas : SI4407</p>
                          </div>
                    
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                  </div>
            </footer>
</html>