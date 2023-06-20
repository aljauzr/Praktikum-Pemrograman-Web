<?php
	include "proses_koneksi.php";

	$nama	= $_POST['nama'];
	$nim	= $_POST['nim'];
	$nilai	= $_POST['nilai'];

	$query 	= mysqli_query($konek, "INSERT INTO data_nilai VALUES ('', '$nama', '$nim', '$nilai')")
	or die(mysqli_error($konek));

	if($query)
	{
		header("location:menu_home.php");
	}
	else
	{
		echo "Data gagal ditambahkan.";
	}
?>