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
      <div class="container" style="padding-top : 100px">
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <h2> Hari ini di Tastemade</h2>
            <h4> Resep dan Video </h4>
              <div class="videohome"> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/d3WBeMJY5ng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h2> <a style="color : black; text-decoration : none" href="<?php echo site_url('Welcome/resep') ?>"> Nasi Goreng Hitam </a> </h2>
                <p>Gurihnya nasi goreng dengan rasa tinta cumi yang khas dengan campuran seafood yang menggoda!</p>
              </div>
              <div class="videohome"> 
                elemen video
                <h2>Es Krim Pisang Goreng</h2>
                <p>Pisang gorengmu kini dalam bentuk Es Krim yang renyah di luar dan lembut di dalam!</p>
              </div>
              <div class="videohome"> 
                elemen video
                <h2>Kepiting Tauco</h2>
                <p>Lembutnya daging kepiting dalam balutan bumbu tauco yang gurih!</p>
              </div>
              <div class="videohome"> 
                elemen video
                <h2>Tengkleng Bakar</h2>
                <p>LNikmati kelembutan Tengkleng yang dibakar dengan kuah gulai yang bercita rasa gurih dan sedikit pedas khas Solo ini!</p>
              </div>
            </div>
          <div class="col-md-4 col-sm-12" id="resepsamping">
            <h2 class="resep">Resep</h2>
              <div class="row">
                <div class="col-12 items">
                  <div class="row">
                    <div class="col-4">
                      <img class="img-fluid" src="img/resepsamping1.png">
                    </div>
                    <div class="col-6 align-self-center">
                      Bakso Goreng Ayam
                    </div>
                  </div>
                </div>
                <div class="col-12 items">
                  <div class="row">
                    <div class="col-4">
                      <img class="img-fluid" src="img/resepsamping1.png">
                    </div>
                    <div class="col-6 align-self-center">
                      Pertunjukan Pemotongan Tuna di Tokyo
                    </div>
                  </div>
                </div>
                <div class="col-12 items">
                  <div class="row">
                    <div class="col-4">
                      <img class="img-fluid" src="img/resepsamping1.png">
                    </div>
                    <div class="col-6 align-self-center">
                      Nasi Goreng Putih Hongkong
                    </div>
                  </div>
                </div>
                <div class="col-12 items">
                  <div class="row">
                    <div class="col-4">
                      <img class="img-fluid" src="img/resepsamping1.png">
                    </div>
                    <div class="col-6 align-self-center">
                      Puding Karamel Bonbon
                    </div>
                  </div>
                </div>                
            </div>
      </div>    
    </div>
  </div>
<!-- Footer -->
wiraa
<footer class="page-footer font-small special-color-dark pt-4" style="background-color : #262626; width : 100%">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
          <h2 class="text-uppercase" style=" margin-left : 250px"> <a style="color : white; text-decoration : none" href="<?php echo base_url() ?>"> TASTEMADE </a></h2>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
            <ul class="list-unstyled">
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Tentang</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Periklanan</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Pers</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Karier</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Kirimkan Ide</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Tanya Jawab Umum</a>
              </li>  
              <li>
                <a style="color : white; text-decoration : none"  href="#!">US</a>
              </li>                          
            </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <ul class="list-unstyled">
              <li>
                <a style="color : white; text-decoration : none"  href="#!">UK</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Portugues</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Espanol</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">日本語</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Bahasa</a>
              </li>
              <li>
                <a style="color : white; text-decoration : none"  href="#!">Français</a>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3" style="color : white">©2019 Copyright:
      <a>Inc • Syarat • Privasi • • Moderasi Media Sosial • Copyright</a>
    </div>
  </footer>
  <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>