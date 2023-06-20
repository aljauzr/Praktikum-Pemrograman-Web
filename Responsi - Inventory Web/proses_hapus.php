<?php
	include 'proses_koneksi.php';
	$no	= $_GET['no'];

	$query 	= mysqli_query($konek, "DELETE FROM inventaris WHERE no = '$no'");

	if($query)
	{
		header("location:menu_datainventaris.php");
	}
	else
	{
		echo "Data gagal dihapus.";
	}
?>