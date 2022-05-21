<html lang="en">

<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $file_batch='';
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
        $file_batch .= ';upload/'.$filename;
    }

    // $ukm = $_POST['ukm'];
    $ukm = $_POST['ukm'];
    $deskripsi = $_POST['deskripsi'];
    $kontak = $_POST['kontak'];

    // $logo = $_POST['logo'];
    $filename = $_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],'upload/'.$filename); 
    $logo = 'upload/'.$filename;

    $sql = "INSERT INTO `ukm`(`id`, `nama`, `deskripsi`, `contact_person`, `foto`, `logo`) VALUES (NULL,'$ukm','$deskripsi','$kontak','$file_batch','$logo')";
    $pdo->query($sql);

}
?>

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

    <title>Hello, world!</title>
    <style>
        @media only screen and (max-width: 1000px) {
            /* For tablets & phone */

        }

        @media only screen and (min-width: 1001px) {
            /* For desktop: */

        }
    </style>
</head>

<body>
    <div class="fluid container menu" style="row-gap: 15px;">
        <form method='post' action='' enctype='multipart/form-data'>
            <div class="row">
                <div class="mb-3 col-2">
                    <label for="exampleFormControlInput1" class="form-label">Nama UKM</label>
                    <input type="text" class="form-control" id="namaUKM" value="UKM DANCE" name="ukm" require>
                </div>
                <div class="mb-3 col-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact Person (Line ID)</label>
                    <input name="kontak" type="text" class="form-control" id="contact" require>
                </div>
            </div>

            <div class="mb-3 col-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea maxlength="250" name="deskripsi" style="height: 250px;" class="form-control" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>

            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label">Foto</label>
                    <input  class="form-control" type="file" name="file[]" id="file" multiple require>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label">Logo UKM</label>
                    <input name="logo" class="form-control" type="file" require>
                </div>
            </div>

            <center>
                <input class="btn btn-success" type='submit' name='submit' value='Upload'>
            </center>
        </form>

    </div>