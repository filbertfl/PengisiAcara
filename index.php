
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <title>Hello, world!</title>
</head>
<style>

@media only screen and (max-width: 1000px) {
  /* For tablets & phone */
  .menu{
    display: block;
    padding: 0px;
  }
  .card{
    margin: 0px;
    width: 100vw;
    margin-bottom: 10px;
  }
}

@media only screen and (min-width: 1001px) {
  /* For desktop: */
  .menu{
    display: grid; grid-template-columns: 1fr 1fr 1fr;
    padding:20px;
  }
  .card{
    margin: 0px;
    width: 25rem;
  }

}
</style>
<body>
  <div class="fluid container menu" style="row-gap: 15px;">
    <div class="card" style="padding: 20px;">
      <div class="" style="height: 100px; display: grid; grid-template-columns: 100px 1fr ;">
        <div class=""  style="height: 100px;">
          <div>
            <img src="http://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-12/256/woman-dancing.png" alt="" style="object-fit: contain; height: 100px;">
          </div>
        </div>
        <div class="" style="grid-template-rows: 1fr 1fr 1fr; display: grid; height: 100px; padding: 30px;">
          <div></div>
          <div><h5 class="card-title">UKM DANCE DANCE!!</h5></div>
          <div></div>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis numquam deserunt iusto provident, voluptas nisi quod corporis et ad inventore pariatur earum repellendus placeat, minima blanditiis eius impedit doloremque reiciendis?</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <center style="margin: 20px;">
          <a href="#" class="btn btn-primary">Request Now</a>
        </center>
      </div>
    </div>

      <div class="card" style="padding: 20px;">
        <div class="" style="height: 100px; display: grid; grid-template-columns: 100px 1fr ;">
          <div class=""  style="height: 100px;">
            <div>
              <img src="http://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-12/256/woman-dancing.png" alt="" style="object-fit: contain; height: 100px;">
            </div>
          </div>
          <div class="" style="grid-template-rows: 1fr 1fr 1fr; display: grid; height: 100px; padding: 30px;">
            <div></div>
            <div><h5 class="card-title">UKM DANCE DANCE!!</h5></div>
            <div></div>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis numquam deserunt iusto provident, voluptas nisi quod corporis et ad inventore pariatur earum repellendus placeat, minima blanditiis eius impedit doloremque reiciendis?</p>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <center style="margin: 20px;">
            <a href="#" class="btn btn-primary">Request Now</a>
          </center>
        </div>
      </div>

        <div class="card" style="padding: 20px;">
          <div class="" style="height: 100px; display: grid; grid-template-columns: 100px 1fr ;">
            <div class=""  style="height: 100px;">
              <div>
                <img src="http://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-12/256/woman-dancing.png" alt="" style="object-fit: contain; height: 100px;">
              </div>
            </div>
            <div class="" style="grid-template-rows: 1fr 1fr 1fr; display: grid; height: 100px; padding: 30px;">
              <div></div>
              <div><h5 class="card-title">UKM DANCE DANCE!!</h5></div>
              <div></div>
            </div>
          </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis numquam deserunt iusto provident, voluptas nisi quod corporis et ad inventore pariatur earum repellendus placeat, minima blanditiis eius impedit doloremque reiciendis?</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://i.ytimg.com/vi/32si5cfrCNc/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <center style="margin: 20px;">
              <a href="#" class="btn btn-primary">Request Now</a>
            </center>
          </div>
        </div>
  
</div>

</body>

</html>