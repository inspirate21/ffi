<?php
include "connect.php";  //memanggil file connect.php supaya terkoneksi dengan database

if(!empty(($_GET['nama'])&&($_GET['email'])&&($_GET['hp'])&&($_GET['pesan']))){
$nama = $_GET['nama'];
$email = $_GET['email'];
$hp = $_GET['hp'];
$pesan = $_GET['pesan'];

$insert_pesan ="insert into inbox (id, nama, email, hp, pesan) values ('','$nama', '$email', '$hp', '$pesan')";
$query = mysql_query("$insert_pesan") or die(mysql_error());

if ($query) {
	header('location:contact.php?succes=4');
}
}
else {
header('location:contact.php?succes=3');}

?>