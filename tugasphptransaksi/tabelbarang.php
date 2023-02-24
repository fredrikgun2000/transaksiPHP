<table border="1" class="text-center" style="width: 100%;">
		<tr class="bg-dark text-light">
			<td>No</td>
			<td>Kode Barang</td>
			<td>Nama</td>
			<td>Jenis</td>
			<td>Merk</td>
			<td>Satuan</td>
			<td>Jumlah Stock</td>
			<td>Harga Jual</td>
			<td>Harga Beli</td>
			<td>Keterangan</td>
			<td>Action</td>
		</tr>
		<?php
		include "connectionconnection.php";
		$sql = "select * from tbbarang";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);

		for ($i=1; $i<=$num; $i++) { 
			$result = mysqli_fetch_array($query);
			$kodebarang = $result['kodebarang'];
			$nama = $result['nama'];
			$jenis = $result['jenis'];
			$merk = $result['merk'];
			$satuan = $result['satuan'];
			$jlh_stok = $result['jlh_stok'];
			$hargajual = $result['hargajual'];
			$hargabeli = $result['hargabeli'];
			$ket = $result['ket'];
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $kodebarang;?></td>
			<td><?php echo $nama;?></td>
			<td><?php echo $jenis;?></td>
			<td><?php echo $merk;?></td>
			<td><?php echo $satuan;?></td>
			<td><?php echo $jlh_stok;?></td>
			<td><?php echo $hargajual;?></td>
			<td><?php echo $hargabeli;?></td>
			<td><?php echo $ket;?></td>
			<td><button type="button" value="delete" class="delete btn btn-danger my-2" id="<?php echo $kodebarang;?>">Delete</button>
			<button class="btn btn-success" type="button" value="edit" onclick="edit(<?php echo "'$kodebarang','$nama','$jenis','$merk','$satuan','$jlh_stok','$hargajual','$hargabeli','$ket'";?>)">Edit</button></td>
		</tr>

		<?php 
		}
		 ?>
	</table>