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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Prosto+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


<!--slider-->
<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/camera.min.js'></script> 
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
.style4 {font-family: Georgia, "Times New Roman", Times, serif}
.style5 {font-weight: bold; font-size: xx-large;}
.style6 {font-weight: bold; font-size: x-large;}
.style7 {font-size: large}
-->
    </style>
</head>
<body>
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="homeA.php"><img src="images/logo2.png" alt=""></a></h1>
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
		<li><a href="homeA.php">Beranda</a></li>
		<li><a href="keanggotaanA.php">Keanggotaan</a></li>		
		<li><a href="notulensiA.php">Notulensi Rapat</a></li>
		<li><a href="aboutA.php">Laporan Keuangan</a></li>		
		<li class="active"><a href="timeA.php">Jadwal Kegiatan</a></li>
		<div class="clear"></div>
	</ul>
</div>
</div>
</div>

<div class="main_bg">
<div class="wrap">
<div class="main">

		<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        
        <div id="body_div">
 <td align=""><div class="body_right_caloninvestor">
			  <h4>Daftar Timeline Forum for Indonesia</h4>
              
              <p align="right"><a href="tambahTL.php">Tambah Timeline</a></p>

              
		<!-- <div class="view_div">
                  <ul>
                                                                   
                 </ul>
         </div> -->
                
                
<div class="tabpad news-box news">
<div class="deposit_info_details">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="lbox_contentbg">
		
		
		<p>&nbsp;</p>
			
          <tr class="row1" onMouseOver="mouse_event(this, 'listrow_bg');" onMouseOut="mouse_event(this, 'row1');">
                      <td width="1%" align="center">No</td>
				<td width="10%" align="center">Nama Acara</td>
				<td width="5%" align="center">Tanggal </td>
				<td width="2%" align="center">Waktu</td>
				<td width="5%" align="center">Tempat </td>
				<td width="10%" align="center">Divisi</td>
				<td width="10%" align="center">Edit</td>
				<td width="10%" align="center">Delete</td>
				
					  
          </tr>

		  
		  
		  <?php
		  
		  if (!empty($_GET['succes'])) {
	if ($_GET['succes'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['succes'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['succes'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['succes'] == 4) {
		echo '<h3><span><p>Timeline Berhasil Dihapus<p>&nbsp;</p></p></span></h3>';
	}
}

		include 'config.php';  //memanggil file config.php supaya terkoneksi dengan database
       	$No=1;
		$query = mysql_query("select * from timeline");   //melakukan query pada database
	    while ( $data = mysql_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>
				
				
		<tr class="list1" onMouseOver="mouse_event(this,'row_hover');" onMouseOut="mouse_event(this,'list1');">
        <td align="center"><?php echo $No;?></td>   
		<td><?php echo $data['Nama_acara'];?></td>   
		<td align="center"><?php echo $data['Tanggal_acara'];?></td>
		<td align="center"><?php echo $data['Waktu'];?></td>
		<td align="center"><?php echo $data['Tempat'];?></td>
		<td align="center"><?php echo $data['Divisi'];?></td>
		<td align="center"><a href="edit.php?id=<?php echo $data['TimelineID']?>">
        <input type="submit" name="button" id="button" value="Edit" class="sub_btn" />
					</a></td>

					
		<td align="center"><a href="deleteTL.php?id=<?php echo $data['TimelineID']?>">
        <input type="submit" name="button" id="button" value="Hapus" class="sub_btn" />
					</a></td>
					
					
                        </tr>
					
                
<?php 
		$No++;
	} 
	?>			
          
		  
          
       </table>
   <br />
   <br />      
                </table>
  </td>
        </tr>
      </table>
	  
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
			<li><a href="aeA.php">- Agriculture and Environment (AE)</a></li>
            <p></p>
			<li><a href="beA.php">- Business and Entrepreneur (BE)</a></li>            <p></p>
			<li><a href="heA.php">- Health and Education (HE)</a></li>
            <p></p>
			<li><a href="prA.php">- Public Relation (PR)</a></li>
            <p></p>
   			<li><a href="hrdA.php">- Human Resource Development (HRD)</a></li>
            <p></p>
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
			<h1><a href="homeA.php"><img src="images/logo2.png" alt=""></a></h1>
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