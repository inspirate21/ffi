<table border="1px" width="59%">
			<tr>
				<td width="36%">Nama</td>
				<td width="27%">Jabatan</td>
				<td width="37%">Email</td>
				<td width="37%">HP</td>
				<td width="37%">Tempat Lahir</td>
				<td width="37%">Tanggal Lahir</td>
		    </tr>
		<?php
		include 'config.php';  //memanggil file config.php supaya terkoneksi dengan database
       	$query = mysql_query("select * from keanggotaan where ID_Anggota between 006 and 016");   //melakukan query pada database
	    while ( $data = mysql_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>
				<tr>
					<td><?php echo $data['Nama'];?></td>   
					<td><?php echo $data['Jabatan'];?></td>
					<td><?php echo $data['Email'];?></td>
					<td><?php echo $data['HP'];?></td>
					<td><?php echo $data['Tempat_lahir'];?></td>
					<td><?php echo $data['Tanggal_lahir'];?></td>
			    </tr>
				
		<?php } ?>
		</table>