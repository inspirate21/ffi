<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from timeline where TimelineID='$id'") or die(mysql_error());

if ($query) {
	header('location:timeA.php?succes=4');
}
?>