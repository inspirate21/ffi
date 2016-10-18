<table border="1px" width="100%">
			<tr>
				<td width="1%" align="center">No</td>
				<td width="10%" align="center">Nama File</td>
				<td width="5%" align="center">Pemasukan</td>
				<td width="2%" align="center">Pengeluaran</td>
				<td width="5%" align="center">Saldo Akhir</td>
			
		    </tr>
		<?php
		include 'config.php';  //memanggil file config.php supaya terkoneksi dengan database
       	$query = mysql_query("select * from keuangan");   //melakukan query pada database
	    while ( $data = mysql_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>
				<tr>
                    <td align="center"><?php echo $data['ID_file'];?></td>   
					<td><?php echo $data['Nama_file'];?></td>   
					<td align="center"><?php echo $data['Pemasukan'];?></td>
					<td align="center"><?php echo $data['Pengeluaran'];?></td>
					<td align="center"><?php echo $data['Saldo_akhir'];?></td>
			
              </tr>
				
		<?php } ?>
		</table>