<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	h1 {
  		margin-left: 20px;
  	}
  </style>
</head>
<body>
  <?php
session_start();

$login = $_SESSION['login'];

if ($login==False) {
  header("location: loginpage.php");
}

?>


  
<h1>Hai <?php
  echo $_SESSION['nama'];
  ?>, Selamat Datang!</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tbbarang.php">Form Barang</a>
          <a class="dropdown-item" href="tbpelanggan.php">Form Pelanggan</a>
          <a class="dropdown-item" href="tbsales.php">Form Sales</a>
          <a class="dropdown-item" href="tbuser.php">Form User</a>
          <a class="dropdown-item" href="tbsupplier.php">Form Supplier</a>
          <a class="dropdown-item" href="tbtransaksipembelian.php">Form Transaksi Pembelian</a>
          <a class="dropdown-item" href="tbtransaksipenjualan.php">Form Transaksi Penjualan</a>
          <a class="dropdown-item" href="tblaporanpembelian.php">Form Laporan Pembelian</a>
          <a class="dropdown-item" href="">Form Laporan Penjualan</a>
          <a class="dropdown-item" href="">Form Laporan Stock</a>

        </div>
      </li>
      <li class="nav-item">
        <!-- <a href="/tugasphptransaksi/loginpage.php" onclick="" <?php ?>> logout</a> -->
      </li>
    </ul>
  </div>
</nav>

</body>
</html>