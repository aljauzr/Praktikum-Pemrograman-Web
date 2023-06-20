<!doctype html>
<html lang="en">

  <head>
    <!-- BOOTSTRAP STARTER -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>

  <body>
      <!-- NAVIGATION BAR -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="menu_home.php">Input Nilai Mahassiwa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="menu_home.php">Home</a>
              <a class="nav-link" href="menu_inputdata.php">Tambah Data</a>
            </div>
          </div>
          <a class="nav-link" href="menu_login.php" style="float: right">Keluar</a>
        </div>
      </nav>

      <!-- KONTEN -->
      <div class="container-xxl">
      <br>
      <h1>Praktikum Pemrograman Web IF-G</h1>
        <table class="table table-hover">
          <!-- VARIABEL TABEL -->
          <thead class="table-dark">
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Nilai</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <!-- ISI TABEL -->
          <tbody>
          <?php
            //MENGAMBIL DATA YANG ADA DI DALAM TABEL DATA NILAI
            include 'proses_koneksi.php';
            $query = mysqli_query($konek, "SELECT * FROM data_nilai");
            while($data = mysqli_fetch_array($query))
            {?>
              <tr>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['nim'];?></td>
                <td><?php echo $data['nilai'];?></td>
                <td>
                  <a href=menu_edit.php?no=<?php echo $data['no'];?>><button type="button" class="btn btn-outline-dark">Edit</button></a>
                  <a href=proses_hapus.php?no=<?php echo $data['no'];?>><button type="button" class="btn btn-outline-dark">Hapus</button></a>
                </td>
            <?php }
            ?>
              </tr>
          </tbody>
        </table>
      </div>
  </body>

</html>