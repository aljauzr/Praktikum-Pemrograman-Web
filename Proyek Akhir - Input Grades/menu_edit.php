<!doctype html>
<html lang="en">

  <head>
    <!-- BOOTSTRAP STARTER -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
      <!-- NAVIGATION BAR -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Input Nilai Mahassiwa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="menu_home.php">Home</a>
              <a class="nav-link" href="menu_inputdata.php">Tambah Data</a>
              <a class="nav-link active" aria-current="page" href="menu_inputdata.php">Ubah Data</a>
            </div>
          </div>
          <a class="nav-link" href="#" style="float: right">Keluar</a>
        </div>
      </nav>

      <!-- MENGAMBIL DATA YANG INGIN DIUBAH -->
      <?php
        include 'proses_koneksi.php';
        $no = $_GET['no'];

        $data = mysqli_query($konek, "SELECT * FROM data_nilai WHERE no = '$no'");
        while($hasil = mysqli_fetch_array($data))
      {?>

      <!-- KONTEN -->
      <div class="container-xxl">
        <br>
        <h1>Ubah Data</h1>

        <!-- KONTEN EDIT DATA -->  
        <form method="POST" action="proses_edit.php">
          <table>
            <tr>
              <td>Nama</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama"
                value="<?php echo $hasil['nama'];?>">
                </div>
              </td>
            </tr>
            <input type="hidden" name="no" value="<?php echo $hasil['no'];?>">
            <tr>
              <td>NIM</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nim"
                value="<?php echo $hasil['nim'];?>">
                </div>
              </td>
            </tr>
            <tr>
              <td>Nilai</td>
              <td>
                <select class="form-select" aria-label="Default select example" name="nilai" value="<?php echo $hasil['nilai'];?>">
                <option selected>-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <br>
                <input class="btn btn-dark" type="submit" value="Ubah Data">
                <input class="btn btn-outline-dark" type="reset" value="Reset">
              </td>
            </tr>
          </table>
        </form>
        <?php } ?>
      </div>
  </body>
</html>