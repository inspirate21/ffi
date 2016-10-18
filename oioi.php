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
					  

					  //isi di sini


					  </td>
					  <td align="center"><?php echo rupiah($data['Investasi']); ?></td>
					  <td align="center"><?php $Tgl_Member = $data['Tgl_Member']; 

					  </td>

                    </tr>
				} 				
		  
		  
          
          
        </table>
   <br />
   <br />
 
  </td>
        </tr>
      </table>
    </div>
        </div>