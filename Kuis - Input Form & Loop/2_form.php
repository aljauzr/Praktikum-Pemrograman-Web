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
            <h1>Form Biodata Mahasiswa</h1>
            <form method="POST" action="2_form_output.php">
                <table>
                    <tr>
                        <td class="form">NIM</td>
                        <td></td>
                        <td><input type="text" name="nim" class="form-kotak"></td>
                    </tr>
                    <tr>
                        <td class="form">Nama</td>
                        <td style="padding-left: 200px;"></td>
                        <td><input type="text" name="nama" class="form-kotak"></td>
                    </tr>
                    <tr>
                        <td class="form">Tempat dan Tanggal Lahir</td>
                        <td></td>
                        <td><input type="text" name="tempat" class="form-tempat"><input type="date" name="tanggal" class="form-tanggal"></td>
                    </tr>
                    <tr>
                        <td class="form">Alamat</td>
                        <td></td>
                        <td><textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td class="form">Jenis Kelamin</td>
                        <td></td>
                        <td class="jeniskel"><input type="radio" name="jk" value="Laki-laki">Laki-laki<input type="radio" name="jk" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td class="form">Agama</td>
                        <td></td>
                        <td>
                         <select class="form-agama" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="form">Kuisnya Susah?</td>
                        <td></td>
                        <td class="radio"><input type="radio" name="susah" value="Ya, soalnya belum ngerti pake bootstrap">Ya<input type="radio" name="susah" value="Tidak">Tidak</td>
                    </tr>
                    <tr>
                        <td><input class="supmit" type="submit" name="kirim"></td>
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