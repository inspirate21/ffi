<?php
require "config.php";

session_start();


//tangkap data dari form login
$Username = $_GET['Username'];
$Password = $_GET['Password'];

$query ="select * from user where Username='$Username' and Password='$Password'";
$admin ="select * from admin where useradmin='$Username' and password='$Password'";

$query2 = mysql_query("$query");
$admin2 = mysql_query("$admin");

if (mysql_num_rows($query2) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['Username'] = $Username;
	
	//redirect ke halaman member
	header('location:home.php');}
	
	

else if(mysql_num_rows($admin2) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['Username'] = $Username;
	
	//redirect ke halaman member
	header('location:homeA.php');
} 


else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
?>