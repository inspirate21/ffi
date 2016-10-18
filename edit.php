<?php 
include 'config.php';
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>	
		<title>Coal Investment Website</title>
		<link href="css/edit.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' ' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>Edit Timeline</h2>
								<a href="timeA.php"><img src="images/close.png" alt=""></a>
						 	 </div>
			  <?php 
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Password Konfirmasi yang Anda Masukan Tidak Sesuai</h3> ';
	} else if ($_GET['error'] == 2) {
		echo '<h3><p>Password Telah Berhasil Diganti</p></h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h5>Ubah Data Gagal</h5>';
	} else if ($_GET['error'] == 4) {
		echo ' <h3 style="color:red; font-weight:900; valign:middle; margin-top:5%;"> Password yang Anda Masukkan Tidak Sesuai.</h3>';
	}
}
?>			


			
							 <?php 

$id = $_GET['id'];

$query = mysql_query("select * from timeline where TimelineID = '$id' ") or die(mysql_error());

$data = mysql_fetch_array($query);
?>
							 
							 
						  	<form name="update_data" action="update.php?id=<?php echo $data['TimelineID']?>" method="POST" id="update_data">
								<p>

								  
								  <h4> <strong> <b> Nama Acara	: </b> </strong></h4>
								  <input type="text" id="Nama_acara" name="Nama_acara" value="<?php echo $data['Nama_acara'];  ?>"/> 
								  
								  <h4> <strong> <b> Tanggal Acara	: </b> </strong></h4>
								  <input type="text" id="Tanggal_acara" name="Tanggal_acara" value="<?php echo $data['Tanggal_acara'];  ?>"/>
								  
								  <h4> <strong> <b> Waktu	: </b> </strong></h4>
								  <input type="text" id="Waktu" name="Waktu" value="<?php echo $data['Waktu'];  ?>"/>
								  
								  <h4> <strong> <b> Tempat	: </b> </strong></h4>
								  <input type="text" id="Tempat" name="Tempat" value="<?php echo $data['Tempat'];  ?>"/>
								  
								  <h4> <strong> <b> Divisi	: </b> </strong></h4>
								  <input type="text" id="Divisi" name="Divisi" value="<?php echo $data['Divisi'];  ?>"/>
								  
								  
								  
								  
								  <p>&nbsp; </p>
								  
								  
							  </p>
							  
								
												 
								<div class="submit">
									<input type="submit" name="submit" onclick="myFunction()" value="Simpan" >
								</div>
									<div class="clear"> </div>
								</div>
								
								
											
						  </form>
						  
						  
						 
					</div>
					
											
	
					</div>
			</div>
				<!--//End-login-form-->	
				
			  </div>
	</body>
</html>


