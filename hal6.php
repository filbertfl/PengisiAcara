<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Hello, world!</title>
<style>
    
    @media only screen and (max-width: 1000px) {
        /* For tablets & phone */
        
    }
    
    @media only screen and (min-width: 1001px) {
        /* For desktop: */
        
    }
</style></head>

<body>
    <div class="fluid container menu" style="row-gap: 15px;">
        <div class="row">
            <div class="mb-3 col-2">
                <label for="exampleFormControlInput1" class="form-label">Nama UKM</label>
                <input type="text" class="form-control" id="namaUKM" value="UKM DANCE" disabled="">
            </div>
            <div class="mb-3 col-3">
                <label for="exampleFormControlInput1" class="form-label">Contact Person</label>
                <input type="text" class="form-control" id="contact">
            </div>
        </div>
        
        <div class="mb-3 col-12">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea style="height: 250px;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="mb-3 col-12 col-md-6">
                <label class="form-label">Foto</label>
                <input class="form-control" type="file">
            </div>
            <div class="mb-3 col-12 col-md-6">
                <label class="form-label">Video</label>
                <input class="form-control" type="file">
            </div>
        </div>

        <center>
            <button type="submit" class="btn btn-success">SAVE</button>
        </center>
        
    </div>