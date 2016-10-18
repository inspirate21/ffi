<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        
        <div id="body_div">
 <td align=""><div class="body_right_caloninvestor">
			  <h4>Daftar File Notulensi Rapat</h4>

              
		<!-- <div class="view_div">
                  <ul>
                                                                   
                 </ul>
         </div> -->
                
                
<div class="tabpad news-box news">
<div class="deposit_info_details">
<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" class="lbox_contentbg">
		
		
		<p>&nbsp;</p>
			
          <tr class="row1" onMouseOver="mouse_event(this, 'listrow_bg');" onMouseOut="mouse_event(this, 'row1');">
                      <td width="5%" valign="top" class="hdr1" align="center">No</td>
					  <td width="30%" valign="top" class="hdr1" align="center">Nama Acara</td>
                      <td width="25%" valign="top" class="hdr1" align="center">Tanggal Acara</td>
					  <td width="40%" valign="top" class="hdr1" align="center">Waktu</td>
                      <td width="25%" valign="top" class="hdr1" align="center">Tempat</td>
                      <td width="25%" valign="top" class="hdr1" align="center">Divisi</td>
					  
                  </tr>
	
	
	<?php
	$No=1;
       	$query = mysql_query("select * from timeline");   //melakukan query pada database
		while ( $data = mysql_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>
				    <tr class="list1" onMouseOver="mouse_event(this,'row_hover');" onMouseOut="mouse_event(this,'list1');">
                  
                    <td align="center"> <?php echo $No; ?></td>
		            <td align="left"><?php echo $data['Nama_acara'];?></td>   
					<td align="center"><?php echo $data['Tanggal_acara'];?></td>
					<td align="center"><?php echo $data['Waktu'];?></td>
   					<td align="center"><?php echo $data['Tempat'];?></td>
   					<td align="center"><?php echo $data['Divisi'];?></td>
					
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


<body>
</body>
</html>