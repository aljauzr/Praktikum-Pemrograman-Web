<?php
	include 'proses_koneksi.php';

	$no		= $_POST['no'];
	$nama	= $_POST['nama'];
	$nim	= $_POST['nim'];
	$nilai	= $_POST['nilai'];

	$query 	= mysqli_query($konek, "UPDATE data_nilai SET nama='$nama', nim='$nim', nilai='$nilai' WHERE no='$no'");

	if($query)
	{
		header("location:menu_home.php");
	}
	else
	{
		echo "Data gagal diubah.";
	}