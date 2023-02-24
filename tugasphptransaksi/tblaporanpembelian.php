<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembelian</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
	<style type="text/css">
		#ui-datepicker-div{
			background-color: white;
		}
	</style>
<div class="container-fluid">
	<h1>Laporan Pembelian</h1>

		<table border="0">
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input name="" id="tanggal1">
				<input name="" id="tanggal2"></td>
			</tr>
			<tr>
				<td>No Beli</td>
				<td>:</td>
				<td><input type="text" name="" id="nobeli"></td>
			</tr>
			<tr>
				<td>Nama Supplier</td>
				<td>:</td>
				<td><select class="suplaporanpembelian">
				<option>Nama Supplier</option>
				<?php
					include 'connectionconnection.php';
					$sql = 'select * from tbsupplier';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query);

					for ($i=1; $i<=$num; $i++) { 
					$result = mysqli_fetch_array($query);
					$kodesup = $result['kodesup'];
					$nama = $result['nama'];
				?>
				<option id="<?php echo $kodesup;?>"><?php echo $nama;?></option>
				<?php
				}
				?>
				</select></td>
			</tr>
			<tr>
				<td>User</td>
				<td>:</td>
				<td><select class="userlaporanpembelian">
				<option>Nama User</option>
				<?php
					include 'connectionconnection.php';
					$sql = 'select * from tbuser';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query);

					for ($i=1; $i<=$num; $i++) { 
					$result = mysqli_fetch_array($query);
					$kodeuser = $result['kodeuser'];
					$nama = $result['nama'];
				?>
				<option id="<?php echo $kodeuser?>"><?php echo $nama?></option>
				<?php
				}
				?>
				</select></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><button id="views" class="btn btn-primary">View</button></td>
				<table border="1" class="text-center" style="width: 100%;">
					<tr class="bg-dark text-light">
						<td>Tanggal</td>
						<td>No Beli</td>
						<td>Supplier</td>
						<td>User</td>
						<td>Nama Barang</td>
						<td>Jlh</td>
						<td>Harga</td>
						<td>Total</td>
						<td>Subtotal</td>
						<td>Disc</td>
						<td>Pajak</td>
						<td>Grand Total</td>
					</tr>
					<tbody id="data"></tbody>
				</table>
			</tr>
		</table>
	<div id="tabellaporanpembelian"></div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="main.js"></script>
</body>
</html>