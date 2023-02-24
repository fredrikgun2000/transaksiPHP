<table border="1" class="text-center" style="width: 100%">
	<tr  class="bg-dark text-light">
		<td>No</td>
		<td>Kode User</td>
		<td>Nama</td>
		<td>Status</td>
		<td>Password</td>
		<td>Keterangan</td>
		<td>Action</td>
	</tr>
	<?php
	include "connectionconnection.php";
	$sql = "select * from tbuser";
	$query = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($query);

	for ($i=1; $i<=$num; $i++) { 
			$result = mysqli_fetch_array($query);
			$kodeuser = $result['kodeuser'];
			$nama = $result['nama'];
			$status = $result['status'];
			$pass = $result['pass'];
			$ket = $result['ket'];

	?>
	<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $kodeuser;?></td>
			<td><?php echo $nama;?></td>
			<td><?php echo $status;?></td>
			<td><?php echo $pass;?></td>
			<td><?php echo $ket;?></td>
			<td><button type="button" value="delete" class="delete btn btn-danger my-2" id="<?php echo $kodeuser;?>">delete</button>
			<button class="btn btn-success" type="button" value="edit" onclick="edit3(<?php echo "'$kodeuser','$nama','$status','$pass','$ket'";?>)">edit</button></td>
		</tr>

		<?php 
		}
		 ?>
</table>