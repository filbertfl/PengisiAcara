<?php 
include "connect.php";


// $sqlhistory = "INSERT INTO `admin` (`id`, `username`, `password`, `id_ukm`) VALUES (NULL,'a1','a2',1)";
// $stmthistory = $pdo->prepare($sqlhistory);
// $pdo->prepare($sqlhistory);
// $stmthistory->execute([$_POST['nama_lengkap'], $_POST['email_peserta'], $_POST['hp_peserta'], $_POST['asal_instansi']]);

// HAL 3
// $id_panitia = $SESSION['id'];

$id_ukm = $_GET["id_ukm"];
echo 'id ukm : '.$id_ukm;

// $id_panitia = 0;
// $id_ukm = 1;

if(isset($_POST['submit_button'])){
    $request_info = $_POST['request_info'];
    // $request_info = $_POST['request_info'];
    // $request_info = $_POST['request_info'];
    echo "success";
    $sql = "INSERT INTO `request`(`id`, `date_time`, `request_info`,`link`, `status`, `id_ukm`, `id_panitia`) VALUES (NULL,'1000-01-01 00:00:00','$request_info','gdrive',0,$id_ukm,$id_panitia)";
    $pdo->exec($sql);

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pengisi Acara!</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">
        <form action="#" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputnama">Nama Pengisi Acara</label>
                <input name="nama_pengisi_acara"  type="nama" class="form-control" id="inputnama" placeholder="Nama Pengisi Acara" value="<?php  echo 'nama_UKM!' ?>" disabled>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="control-label requiredField" for="date">
                    Tanggal Acara
                    </label>
                    <div class="input-group">
                      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">Request Info</label>
                <textarea name="request_info" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button name="submit_button" type="submit" class="btn btn-primary">Request</button>
        </form>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
  </body>
</html>