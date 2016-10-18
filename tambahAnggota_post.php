<?php
include "config.php"; //memanggil file connect.php supaya terkoneksi dengan database

//mengambil data isian dari textfield yang bersesuaian dan menyimpannya dalam variabel
$Nama = $_POST['Nama'];
$Jabatan = $_POST['Jabatan'];
$Email = $_POST['Email'];
$HP = $_POST['HP'];
$Tempat_lahir = $_POST['Tempat_lahir'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];

		$queriku = mysql_query("insert into keanggotaan (Nama, Jabatan, Email, HP, Tempat_lahir, Tanggal_lahir) values('$Nama', '$Jabatan', '$Email', '$HP', '$Tempat_lahir', '$Tanggal_lahir')") or die(mysql_error());;
		if ($queriku == TRUE)
			{
				header('location:keanggotaanA.php');
			}

?>
