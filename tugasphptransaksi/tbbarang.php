<!DOCTYPE html>
<html>
<head>
	<title>Form Barang</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
	<div class="container-fluid">

	<form id="saveformbarang" method="POST">
		<table border="0">
			<h1>Form Barang</h1>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kodebarang" id="kodebarang"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" name="jenis" id="jenis"></td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk" id="merk"></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td>:</td>
				<td><input type="text" name="satuan" id="satuan"></td>
			</tr>
			<tr>
				<td>Jumlah Stok</td>
				<td>:</td>
				<td><input type="number" min="0" name="jlh_stok" id="jlh_stok"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="number" min="0" name="hargajual" id="hargajual"></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td><input type="number" min="0" name="hargabeli" id="hargabeli"></td>
			</tr>
			<tr>
				<td>Ket</td>
				<td>:</td>
				<td><input type="text" name="ket" id="ket"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<input type="hidden" name="cmd" id="cmd" value="save">
				<td><button type="submit" value="save" class="btn btn-primary">Save</button>
				<button type="reset" name="cmd" class="btn btn-warning" id="reset" value="reset">Clear</button></td>	
			</tr>
		</table>
	</form>
			<div id="tabelbarang" class="my-2" style="max-height: 300px;overflow-y: auto;"></div>
<br>
<button class="btn btn-info"><a href="home.php" style="text-decoration: none; color: white;">Kembali ke Home</a></button>
	</div>
		
<script src="main.js"></script>
</body>
</html>