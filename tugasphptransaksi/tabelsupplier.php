<table border="1" class="text-center" style="width: 100%;">
	<tr class="bg-dark text-light">
		<td>No</td>
		<td>Kode Supplier</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Telp</td>
		<td>Action</td>
	</tr>
	<?php
	include "connectionconnection.php";
	$sql = "select * from tbsupplier";
	$query = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($query);

	for ($i=1; $i<=$num; $i++) { 
			$result = mysqli_fetch_array($query);
			$kodesup = $result['kodesup'];
			$nama = $result['nama'];
			$alamat = $result['alamat'];
			$telp = $result['telp'];
	?>
	<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $kodesup;?></td>
			<td><?php echo $nama;?></td>
			<td><?php echo $alamat;?></td>
			<td><?php echo $telp;?></td>
			<td><button type="button" value="delete" class="delete btn btn-danger my-2" id="<?php echo $kodesup;?>">delete</button>
			<button class="btn btn-success" type="button" value="edit" onclick="edit4(<?php echo "'$kodesup','$nama','$alamat','$telp'";?>)">edit</button></td>
		</tr>

		<?php 
		}
		 ?>
</table>