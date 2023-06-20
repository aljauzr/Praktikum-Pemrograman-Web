<?php 
	session_start();
	include 'proses_koneksi.php';

	if (isset($_SESSION["login"]))
	{
		header("Location: menu_beranda.php");
		exit;
	}

	if (isset($_POST["login"]))
	{
		  $username = $_POST["username"];
	    $password = $_POST["password"];

	    $data   = mysqli_query($konek, "SELECT * FROM petugas WHERE username='$username' AND password='$password'");

	    if ($data->num_rows > 0) //KALO UNAME & PASS NYA ADA DI DATABASE
	    {
	        while($hasil = mysqli_fetch_array($data)) //MENGAMBIL DATA NAMA LENGKAP USER YANG LOGIN
          {
            $_SESSION["nama_lengkap"] = $hasil['nama_lengkap'];
          }
          $_SESSION["login"] = true; //MENYIMPAN SESSION (INGATAN) BAHWA SUDAH LOGIN
	        header("Location: menu_beranda.php");
	        exit;
	    }
	    else
	    {
	        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
	    }
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

    <title>Login</title>
  </head>
  <body>
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- JUDUL -->
    <nav class="navbar navbar-dark" style="background-color: #1F1D36;">
      <div class="container-fluid">
        <span class="navbar-brand mx-auto text-center mb-0 h1"><b>DAFTAR INVENTARIS BARANG<br>KANTOR SERBA ADA</b>
      </div>
    </nav>
    <!-- SUB-JUDUL -->
    <div class="container-xxl">
    <center>
        <br>
        <nav class="navbar navbar-dark" style="background-color: #1F1D36; margin-bottom: 25px;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 a">Login</span>
          </div>
        </nav>
        <!-- KONTEN LOGIN -->
        <form method="POST" action="">
          <table>
            <tr>
              <td>Username</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="username">
                </div>
              </td>
            </tr>
            <tr>
              <td>Password</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="password" class="form-control" aria-describedby="addon-wrapping" name="password">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <br>
                <input class="btn btn-dark" type="submit" name="login" value="Login" style="color: white; background-color: #1F1D36;">
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