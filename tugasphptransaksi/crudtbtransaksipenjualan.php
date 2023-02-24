<?php
include "connectionconnection.php";

$cmd=$_POST['cmd'];
$sql = 'select * from tbjual';
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query)+1;

if ($cmd=='Add') {
	$kodebarang=$_POST['kodebarang'];
	$jlh=$_POST['jlh'];
	$harga=$_POST['harga'];
	$total=$_POST['total'];
	$sql2="select * from tbbarang where kodebarang='$kodebarang'";
	$query2=mysqli_query($conn,$sql2);
	$num=mysqli_num_rows($query2);

	for ($i=1; $i<=$num; $i++) { 
	$result=mysqli_fetch_array($query2);
	$jlh_stok=$result['jlh_stok'];

	if ($jlh_stok<$jlh) {
	echo 'stok kurang';
	exit;
	}else{
		$sql = "insert into tempjualdetil(no,kodebarang,jlh,harga,total)values('$num','$kodebarang','$jlh','$harga','$total')";
	
}}}elseif ($cmd=='delete') {
	$kodebarang=$_POST['kodebarang'];
	$sql = "delete from tempjualdetil where kodebarang='$kodebarang'";
}elseif ($cmd=='Update') {
	$kodebarang=$_POST['kodebarang'];
	$jlh=$_POST['jlh'];
	$harga=$_POST['harga'];
	$total=$_POST['total'];
	$sql="update tempjualdetil set jlh='$jlh',harga='$harga',total='$total' where kodebarang='$kodebarang'";
}
$query = mysqli_query($conn,$sql)or die($sql);

$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>