<!DOCTYPE html>
<html>
<head>
	<title>Form Sales</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
	<div class="container-fluid">
<form id="saveformsales" method="POST">
	<h1>Form Sales</h1>
	<table border="0">
		<tr>
			<td>Kode Sales</td>
			<td>:</td>
			<td><input type="text" name="kodesales" id="kodesales"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" id="alamat"></td>
		</tr>
		<tr>
			<td>Telp</td>
			<td>:</td>
			<td><input type="number" min="0" name="telp" id="telp"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<input type="hidden" name="cmd" id="cmd" value="save">
			<td><button type="submit" value="save" class="btn btn-primary">Save</button>
			<button class="btn btn-warning" type="reset" name="cmd" id="reset" value="reset">Clear</button></td>	
		</tr>
	</table>
</form>
<div id="tabelsales" class="my-2" style="max-height: 300px;overflow-y: auto;"></div>
<br>
<button class="btn btn-info"><a href="home.php" style="text-decoration: none; color: white;">Kembali ke Home</a></button>
</div>
<script src="main.js"></script>
</body>
</html>