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
<link href="css/css_upload-download.css" rel="stylesheet" type="text/css" media="all" />


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
		
		<li class="active"><a href="aboutA.php">Laporan Keuangan</a></li>		
		<li><a href="timeA.php">Jadwal Kegiatan</a></li>
		<div class="clear"></div>
	</ul>
</div>
</div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="main style4">
<div id="container">
    	<div id="header">
    		<h1>Upload File Laporan Keuangan</h1>
        </div>
        
        <div id="menu">
            
        </div>
        
        <div id="content">
        	<!--<h2>Upload</h2>-->
            <p align="justify">&nbsp;Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.pdf</b> dan besar file (file size) maksimal hanya 1 MB.</p>
            
            <?php
			include('config.php');
			if(isset($_POST['upload'])){
				$allowed_ext	= array('pdf');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$masuk			= $_POST['masuk'];
				$keluar			= $_POST['keluar'];
				$saldo			= $_POST['saldo'];
				
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO keuangan VALUES(NULL, '$nama', '$masuk', '$keluar', '$keluar', '$lokasi')");
						if($in){
						
						echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						//header('location:notulensia.php');
							
						}else{
						echo '<div class="error">ERROR: Gagal upload file!</div>';
						//header('location:notulensia.php');
							
						}
					}else{
					echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					//header('location:notulensia.php');
						
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
					//header('location:notulensia.php');
					
				}
			}
			?>
            
            <p>
            <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
            	<tr>
                	<td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Pemasukan</b></td><td><b>:</b></td><td><input type="text" name="masuk" size="40" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="right"><b>Pengeluaran</b></td><td><b>:</b></td><td><input type="text" name="keluar" size="40" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="right"><b>Saldo Akhir</b></td><td><b>:</b></td><td><input type="text" name="saldo" size="40" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td>
					<td>
					<input type="submit" name="upload" value="Upload" />
					</a></td>
                </tr>
            </table>
            </form>
            </p>
        </div>
    </div>
	
	
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        
        <div id="body_div">
 <td align=""><div class="body_right_caloninvestor">
			  <h4>Daftar Laporan Keuangan</h4>

              
		<!-- <div class="view_div">
                  <ul>
                                                                   
                 </ul>
         </div> -->
                
                
<div class="tabpad news-box news">
<div class="deposit_info_details">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="lbox_contentbg">
		
		
		<p>&nbsp;</p>
			
		<div class="search">
    		<form action='aboutA.php' method="GET">
    			<input type="text" value="" name='qcari'>
    			<input type="submit" value="">
    		</form>
			<p>&nbsp;</p>
		</div>
			
			
			
          <tr class="row1" onMouseOver="mouse_event(this, 'listrow_bg');" onMouseOut="mouse_event(this, 'row1');">
                <td width="1%" align="center">No</td>
				<td width="15%" valign="top" class="hdr1"align="center">Nama File</td>
				<td width="5%" valign="top" class="hdr1"align="center">Pemasukan</td>
				<td width="2%" valign="top" class="hdr1"align="center">Pengeluaran</td>
				<td width="5%" valign="top" class="hdr1"align="center">Saldo Akhir</td>
				<td width="5%" valign="top" class="hdr1" align="center">Download</td>
				<td width="5%" valign="top" class="hdr1" align="center">Hapus</td>
					  
          </tr>

		  
		  
		  <?php
		
       	$search = mysql_query("select * from keuangan");   //melakukan query pada database
		$No=1;
		if(isset($_GET['qcari'])){
		$qcari=$_GET['qcari'];
		$search=mysql_query("select * from keuangan where(Nama_file like '%$qcari%' or Pemasukan like '%$qcari%' or Pengeluaran like '%$qcari%' or Saldo_akhir like '%$qcari%' ) ");
}
	    while ( $data = mysql_fetch_array($search) ) //melooping pada setiap data hasil query
		
		
		{
				?>
				<tr class="list1" onMouseOver="mouse_event(this,'row_hover');" onMouseOut="mouse_event(this,'list1');">
                    <td align="center"><?php echo $No;?></td>   
					<td><?php echo $data['Nama_file'];?></td>   
					<td align="center"><?php echo $data['Pemasukan'];?></td>
					<td align="center"><?php echo $data['Pengeluaran'];?></td>
					<td align="center"><?php echo $data['Saldo_akhir'];?></td>
			
					<td align="center">
					<a href="<?php echo $data['file'];?>">
                          <input type="submit" name="button" id="button" value="Download" class="sub_btn" />
					</a></td>
					
					
					
					<td align="center">
					<a href="delete.php?ID_file=<?php echo $data['ID_file']?>">
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