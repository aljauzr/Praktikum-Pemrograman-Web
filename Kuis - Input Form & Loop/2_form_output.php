<?php
    $nim = $_POST ['nim'];
    $nama = $_POST ['nama'];
    $tempat = $_POST ['tempat'];
    $tanggal = $_POST ['tanggal'];
    $alamat = $_POST ['alamat'];

    if(isset($_POST['kirim'])){ //deklarasi variabel jenis kelamin
        if(!empty($_POST['jk'])) {
            $jk=$_POST['jk'];
            }
        }

    $agama = $_POST ['agama'];

    if(isset($_POST['kirim'])){ //deklarasi variabel susah kuis
        if(!empty($_POST['susah'])) {
            $susah=$_POST['susah'];
            }
        }
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="kuis.css">
        <title>123200106_Al Jauzi A</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
    
    <div class="header">
      <div class="header-kuis"><b>Kuis</b></div>
      <div class="header-list">
        <ul>
          <li><a href="1_home.php">Home</a></li>
          <li><b><a href="2_form.php">Form</a></b></li>
          <li><a href="3_loop.php">Perulangan</a></li>
        </ul>
      </div>
    </div>

    <div class="main">
        <div class="judul">
            <h1>Biodata Mahasiswa</h1>
            <form method="post" action="form_output.php">
                <table>
                    <tr>
                        <td class="form">NIM</td>
                        <td> </td>
                        <td class="form">: <?php echo $nim; ?></td>
                    </tr>
                    <tr>
                        <td class="form">Nama</td>
                        <td> </td>
                        <td class="form">: <?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td class="form">Tempat dan Tanggal Lahir</td>
                        <td> </td>
                        <td class="form">: <?php echo $tempat; echo ", "; echo $tanggal; ?></td>
                    </tr>
                    <tr>
                        <td class="form">Alamat</td>
                        <td> </td>
                        <td class="form">: <?php echo $nim; ?></td>
                    </tr>
                    <tr>
                        <td class="form">Jenis Kelamin</td>
                        <td> </td>
                        <td class="form">: <?php echo $jk; ?></td>
                    </tr>
                    <tr>
                        <td class="form">Agama</td>
                        <td> </td>
                        <td class="form">: <?php echo $agama; ?></td>
                    </tr>
                    <tr>
                        <td class="form">Kuisnya Susah?</td>
                        <td> </td>
                        <td class="form">: <?php echo $susah; ?></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </div>

    <div class="footer">
        <p>© 2021</p>
    </div>
    </body>
</html>