<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Forum For Indonesia Chapter Bogor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Prosto+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/timeline.css">



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
<!---- animated-css 

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

-->
    </style>
</head>
<body>
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="home.php"><img src="images/logo2.png" alt=""></a></h1>
		</div>

<div class="signinmember">
			<ul>
				 <li class="b"><a href="logout.php">Logout</a></li>
				<div class="clear"> </div>	
			</ul>
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
		
        <li><a href="home.php">Beranda</a></li>
		<li><a href="keanggotaan.php">Keanggotaan</a></li>		
		<li><a href="notulensi.php">Notulensi Rapat</a></li>
		<li><a href="about.php">Laporan Keuangan</a></li>		
		<li class="active"><a href="time.php">Jadwal Kegiatan</a></li>
		
        <div class="clear"></div>
	</ul>
	<div class="fluid_container">
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h3>Timeline</h3>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        


<?php
		include 'config.php';  //memanggil file config.php supaya terkoneksi dengan database
		$work=20;
       	$query = mysql_query("select * from timeline");   //melakukan query pada database
	    while ( $data = mysql_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>

<ul id='timeline'>
  <li class= <?php echo $work; ?> >
    <input class='radio' id= <?php echo $work; ?> name='works' type='radio' checked>
    <div class="relative">
      <label for=<?php echo $work; ?>>&nbsp;&nbsp;<?php echo $data['Nama_acara'];?></label>
      <span class='date'><?php echo $data['Tanggal_acara'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

      <span class='circle'></span>
    </div>

    <div class='content'>

      <p>
        &nbsp;&nbsp;Dilaksanakan pada pukul <?php echo $data['Waktu'];?> di daerah <?php echo $data['Tempat'];?> yang dilaksanakan oleh divisi <?php echo $data['Divisi'];?>
      </p>
    </div>
  </li>
	 	</ul>
         
 	
       <?php $work--;
						} 
						?>      

	</div>

</div>
</div>
</div>


<div class="footer-bg">	
<div class="wrap">
<div class="footer">
  <div class="box1">
	<h4>Forum For Indonesia</h4>
    <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forum For Indonesia (FFI) merupakan suatu oraganisasi yang bergerak di bidang sosial. FFI pertama yaitu FFI Chapter Yogyakarta, sedangkan FFI Chapter Bogor baru berdiri di Bogor selama 3 tahun dan mayoritas anggotanya berasal dari Institut Pertanian Bogor. Selama 3 tahun, FFI melakukan kegiatan pengembangan desa di desa Cihideung Udik Kecamatan Ciampea, Kabupaten Bogor.</p>
    
  </div>
   <div class="box1">
	<h4>Divisi</h4>
	<nav>
		<ul>
			<li><a href="">- Agriculture and Environment (AE)</a></li>
            <p></p>
			<li><a href="">- Business and Entrepreneur (BE)</a></li>            <p></p>
			<li><a href="">- Health and Education (HE)</a></li>
            <p></p>
			<li><a href="">- Public Relation (PR)</a></li>
            <p></p>
   			<li><a href="">- Human Resource Development (HRD)</a></li>
            <p></p>
	    </ul>
	</nav>
	</div>
	<div class="box1">
		<h4>Contact us</h4>
		<div class="social-icons">
	   		  	<ul>
			      <li class="facebook"><a href="index.php"> </a></li>
			      <li class="twitter"><a href="www.twitter.com" target="_blank"> </a></li>
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
			<h1><a href="home.php"><img src="images/logo2.png" alt=""></a></h1>
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