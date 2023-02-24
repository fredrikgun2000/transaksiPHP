<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
if($cmd=='save'){
	$kodeuser=$_POST['kodeuser'];
	$nama=$_POST['nama'];
	$status=$_POST['status'];
	$pass=md5($_POST['pass']);
	$ket=$_POST['ket'];
	$sql = "INSERT INTO tbuser(kodeuser,nama,status,pass,ket) VALUES('$kodeuser','$nama','$status','$pass','$ket')";
}elseif ($cmd=='delete'){
	$kodeuser=$_POST['kodeuser'];
	$sql = "DELETE FROM tbuser WHERE kodeuser='$kodeuser'";
}elseif ($cmd=='Update'){
	$kodeuser=$_POST['kodeuser'];
	$nama=$_POST['nama'];
	$status=$_POST['status'];
	$pass=md5($_POST['pass']);
	$ket=$_POST['ket'];
	$sql = "UPDATE tbuser SET kodeuser='$kodeuser',nama='$nama',status='$status',pass='$pass',ket='$ket' WHERE kodeuser='$kodeuser'" ;
}
$query = mysqli_query($conn,$sql)or die($sql);
$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>

