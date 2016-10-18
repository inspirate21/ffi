<table border="1px" width="100%">
			<tr>
				<td width="1%" align="center">No</td>
				<td width="10%" align="center">Nama Acara</td>
				<td width="5%" align="center">Tanggal </td>
				<td width="2%" align="center">Waktu</td>
				<td width="5%" align="center">Tempat </td>
				<td width="10%" align="center">Divisi</td>
		    </tr>
		<?php
		include 'config.php';  //memanggil file config.php supaya terkoneksi dengan database
       	$query = mysql_query("select * from timeline");   //melakukan query pada database
	    while ( $data = mysql_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>
				<tr>
                    <td align="center"><?php echo $data['TimelineID'];?></td>   
					<td><?php echo $data['Nama_acara'];?></td>   
					<td align="center"><?php echo $data['Tanggal_acara'];?></td>
					<td align="center"><?php echo $data['Waktu'];?></td>
					<td align="center"><?php echo $data['Tempat'];?></td>
					<td align="center"><?php echo $data['Divisi'];?></td>
			    </tr>
				
		<?php } ?>
		</table>