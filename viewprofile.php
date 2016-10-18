<?php 
include 'connect.php';
include 'cek_login.php';
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Coal Investment Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Prosto+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />



<!--slider-->
<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src='js/jquery.min.login.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/camera.min.js'></script> 

<!----- theme-style ------>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!----- //theme-style ------>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!---script--->


<script src="js/menu_jquery.js"></script>
<!---script--->
<!---- animated-css ---->

		<script>
			 new WOW().init();
		</script>
<!---- animated-css ---->		
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
    <style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif}
.style2 {font-family: "Times New Roman", Times, serif; font-weight: bold; }
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}
body {
	background-color: #000000;
}
-->
    </style>
</head>
<body>
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="indexM.php"><img src="images/nci.jpg" alt=""></a></h1>
		</div>
		
		

<!-- <div class="search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div> -->
<div class="clear"></div>
	</div>
</div>
</div>
<div class="slider_bg">
<div class="wrap">
<div class="slider">
	<ul class="nav">
		<li><a href="indexM.php">Home</a></li>
		<li><a href="batubaraM.php">Why</a></li>		
		<li><a href="caraM.php">Step</a></li>
		
		<li><a href="aboutM.php">About</a></li>
		<li><a href="contactM.php">Contact</a></li>
		<div class="clear"></div>
	</ul>
</div>
</div>
</div>
<div class="main_bg">
<div class="wrapviewprofile">
<div class="main_viewprofile">


		
        
         
            	

<?php 
	$Username=$_SESSION['Username'];
	$query = mysql_query("select * from identitas_rinci where Username='$Username'");
	
	while ($data = mysql_fetch_array($query)) {
	?>
    	



			  
<div id="body_div">
 <td align=""><div class="body_right_viewprofile">             
                      
        <form name="myform" action="edit.php" id="myform" method="post" enctype="multipart/form-data">
          
              <h4>Profil Saya </h4>
                <div class="form_div">
              
                  <div>
                  
                  
                  
                    <table class="register">
                    
                    
                    <tr>
    <td align="left" valign="top" width="25%"><p>Username </p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"><h2><?php echo $data['Username']; ?></h2></td>
  </tr> 
  
   <tr>
    <td align="left" valign="top" width="25%"><p>Email </p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"> <h2><?php echo $data['Email']; ?></h2></td>
  </tr>           
  <tr> 
    

                    </table>
                  </div>
                
                  <div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px" class="register">
                    <tr>
    <td align="left" valign="top" width="25%"><p>No KTP</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"> <h2><?php echo $data['No_KTP']; ?></h2></td>
  </tr>
                     <tr>
    <td align="left" valign="top" width="25%"><p>Nama Lengkap</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"> <h2><?php echo $data['Nama_Lengkap']; ?></h2></td>
  </tr>
      
     
                    
                    <tr>
    <td align="left" valign="top" width="25%"><p>Tempat Lahir</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"><h2><?php echo $data['Tempat_Lahir']; ?></h2></td>
  </tr>               
                  <tr>
    <td align="left" valign="top" width="25%"><p>Tanggal Lahir</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"> <h2><?php $Tgl_Lahir = $data['Tgl_Lahir']; 
					  list($year, $month, $day) = explode('-', $Tgl_Lahir); 
							if($month==1)$month='Januari';
							else if($month==2)$month='Februari';
							else if($month==3)$month='Maret';
							else if($month==4)$month='April';
							else if($month==5)$month='Mei';
							else if($month==6)$month='Juni';
							else if($month==7)$month='Juli';
							else if($month==8)$month='Agustus';
							else if($month==9)$month='September';
							else if($month==10)$month='Oktober';
							else if($month==11)$month='November';
							else $month='Desember';
							$iddate = $day.' '.$month.' '.$year; 
					  
					  
					  echo $iddate; ?></h2></td>
  </tr>           
                 <tr>
    <td align="left" valign="top" width="25%"><p>Jenis Kelamin</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"> <h2><?php echo $data['Jenis_Kelamin']; ?></h2></td>
  </tr>   
				<tr>
    <td align="left" valign="top" width="25%"><p>Alamat Lengkap</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"> <h2><?php echo $data['Alamat']; ?></h2></td>
  </tr>   
				<tr>
    <td align="left" valign="top" width="25%"><p>No Hp</p></td>
	<td align="center" valign="top" width="5%">:</td>
	<td align="left" valign="middle" width="70%"><h2><?php echo $data['No_HP']; ?></h2>                </td>
	</tr>
                 
                  <div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px" class="register">
                    
                   
           <tr>
    <td align="left" valign="top" width="25%"><p>Bank</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"><h2><?php echo $data['Bank']; ?></h2>
</td>
  </tr>
  
   <tr>
    <td align="left" valign="top" width="25%"><p>No Rekening</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"><h2><?php echo $data['No_Rekening']; ?> </h2>   
</td>
  </tr>
  
  <tr>
    <td align="left" valign="top" width="25%"><p>Atas Nama</p></td>
    <td align="center" valign="top" width="5%">:</td>
    <td align="left" valign="middle" width="70%"><h2><?php echo $data['Nama_Rekening']; ?></h2>    
</td>
                      <tr >
                        <td width="25%" align="center" colspan="3" ><font color="#F00" size="2px"> Klik Tombol "UBAH DATA", Jika Ingin Merubah Data Anda</font></td>
                      </tr>

  </tr>

                      <tr>
                        <td width="25%" align="center" colspan="3"><br /><a href="edit.php">
                          <input type="submit" name="button" id="button" value="UBAH DATA" class="sub_btn2" />
                          </a></td>
						  
                      </tr>
                    </table>
                  </div>
                </div>
              
            
          
        </form>
                </table>
	
	

       </div>
</div>	
</div>

    <?php 
	} 
	?>


<div class="footer-bg">	
<div class="wrap">
<div class="footer">
  <div class="box1">
	<h4>What You Do</h4>
	<p>Bacalah Aturan dan Tata Cara Sebelum Berinvestasi Disini</p>
	<p>Percayalah Bahwa Bisinis Investasi Ini Dijamin Menguntungkan</p>
  </div>
   <div class="box1">
	<h4>Hot News</h4>
	<nav>
		<ul>
			<li><a href="">Batubara Kini Ada Ekstraknya Loh</a></li>
			<li><a href="">Peminat Investasi Batubara Tiap Tahun Selalu Meningkat</a></li>
			<li><a href="">Investasi Batubara Selalu Menguntungkan</a></li>
			<li><a href="">Banyak Artis Top Indonesia Yang Berinvestasi Disini</a></li>
	    </ul>
	</nav>
	</div>
	<div class="box1">
		<h4>Contact us</h4>
		<div class="social-icons">
	   		  	<ul>
			      <li class="facebook"><a href="#" target="_blank"> </a></li>
			      <li class="twitter"><a href="#" target="_blank"> </a></li>
			      <li class="rss"><a href="#" target="_blank"> </a></li>
			      <li class="contact"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
   	    </div>
	</div>
	<div class="clear"></div>			
</div>
</div>
</div>
<div class="ftr-bg">
	<div class="wrap">
		<div class="footer1">
		<div class="logo">
			<h1><a href="indexM.php"><img src="images/nci.jpg" alt=""></a></h1>
		</div>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by PT. Technopreneur</p>
		</div>
			<div class="clear"></div>	
	</div>
	</div>
</div>
</body>
</html>