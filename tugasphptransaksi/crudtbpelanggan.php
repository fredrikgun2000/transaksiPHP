<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
if($cmd=='save'){
	$kodepel=$_POST['kodepel'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$sql = "INSERT INTO tbpelanggan(kodepel,nama,alamat,telp) VALUES('$kodepel','$nama','$alamat','$telp')";
}elseif ($cmd=='delete'){
	$kodepel=$_POST['kodepel'];
	$sql = "DELETE FROM tbpelanggan WHERE kodepel='$kodepel'";
}elseif ($cmd=='Update'){
	$kodepel=$_POST['kodepel'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$sql = "UPDATE tbpelanggan SET kodepel='$kodepel',nama='$nama',alamat='$alamat',telp='$telp' WHERE kodepel='$kodepel'" ;
}
$query = mysqli_query($conn,$sql)or die($sql);
$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>

