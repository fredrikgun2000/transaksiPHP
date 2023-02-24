<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
if($cmd=='save'){
	$kodebarang=$_POST['kodebarang'];
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
	$satuan=$_POST['satuan'];
	$jlh_stok=$_POST['jlh_stok'];
	$hargajual=$_POST['hargajual'];
	$hargabeli=$_POST['hargabeli'];
	$ket=$_POST['ket'];
	$sql = "INSERT INTO tbbarang(kodebarang,nama,jenis,merk,satuan,jlh_stok,hargajual,hargabeli,ket) VALUES('$kodebarang','$nama','$jenis','$merk','$satuan','$jlh_stok','$hargajual','$hargabeli','$ket')";
}elseif ($cmd=='delete'){
	$kodebarang=$_POST['kodebarang'];
	$sql = "DELETE FROM tbbarang WHERE kodebarang='$kodebarang'";
}elseif ($cmd=='Update'){
	$kodebarang=$_POST['kodebarang'];
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
	$satuan=$_POST['satuan'];
	$jlh_stok=$_POST['jlh_stok'];
	$hargajual=$_POST['hargajual'];
	$hargabeli=$_POST['hargabeli'];
	$ket=$_POST['ket'];
	$sql = "UPDATE tbbarang SET kodebarang='$kodebarang',nama='$nama',jenis='$jenis',merk='$merk',satuan='$satuan',jlh_stok='$jlh_stok',hargajual='$hargajual',hargabeli='$hargabeli',ket='$ket' WHERE kodebarang='$kodebarang'";
}
$query = mysqli_query($conn,$sql)or die($sql);
$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>

