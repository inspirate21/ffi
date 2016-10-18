<?php 
include 'connect.php';
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
		<h1><a href="indexA.php"><img src="images/nci.jpg" alt=""></a></h1>
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
		<li><a href="indexA.php">Home</a></li>
		<li><a href="batubaraA.php">Why</a></li>		
		<li><a href="caraA.php">Step</a></li>
		
		<li><a href="aboutA.php">About</a></li>		
		<li><a href="contactA.php">Contact</a></li>
		<div class="clear"></div>
	</ul>
</div>
</div>
</div>
<div class="main_bg">
<div class="wrapadminpage">
<div class="main_deposit_list">

	 <table width="25%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        
        
          <td align="left" valign="top">
          
    <div id="body_left">
				
                                
			
			
               
                <div class="cat_hdr">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" ">
                  <tr>
                    <td align="left" valign="top" class="cat_left">&nbsp;</td>
                    <td align="left" valign="top" class="cat_center">Admin Page
                    </td>
                    <td align="left" valign="top" class="cat_right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" align="left" valign="top" class="cat_body"><ul class="withdraw">
              			  
			   <li><a href="adminpage.php">Investor</a> </li>
                      <li><a href="caloninvestor.php">Calon Investor</a> </li>
					  <li><a href="pesanmasuk.php">Pesan Masuk</a> </li>
                       <li class="last"><a href="logout.php">Keluar</a> </li>



              </ul>
            </td>
                  </tr>
                  <tr>
                    <td colspan="3" class="cat_btm"></td>
                </table>
              </div>			
       
            </div></td>

               
 <style type="text/css">
<!--
.style1 {color: #999999}
-->
</style>



<div id="body_div"> 


 <td align=""><div class="body_right_adminpage">
 

			  <h4>Daftar Investor</h4>

              
		 
                   
         
                
                
<div class="tabpad news-box news">
<div class="deposit_info_details">


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="lbox_contentbg">



<p>&nbsp;</p>
<div class="search">
    		<form action='adminpage.php' method="GET">
    			<input type="text" value="" name='qcari'>
    			<input type="submit" value="">
    		</form>
			<p>&nbsp;</p>
		</div> 
		


<!-- <form action='mahasiswa2.php'method="POST">
  <input type='text' value='' name='qcari'>
  <input type='submit' value='Search'>
   
</form> -->
<?php
$search=mysql_query("select * from identitas_rinci where identitas_rinci.Username in (select user.Username from user)");
 
$pola='asc';
$polabaru='asc';
if(isset($_GET['orderby'])){
  $orderby=$_GET['orderby'];
  $pola=$_GET['pola'];
   
  $search=mysql_query("SELECT * FROM  identitas_rinci where identitas_rinci.Username in (select user.Username from user) order by $orderby $pola ");
  if($pola=='asc'){
    $polabaru='desc';
     
  }else{
    $polabaru='asc';
  }
}
?>
		
		
		
		
		
          <tr class="row1" onMouseOver="mouse_event(this, 'listrow_bg');" onMouseOut="mouse_event(this, 'row1');">
                      <td width="5%" valign="top" class="hdr1" align="center">No</td>
                      <td width="20%" valign="top" class="hdr1" align="center">Nama Lengkap<a href='adminpage.php?orderby=Nama_Lengkap&pola=<?=$polabaru;?>'><img src="images/bg2.gif" alt=""></a></td>
					  <td width="20%" valign="top" class="hdr1" align="center">Tanggal Member<a href='adminpage.php?orderby=Tgl_Member&pola=<?=$polabaru;?>'><img src="images/bg2.gif" alt=""></a></td>
                      <td width="15%" valign="top" class="hdr1" align="center">Investasi<a href='adminpage.php?orderby=Investasi&pola=<?=$polabaru;?>'><img src="images/bg2.gif" alt=""></a></td>
					  <td width="10%" valign="top" class="hdr1" align="center">Status<a href='adminpage.php?orderby=Status&pola=<?=$polabaru;?>'><img src="images/bg2.gif" alt=""></a></td>
          </tr>

		  
		  
		  <?php
		
	function rupiah($nominal) { $rupiah =  number_format($nominal,0, ",","."); $rupiah = "Rp "  . $rupiah . ",-"; return $rupiah; };

	$query = mysql_query("select * from identitas_rinci where identitas_rinci.Username in (select user.Username from user)");
		$No=1;

		//$search=mysql_query("select * from identitas_rinci where identitas_rinci.Username in (select user.Username from user)");
if(isset($_GET['qcari'])){
  $qcari=$_GET['qcari'];
  $search=mysql_query("select * from identitas_rinci where identitas_rinci.Username in (select user.Username from user) 
  and (Nama_Lengkap like '%$qcari%' or Tgl_Member like '%$qcari%' or Investasi like '%$qcari%' or Status like '%$qcari%') ");
}


			//else if  (empty($_GET['qcari'])){ echo 'Maaf, hasil pencarian tidak ditemukan.';  }		
		
	    while ( $data = mysql_fetch_array($search) ) //melooping pada setiap data hasil query
		{
				?>
				
				
		                     <tr class="list1" onMouseOver="mouse_event(this,'row_hover');" onMouseOut="mouse_event(this,'list1');">
                      <td align="center"> <?php echo $No; ?></td>
					  <td align="center"> <?php echo $data['Nama_Lengkap']; ?></td>
					  <td align="center"><?php $Tgl_Member = $data['Tgl_Member']; 
					  list($year, $month, $day) = explode('-', $Tgl_Member); 
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
					  
					  
					  echo $iddate; ?></td>
					  <td align="center"><?php echo rupiah($data['Investasi']); ?></td>
					  <td align="center"><?php $Tgl_Member = $data['Tgl_Member']; 

$query3=mysql_query("select current_date") or die(mysql_error());
					$pointer3=mysql_fetch_object($query3);
					$current_date=$pointer3->current_date;
					
				
				
				$pecah1	= explode('-', $Tgl_Member);
	$year1	= $pecah1[0];
	$month1	= $pecah1[1];
	$day1	= $pecah1[2];
	
	$pecah2	= explode('-', $current_date);
	$year2	= $pecah2[0];
	$month2	= $pecah2[1];
	$day2	= $pecah2[2];
	
	$jd1	= gregoriantojd($month1,$day1,$year1);
	$jd2	= gregoriantojd($month2,$day2,$year2);
	$isi	= $jd2-$jd1;
	$isis	= $jd2-$jd1;
	
	
	if($isis <365)$status=mysql_query("update identitas_rinci set status='Aktif' where Tgl_Member='$Tgl_Member' ") or die(mysql_error());
	else $status=mysql_query("update identitas_rinci set status='Selesai' where Tgl_Member='$Tgl_Member' ") or die(mysql_error());
							
	echo $data['Status']; ?></td>

                    </tr>
					
                
<?php 
		$No++;
		
	} 
	
	?>				
		  
		  
          
          
        </table>
   <br />
   <br />
 <p><strong>keterangan  : </strong> </p>
 <table width="100%" border="0">
   <tr class="list1">
     <td valign="top">Aktif</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">= </td>
     <td valign="top">Investasi sedang Aktif berjalan</td>
   </tr>
   <tr class="list1">
     <td valign="top">Selesai</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">=</td>
     <td valign="top">Bagi Hasil selesai, Modal sudah dikembalikan.</td>
   </tr>
 </table>
 <p>&nbsp; &nbsp;</p>
 <p>&nbsp; &nbsp; &nbsp;</p>
 <p>
 
 
           
        
        
        
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
			<h1><a href="indexA.php"><img src="images/nci.jpg" alt=""></a></h1>
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