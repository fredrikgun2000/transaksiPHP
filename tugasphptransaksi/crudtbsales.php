<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
if($cmd=='save'){
	$kodesales=$_POST['kodesales'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$sql = "INSERT INTO tbsales(kodesales,nama,alamat,telp) VALUES('$kodesales','$nama','$alamat','$telp')";
}elseif ($cmd=='delete'){
	$kodesales=$_POST['kodesales'];
	$sql = "DELETE FROM tbsales WHERE kodesales='$kodesales'";
}elseif ($cmd=='Update'){
	$kodesales=$_POST['kodesales'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$sql = "UPDATE tbsales SET kodesales='$kodesales',nama='$nama',alamat='$alamat',telp='$telp' WHERE kodesales='$kodesales'" ;
}
$query = mysqli_query($conn,$sql)or die($sql);
$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>

