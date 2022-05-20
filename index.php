<?php 
include "connect.php";
include "navbar.html";

// $sql = "INSERT INTO `ukm`(`id`, `nama`, `deskripsi`, `contact_person`, `foto`) VALUES (NULL,"UKM Dance","Kita bisa menari kok!","filbert05","/img/a.png")";
// $pdo->exec($sql);

// $sqlhistory = "INSERT INTO `admin` (`id`, `username`, `password`, `id_ukm`) VALUES (NULL,'a1','a2',1)";
// $stmthistory = $pdo->prepare($sqlhistory);
// $stmthistory->execute();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <title>Main Menu</title>
</head>
<style>
  @media only screen and (max-width: 1000px) {

    /* For tablets & phone */
    .menu {
      display: block;
      padding: 0px;
    }

    .card {
      margin: 0px;
      width: 100vw;
      margin-bottom: 10px;
    }
  }

  @media only screen and (min-width: 1001px) {

    /* For desktop: */
    .menu {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      padding: 20px;
    }

    .card {
      margin: 0px;
      width: 25rem;
    }

  }
</style>

<body>
  <div class="fluid container menu" style="row-gap: 15px;">
    <?php
    $stmt = $pdo->query("SELECT * FROM `ukm` WHERE 1");
    while ($row = $stmt->fetch()) {
        $id = $row['id'];
        $nama = $row['nama'];
        $deskripsi = $row['deskripsi'];
        $contact = $row['contact_person'];
        $foto = $row['foto'];
        $logo = $row['logo'];
        $card1= '<div class="card" style="padding: 20px;">
        <div class="" style="height: 100px; display: grid; grid-template-columns: 100px 1fr ;">
          <div class="" style="height: 100px;">
            <div>
              <img src="'.$logo.'" alt=""
                style="object-fit: contain; height: 100px;">
            </div>
          </div>
          <div class="" style="grid-template-rows: 1fr 1fr 1fr; display: grid; height: 100px; padding: 30px;">
            <div></div>
            <div>
              <h5 class="card-title">'.$nama.'</h5>
            </div>
            <div></div>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">'.$deskripsi.'</p>
          <p class="card-text">☎️ : '.$contact.'</p>

          <div id="carouselExampleIndicators'.$id.'" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            ';
            //carousell inner 
            $card2= '</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators'.$id.'"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators'.$id.'"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <center style="margin: 20px;">
            <a href="hal3.php?id_ukm='.$id.'" class="btn btn-primary">Request Now</a>
          </center>
        </div>
      </div>
      ';
      echo $card1;
      $tags = explode(';',$foto);
        echo '<div class="carousel-item active"> <img src="'.$tags[0].'" class="d-block w-100" alt="..."> </div>';
        unset($tags[0]);
      foreach($tags as $key) {    
        echo '<div class="carousel-item"> <img src="'.$key.'" class="d-block w-100" alt="..."> </div>';
      };
      echo $card2;
    }
    ?>
  </div>

</body>

</html>