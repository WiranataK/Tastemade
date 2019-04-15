<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/tastemade.css" rel="stylesheet" type="text/css"/>

    <title>TasteMade | Resep & Video</title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-light navbar-expand-md bg-faded justify-content-center">
        <a href="<?php echo base_url() ?>" class="navbar-brand d-flex w-50 mr-auto"><img src="<?php echo base_url("img/logo.png") ?>" id="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('Welcome/halamanmakanan') ?>">Makanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TV</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Buat Akun</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
      <img class="img-fluid" src="<?php echo base_url('img/headermakanan.png') ?>" style="margin-top : 70px; width : 100%; height : 190px ">
    </header>
      <div class="container">
        <!--1 vide-->
        <!--2 kolom 2 biji-->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12"> 
                image
                nama
             </div>
             <div class="col-md-4 col-sm-6 col-xs-12"> 
                image
                nama
             </div>
             <div class="col-md-4 col-sm-6 col-xs-12"> 
                image
                nama
             </div>
             <div class="col-md-4 col-sm-6 col-xs-12"> 
                image
                nama
             </div>
             <div class="col-md-4 col-sm-6 col-xs-12"> 
                image
                nama
             </div>
      <!-- Content here -->
      </div>
      <footer>  
          <div class="container">
            <div rp></div>
          </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>