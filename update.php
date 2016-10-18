<?php
include 'config.php'; 

$id= $_GET['id'];

$Nama_acara = $_POST['Nama_acara'];
$Tanggal_acara = $_POST['Tanggal_acara'];
$Waktu = $_POST['Waktu'];
$Tempat = $_POST['Tempat'];
$Divisi = $_POST['Divisi'];



$query2 =mysql_query("select * from timeline ") or die(mysql_error());


if ($query2) {
	$update_data = mysql_query("update timeline set Nama_acara='$Nama_acara', Tanggal_acara='$Tanggal_acara', Waktu='$Waktu', Tempat='$Tempat', Divisi='$Divisi' where TimelineID='$id' ");
	header('location:timeA.php');
}
	
	else {header('location:edit.php?error=4');}

?>