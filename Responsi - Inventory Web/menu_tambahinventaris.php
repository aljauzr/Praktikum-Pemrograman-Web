<?php
  session_start();

  if (!isset($_SESSION["login"]))
  {
    header("Location: menu_login.php");
    exit;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- JUDUL -->
    <nav class="navbar navbar-dark" style="background-color: #1F1D36;">
      <div class="container-fluid">
        <span class="navbar-brand mx-auto text-center mb-0 h1"><b>DAFTAR INVENTARIS BARANG<br>KANTOR SERBA ADA</b></span><br>
      </div>
    </nav>
    <!-- NAVBAR MENU --> 
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFF3E4;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="menu_beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="menu_datainventaris.php"><b>Data Inventaris</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                List per Kategori
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="menu_kategori_bangunan.php">Bangunan</a></li>
                <li><a class="dropdown-item" href="menu_kategori_kendaraan.php">Kendaraan</a></li>
                <li><a class="dropdown-item" href="menu_kategori_atk.php">Alat Tulis Kantor</a></li>
                <li><a class="dropdown-item" href="menu_kategori_elektronik.php">Elektronik</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- TOMBOL LOGOUT -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalLogout" style="color: white; background-color: #1F1D36; float:right;">Keluar
        </button>

        <!-- MODAL (POP UP) -->
        <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Anda yakin ingin keluar?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Tidak</button>
                <a href="proses_logout.php"><button type="button" class="btn btn-primary" style="color: white; background-color: #1F1D36;">Ya</button></a>
              </div>
            </div>
          </div>
        </div>
        <!-- MODAL (POP UP) -->
      </div>
    </nav>
    </nav>
    <!-- TABEL DATA -->
    <div class="container-xxl">
    <center>
        <br>
        <nav class="navbar navbar-dark" style="background-color: #1F1D36; margin-bottom: 25px;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 a">Tambah Data Inventaris</span>
          </div>
        </nav>
        <!-- KONTEN INPUT DATA -->
        <form method="POST" action="proses_input.php">
          <table>
            <tr>
              <td>Kode Barang</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="kode_barang">
                </div>
              </td>
            </tr>
            <tr>
              <td>Nama Barang</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama_barang">
                </div>
              </td>
            </tr>
            <tr>
              <td>Jumlah</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="jumlah">
                </div>
              </td>
            </tr>
            <tr>
              <td>Satuan</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="satuan">
                </div>
              </td>
            </tr>
            <tr>
              <td>Tanggal Datang</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="date" class="form-control" aria-describedby="addon-wrapping" name="tgl_datang">
                </div>
              </td>
            </tr>
            <tr>
              <td>Kategori</td><td></td>
              <td>
                <select class="form-select" aria-label="Default select example" name="kategori">
                <option selected>-</option>
                <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                <option value="Bangunan">Bangunan</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Kendaraan">Kendaraan</option>
                </select>
              </td>
            </tr>
           <tr>
              <td>Status</td><td></td>
              <td>
                <input type="radio" name="status_barang" value="Baik">  Baik
                <input type="radio" name="status_barang" value="Perawatan"> Perawatan
                <input type="radio" name="status_barang" value="Rusak"> Rusak
              </td>
            </tr>
            <tr>
              <td>Harga Satuan</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="harga">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <br>
                <input class="btn btn-dark" type="submit" name="submit" value="Simpan" style="color: white; background-color: #1F1D36;">
                <input class="btn btn-outline-dark" type="reset" value="Reset">
              </td>
            </tr>
          </table>
        </form>
      </center>
      </div>
      <!-- FOOTER -->
      <nav class="navbar navbar-dark" style="background-color: #1F1D36; margin-top: 50px;">
          <div class="container-fluid">
            <span class="navbar-brand mx-auto text-center mb-0 a">Al Jauzi A 123200106</span><br>
          </div>
      </nav>
  </body>
</html>