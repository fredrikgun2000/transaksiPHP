<!DOCTYPE html>
<html>
<head>
	<title>Form Transaksi Pembelian</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<div class="container-fluid">
	<h1>Form Transaksi Pembelian</h1>
	<form>
		<table border="0">
			<tr>
				<td>No Beli</td>
				<td>:</td>
				<?php
					include "connectionconnection.php";
					$sql = 'select * from tbbeli';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query)+1;
				?>
				<td><input type="text" id="" name="" value="BL-<?php echo $num;?>"></td>
				<td>&nbsp;</td>
				<td>Supplier</td>
				<td>:</td>
				<td><select class="sup">
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
					$alamat = $result['alamat'];
					$telp = $result['telp'];
				?>
				<option id="<?php echo $kodesup;?>"><?php echo $nama;?></option>
				<?php
				}
				?>
				</select></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="text" name="" value="<?php echo date('d/m/Y');?>"></td>
				<td>&nbsp;</td>
				<td>Alamat</td>
				<td>:</td>
				<td>
				<?php
					include 'connectionconnection.php';
					$sql = 'select * from tbsupplier';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query);

					for ($i=1; $i<=$num; $i++) { 
					$result = mysqli_fetch_array($query)	;
					$kodesup = $result['kodesup'];
					$nama = $result['nama'];
					$alamat = $result['alamat'];
					$telp = $result['telp'];
				?>
				<textarea class="d-none alamat" id="alamat<?php echo $kodesup;?>" type="text" name="" disabled><?php echo $alamat;?></textarea>
				<?php
				}
				?>
				</td>
			</tr>
			<tr>
				<td>User</td>
				<td>:</td>
				<td><select class="user">
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
				<td>&nbsp;</td>
				<td>Telp</td>
				<td>:</td>
				<td>
				<?php
					include 'connectionconnection.php';
					$sql = 'select * from tbsupplier';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query);

					for ($i=1; $i<=$num; $i++) { 
					$result = mysqli_fetch_array($query);
					$kodesup = $result['kodesup'];
					$nama = $result['nama'];
					$alamat = $result['alamat'];
					$telp = $result['telp'];
				?>
				<input class="d-none telp" id="telp<?php echo $kodesup;?>" type="text" name="" disabled value="<?php echo $telp;?>"></td>
				<?php
				}
				?></td>
			</tr>
		</table>
			<select class="bar">
				<option>Nama Barang</option>
				<?php
					include 'connectionconnection.php';
					$sql = 'select * from tbbarang';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query);

					for ($i=1; $i<=$num; $i++) { 
					$result = mysqli_fetch_array($query);
					$kodebarang = $result['kodebarang'];
					$nama = $result['nama'];
				?>
				<option id="<?php echo $kodebarang?>"><?php echo $nama?></option>
				<?php
				}
				?>
			</select>
			<?php
					include 'connectionconnection.php';
					$sql = 'select * from tbbarang';
					$query = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($query);

					for ($i=1; $i<=$num; $i++) { 
					$result = mysqli_fetch_array($query);
					$kodebarang = $result['kodebarang'];
					$jenis = $result['jenis'];
					$merk = $result['merk'];
					$satuan = $result['satuan'];
					$jlh_stok = $result['jlh_stok'];
					$hargabeli = $result['hargabeli'];
					$ket = $result['ket'];
				?>
				<input type="hidden" id="jeniss<?php echo $kodebarang?>" name="" value="<?php echo $jenis ?>">
				<input type="hidden" id="merks<?php echo $kodebarang?>" name="" value="<?php echo $merk ?>">
				<input type="hidden" id="satuans<?php echo $kodebarang?>" name="" value="<?php echo $satuan ?>">
				<input type="hidden" id="hargabelis<?php echo $kodebarang?>" name="" value="<?php echo $hargabeli ?>">
				<?php
				}
				?>
			<input type="hidden" id="kodebarangs" name="" disabled>
			<input type="hidden" id="cmd" value="Add" name="" disabled>
			<input type="text" id="jenis" name="" disabled placeholder="Jenis">
			<input type="text" id="merk" name="" disabled placeholder="Merk">
			<input type="text" id="satuan" name="" disabled placeholder="Satuan">
			<input type="text" id="qty" name="" placeholder="Qty">
			<input type="text" id="hargabeli" name="" disabled placeholder="Harga">
			<input type="text" id="totals" name="" placeholder="Total" disabled>
			<input type="button" class="btn btn-primary" id="adds" name="" value="Add">
			<div class="my-3" id="tabeltransaksipembelian"></div>
		<table>
			<tr>
				<td>Subtotal</td>
				<td>:</td>
				<td><input type="text" id="sub" name="" disabled></td>
			</tr>
			<tr>
				<td>Disc</td>
				<td>:</td>
				<td><input id="disc" min="0" type="number" name="" placeholder="%"></td>
				<td><span id="dis"></span></td>
			</tr>
			<tr>
				<td>Pajak</td>
				<td>:</td>
				<td><input type="number" min="0" id="pajaks" name="" placeholder="%"></td>
				<td><span id="pajak"></span></td>
			</tr>
			<tr>
				<td>Grand Total</td>
				<td>:</td>
				<td><input disabled type="text" name="" id="grand"></td>
			</tr>
			<tr>
				<td><button class="btn btn-info"><a href="home.php" style="text-decoration: none; color: white;">Kembali ke Home</a></button></td>
				<td>&nbsp;</td>
				<td><input type="button" class="btn btn-warning" id="prosestransaksipembelian" value="Proses" name=""></td>
			</tr>
		</table>
	</form>
</div>
<script src="main.js"></script>
</body>
</html>