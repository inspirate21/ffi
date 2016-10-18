<?php 
include('config.php');

$id = $_GET['ID_file'];

$query = mysql_query("delete from notulensi_rapat where ID_file='$id'") or die(mysql_error());

if ($query) {
	header('location:notulensia.php?succes=4');
}
?>