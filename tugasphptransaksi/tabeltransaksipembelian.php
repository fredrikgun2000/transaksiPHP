<table border="1" class="text-center" style="width: 100%;">
	<tr class="bg-dark text-light">
		<td>No</td>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<td>Jenis</td>
		<td>Merk</td>
		<td>Satuan</td>
		<td>Jlh</td>
		<td>Harga</td>
		<td>Total</td>
		<td>Action</td>
	</tr>
	<?php
	include "connectionconnection.php";
	$sql = "select * from tempbelidetil inner join tbbarang on tempbelidetil.kodebarang = tbbarang.kodebarang";
	$query = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($query);

	for ($i=1; $i<=$num; $i++) { 
			$result = mysqli_fetch_array($query);
			$kodebarang = $result['kodebarang'];
			$nama = $result['nama'];
			$jenis = $result['jenis'];
			$merk = $result['merk'];
			$satuan = $result['satuan'];
			$jlh = $result['jlh'];
			$harga = $result['harga'];
			$total = $result['total'];
	?>
	<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $kodebarang;?></td>
			<td><?php echo $nama;?></td>
			<td><?php echo $jenis;?></td>
			<td><?php echo $merk;?></td>
			<td><?php echo $satuan;?></td>
			<td><?php echo $jlh;?></td>
			<td><?php echo $harga;?></td>
			<td><?php echo $total;?></td>
			<td><button type="button" value="delete" class="deletetransaksipembelian btn btn-danger my-2" id="<?php echo $kodebarang;?>">delete</button>
			<button class="btn btn-success" type="button" value="edit" onclick="edittransaksipembelian(<?php echo "'$kodebarang','$nama','$jenis','$merk','$satuan','$jlh','$harga','$total'";?>)">edit</button></td>
		</tr>
		<input type="hidden" value="<?php echo $total;?>" class="total" name="">
		<?php 
		}
		 ?>
</table>