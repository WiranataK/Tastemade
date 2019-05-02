<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php echo base_url() . 'css/tastemade.css'?>" rel="stylesheet" type="text/css"/>

<title>TasteMade | Resep & Video</title>
  </head>
  <body class="bodytv">
    <nav class="navbar fixed-top navbar-light navbar-expand-md bg-faded justify-content-center">
        <a href="<?php echo site_url('Welcome/halaman_utamalogin') ?>" class="navbar-brand d-flex w-50 mr-auto"><img src="<?php echo base_url("img/logo.png") ?>" id="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('Welcome/halaman_makananlogin') ?>">Makanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Welcome/tvlogin') ?>">TV</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                  <li class="nav-link">
                    <div class="bs-example">
                       <div class="dropdown">
                            <a style="color : black; text-decoration : none"href="#" data-toggle="dropdown" class="dropdown-toggle">Profile<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a style=" padding-left: 10px; color : black; text-decoration : none"href="<?php echo site_url('Welcome/akunsaya') ?>"> AKUN SAYA</a></li>
                                <li><a style=" padding-left: 10px; color : black; text-decoration : none"href="#"> VIDEO TERSIMPAN</a></li>
                                <li><a style=" padding-left: 10px; color : black; text-decoration : none"href="#"> MEMBANTU</a></li>
                                <li><a style=" padding-left: 10px; color : black; text-decoration : none"href="<?php echo site_url('usercontroller/Logout') ?>"> KELUAR</a></li>
                            </ul>
                        </div>
                    </div>
                  </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Welcome/searching') ?>">Cari</a>
                </li>                 
            </ul>
        </div>
    </nav>
  <div class="Grid__Column-sc-1fzylq4-1 bRZDHl">
  <div class="Grid__Row-sc-1fzylq4-0 ProfilePage__AuthHeader-sc-1uf5gbj-1 kbJajj">
    <div class="Grid__Column-sc-1fzylq4-1 bRZDHl">
      <h1 style="display:inline-block;vertical-align:middle">
        <span>Profil</span>
      </h1>
      <button style="display:inline-block;vertical-align:middle;float:right" class="Button-sc-1bt8qxf-0 TextButton-sc-1g53exa-0 cOoPS">
        <span>Keluar</span>
      </button>
    </div>
  </div>
  <div class="Grid__Row-sc-1fzylq4-0 eEgjNv">
    <div class="plan-column Grid__Column-sc-1fzylq4-1 zuRPr">
      <div class="ProfilePage__OutlineBox-sc-1uf5gbj-4 lloeIf">
        <div>
          <h4 style="margin-bottom:10px">
            <span>Surel</span>
          </h4>
          <form class="clearfix" action="<?php echo site_url('usercontroller/editemail') ?>" method="post" autocomplete="off">
            <label for="email" class=" u-sr-only">
              <span>Surel</span>
            </label>
            <input type="hidden" class="light Forms__BaseInput-o8xv8b-1 eNDTmO" id="iduser" name="id" value="<?php echo $data[0]['iduser'] ?>">
            <input type="email" class="light Forms__BaseInput-o8xv8b-1 eNDTmO" id="email" name="emil" value="<?php echo $data[0]['email'] ?>">
            <input type="hidden" class="light Forms__BaseInput-o8xv8b-1 eNDTmO" id="password" name="pw" value="<?php echo $data[0]['password'] ?>">
            <button type="submit" id="profile-save" class="Button-sc-1bt8qxf-0 TextButton-sc-1g53exa-0 cOoPS">
              <span><span>Perbarui</span></span>
            </button>
          </form>
        </div>
        <div> 
          <h4 style="margin-bottom:10px">
            <span>Atur Ulang Kata Sandi
            </span>
          </h4>
          <form class="clearfix" action="<?php echo site_url('usercontroller/editemail') ?>" method="post" autocomplete="off">
            <label for="password" class=" u-sr-only">
              <span>Kata Sandi Baru</span>
            </label>
            <input type="hidden" class="light Forms__BaseInput-o8xv8b-1 eNDTmO" id="iduser" name="id" value="<?php echo $data[0]['iduser'] ?>">
            <input type="hidden" class="light Forms__BaseInput-o8xv8b-1 eNDTmO" id="email" name="emil" value="<?php echo $data[0]['email'] ?>">
            <input type="password" class="light Forms__BaseInput-o8xv8b-1 eNDTmO" id="password" name="pw" value="<?php echo $data[0]['password'] ?>">
            <div class="form-actions right">
              <button type="submit" id="password-save" class="Button-sc-1bt8qxf-0 TextButton-sc-1g53exa-0 cOoPS">
                <span><span>Perbarui</span></span>
              </button>
            </div>
          </form>
        </div>
        <div>
          <h4 style="margin-bottom:10px">
            <span>Verifikasikan Akun Tastemade Anda</span>
          </h4>
          <div style="overflow:auto">
            <p><span>Kirim email verifikasi ke alamat email yang terhubung dengan akun Anda.</span></p>
            <button type="submit" id="profile-save" class="Button-sc-1bt8qxf-0 TextButton-sc-1g53exa-0 cOoPS">
              <span style="margin-top:10px">
                <span>Kirim</span>
              </span>
            </button>
            </div>
          </div>
        </div>
      </div>
      <div class="plan-column Grid__Column-sc-1fzylq4-1 zuRPr">
        <div class="ProfilePage__OutlineBox-sc-1uf5gbj-4 lloeIf">
          <h4>
            <span>Dukungan</span>
          </h4>
          <p>
            <span>Hubungi kami di <a href="mailto:support@tastemade.com">support@tastemade.com</a> untuk setiap permasalahan atau pun umpan balik!</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>