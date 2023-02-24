<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
if($cmd=='save'){
	$kodesup=$_POST['kodesup'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$sql = "INSERT INTO tbsupplier(kodesup,nama,alamat,telp) VALUES('$kodesup','$nama','$alamat','$telp')";
}elseif ($cmd=='delete'){
	$kodesup=$_POST['kodesup'];
	$sql = "DELETE FROM tbsupplier WHERE kodesup='$kodesup'";
}elseif ($cmd=='Update'){
	$kodesup=$_POST['kodesup'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$sql = "UPDATE tbsupplier SET kodesup='$kodesup',nama='$nama',alamat='$alamat',telp='$telp' WHERE kodesup='$kodesup'" ;
}
$query = mysqli_query($conn,$sql)or die($sql);
$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>

