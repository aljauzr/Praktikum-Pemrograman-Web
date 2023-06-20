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
          <li><a href="2_form.php">Form</a></li>
          <li><b><a href="3_loop.php">Perulangan</a></b></li>
        </ul>
      </div>
    </div>

    <div class="main">
        <div class="judul">
            <h1>Perulangan</h1>
            <?php
              $x = 5;

              echo "Anak ayam Udin ada: $x <br>";
              while($x >= 1) {
                echo "<b> Anak ayam turun $x </b> <br>";
                $x--;
                echo "Mati satu tinggal $x <br>";
              }
            ?>
        </div>
    </div>
    </div>

    <div class="footer">
        <p>© 2021</p>
    </div>
    </body>
</html>