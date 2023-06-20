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

    <title>Data Inventaris: Bangunan</title>
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
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFF3E4; margin-bottom: 20px;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="menu_beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu_datainventaris.php">Data Inventaris</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>
                List per Kategori</b>
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
      <a href="menu_tambahinventaris.php"><button type="button" class="btn btn-outline-dark">+Tambah</button></a>
      <br>
        <table class="table table-hover" style="margin-top: 20px;">
          <!-- VARIABEL TABEL -->
          <thead style="color: white; background-color: #1F1D36">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Satuan</th>
              <th scope="col">Tgl Datang</th>
              <th scope="col">Kategori</th>
              <th scope="col">Status</th>
              <th scope="col">Harga Satuan</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <!-- ISI TABEL -->
          <tbody>
          <!-- MENGAMBIL SEMUA DATA DARI TABEL INVENTARIS -->
          <?php
            include 'proses_koneksi.php';
            $nomor = 1;
            $query = mysqli_query($konek, "SELECT * FROM inventaris WHERE kategori = 'bangunan'");
            while($data = mysqli_fetch_array($query))
            {?>
              <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $data['kode_barang'];?></td>
                <td><?php echo $data['nama_barang'];?></td>
                <td><?php echo $data['jumlah'];?></td>
                <td><?php echo $data['satuan'];?></td>
                <td><?php echo $data['tgl_datang'];?></td>
                <td><?php echo $data['kategori'];?></td>
                <td><?php echo $data['status_barang'];?></td>
                <td><?php echo "Rp "; echo $data['harga'];?></td>
                <td><?php echo "Rp "; echo $data['totalinventaris'] = $data['harga']*$data['jumlah'];?></td>
                <td>
                  <!-- TOMBOL EDIT -->
                  <a href=menu_edit.php?no=<?php echo $data['no'];?>><button type="button" class="btn btn-outline-dark">Edit</button></a>
                  <!-- TOMBOL HAPUS (AKAN MEMUNCULKAN POP UP KONFIRMASI) -->
                  <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalHapus">
                    Hapus
                  </button>
                  <!-- MODAL (POP UP) -->
                  <div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Yakin ingin menghapus data yang dipilih?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Batal</button>
                          <a href=proses_hapus.php?no=<?php echo $data['no'];?>><button type="button" class="btn btn-primary" style="color: white; background-color: #1F1D36;">Hapus</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <?php $nomor++; ?>
            <?php }
            ?>
              </tr>
          </tbody>
        </table>
    </div>
      <!-- FOOTER -->
       <nav class="navbar navbar-dark" style="background-color: #1F1D36;">
        <div class="container-fluid">
          <span class="navbar-brand mx-auto text-center mb-0 a">Al Jauzi A 123200106</span><br>
        </div>
      </nav>
  </body>
</html>