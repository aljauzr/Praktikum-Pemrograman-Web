<?php
	include 'proses_koneksi.php';
	$no		= $_GET['no'];

	$query 	= mysqli_query($konek, "DELETE FROM data_nilai WHERE no = '$no'");

	if($query)
	{
		header("location:menu_home.php");
	}
	else
	{
		echo "Data gagal dihapus.";
	}
?>