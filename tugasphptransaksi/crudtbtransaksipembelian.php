<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
$sql = 'select * from tbbeli';
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query)+1;

if ($cmd=='Add') {
	$kodebarang=$_POST['kodebarang'];
	$jlh=$_POST['jlh'];
	$harga=$_POST['harga'];
	$total=$_POST['total'];
	$sql = "insert into tempbelidetil(no,kodebarang,jlh,harga,total)values('$num','$kodebarang','$jlh','$harga','$total')";
}elseif ($cmd=='delete') {
	$kodebarang=$_POST['kodebarang'];
	$sql = "delete from tempbelidetil where kodebarang='$kodebarang'";
}elseif ($cmd=='Update') {
	$kodebarang=$_POST['kodebarang'];
	$jlh=$_POST['jlh'];
	$harga=$_POST['harga'];
	$total=$_POST['total'];
	$sql="update tempbelidetil set jlh='$jlh',harga='$harga',total='$total' where kodebarang='$kodebarang'";
}
$query = mysqli_query($conn,$sql)or die($sql);

$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>