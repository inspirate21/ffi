<?php
include "config.php"; //memanggil file connect.php supaya terkoneksi dengan database

//mengambil data isian dari textfield yang bersesuaian dan menyimpannya dalam variabel
$Nama_acara = $_POST['Nama_acara'];
$Tanggal_acara = $_POST['Tanggal_acara'];
$Waktu = $_POST['Waktu'];
$Tempat = $_POST['Tempat'];
$Divisi = $_POST['Divisi'];

		$queriku = mysql_query("insert into timeline (Nama_acara, Tanggal_acara, Waktu, Tempat, Divisi) values('$Nama_acara','$Tanggal_acara','$Waktu', '$Tempat', '$Divisi')") or die(mysql_error());;
		if ($queriku == TRUE)
			{
				header('location:timeA.php');
			}

?>

