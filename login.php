<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>	
		<title>Forum For Indonesia Chapter Bogor</title>
		<link href="css/login.css" rel='stylesheet' type='text/css' />
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
					<div class="Login">
							<div class="Login-head">
						    	<h3>FORUM FOR INDONESIA</h3>

									</div>

<?php 
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>
							
							
						<form name="login" action="autentikasi.php" method="GET">
								<div class="ticker">
									<h4>Username</h4>
						  			<input type="text" name="Username" placeholder="Username" required/>
						  			<div class="clear"> </div>
						  		</div>
						  		<div>
						  		<h4>Password</h4>
								<input type="password" name="Password" placeholder="Password" required/>
								  			<div class="clear"> </div>
								</div>

												 
								<div class="submit-button">
									<input type="submit" onclick="myFunction()" value="LOGIN  >" >
								</div>
									<div class="clear"> </div>
								</div>
											
						  </form>
						  
						  <script type="text/javascript">


						  
						  
						  
					</div>
			</div>
				<!--//End-login-form-->	
						
			  </div>
	</body>
</html>


