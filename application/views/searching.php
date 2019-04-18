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
                    <a class="nav-link" href="<?php echo site_url('Welcome/tv') ?>">TV</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Welcome/masuk') ?>">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Welcome/BuatAkun') ?>">Buat Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Welcome/searching') ?>">Cari</a>
                </li>                 
            </ul>
        </div>
    </nav>
    <div aria-label="submenu" class="SearchMenu" open="">
      <div class="SearchMenuContainer">
        <form class="SearchBarContainer">
          <svg class="SearchBar" style="fill:white">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/vectors.svg#search">
            </use>
          </svg>
          <input type="text" placeholder="Cari Tastemade" value="" class="SearchInput">
          <div class="SearchBar__SearchDropdownContainer-ymoh7-1 eolEnL">
            <div class="SearchDropdown__Container-sc-17ybnq1-0 gmVbUQ">
              <div style="padding-top:40px" class="Grid__Row-sc-1fzylq4-0 eEgjNv">
                <div class="Grid__Column-sc-1fzylq4-1 kNgHOm">
                  <p class="SearchDropdown__ColumnTitle-sc-17ybnq1-1 ghNGHx"><span>Recent Searches</span>
                  </p>
                  <ul class="SearchDropdown__List-sc-17ybnq1-2 WiUVX">
                    <li><span>Tidak Ada Riwayat Pencarian</span></li>
                  </ul>
                </div>
                <div class="Grid__Column-sc-1fzylq4-1 kNgHOm">
                  <p class="SearchDropdown__ColumnTitle-sc-17ybnq1-1 ghNGHx"><span>Penelusuran Ngetren</span></p>
                  <ul class="SearchDropdown__List-sc-17ybnq1-2 WiUVX">
                    <li><a><span>Nasi</span></a></li>
                    <li><a><span>Soto</span></a></li>
                    <li><a><span>Bawang</span></a></li>
                    <li><a><span>Gulai</span></a></li>
                    <li><a><span>Sayap</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>