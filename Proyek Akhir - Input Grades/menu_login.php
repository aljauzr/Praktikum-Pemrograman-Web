<?php
	include 'proses_koneksi.php';
	 
	if (isset($_POST['submit']))
	{
	    $username 	= $_POST['username'];
	    $password 	= $_POST['password'];
	 
	    $sql		= "SELECT * FROM data_user WHERE username='$username' AND password='$password'";
	    $result 	= mysqli_query($konek, $sql); /*VARIABEL BUAT NGAMBIL DATABASE ($KONEK yang ada di proses_koneksi.php) + PERINTAH QUERY YANG NGECEK UNAME $ PASS YG DIINPUTIN PAS LOGIN ADA ATAU NGGA DI DATABASE*/

	    if ($result->num_rows > 0) //KALO UNAME & PASS NYA ADA DI DATABASE
	    {
	        /*$row 	= mysqli_fetch_assoc($result); //row = ngambil data dari result tadi (kayaknya gitu sih)
	        $_SESSION['username'] = $row['username']; //kurang tau (It is used to set and get session variable values.)*/
	        header("Location: menu_home.php"); //langsung ngarahin ke menu home
	    }
	    else //KALO UNAME $ PASS NYA SALAH (GAADA DI DATABASE)
	    {
	        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
	    }
	}
?>

<!doctype html>
<html lang="en">

  <head>
    <!-- BOOTSTRAP STARTER -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>

  <body>
      <!-- NAVIGATION BAR -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Input Nilai Mahasiswa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="#">Home</a>
              <a class="nav-link" href="#">Tambah Data</a>
            </div>
          </div>
        </div>
      </nav>

      <!-- KONTEN -->
      <div class="container-xxl">
        <br>
        <h1>Login</h1>
        <!-- KONTEN LOGIN -->
        <form method="POST" action="#">
          <table>
            <tr>
              <td>Username</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="username">
                </div>
              </td>
            </tr>
            <tr>
              <td>Password</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="password" class="form-control" aria-describedby="addon-wrapping" name="password">
                </div>
              </td>
            </tr>
            <tr>
              <td>
              	<br>
                <input class="btn btn-dark" type="submit" name="submit" value="Login">
                <input class="btn btn-outline-dark" type="reset" value="Reset">
              </td>
            </tr>
          </table>
        </form>
      </div>
  </body>
</html>