<?php
include 'connectionconnection.php';
$kodepel=$_POST['kodepel'];
$kodeuser=$_POST['kodeuser'];
$kodesales=$_POST['kodesales'];
$subtotal=$_POST['subtotal'];
$disc=$_POST['disc'];
$pajak=$_POST['pajak'];
$grandtotal=$_POST['grandtotal'];
$tgl=date('Y/m/d');

$sql='select * from tbjual';
$query = mysqli_query($conn,$sql);
$no = mysqli_num_rows($query)+1;

$sql1="select * from tempjualdetil";
$query1 = mysqli_query($conn,$sql1);
$num = mysqli_num_rows($query1);
for($i=1; $i<=$num; $i++){
	$result = mysqli_fetch_array($query1);
	$kodebarang = $result['kodebarang'];
	$jlh = $result['jlh'];
	$sql2="update tbbarang set jlh_stok=jlh_stok-'$jlh' where kodebarang='$kodebarang'";
	$query2=mysqli_query($conn,$sql2);
}

$sql3="insert into tbjualdetil(no,kodebarang,jlh,harga,total)select no,kodebarang,jlh,harga,total from tempjualdetil where no='$no'";
$query3=mysqli_query($conn,$sql3);

$sql4="insert into tbjual(no,tgl,kodepel,kodeuser,subtotal,disc,pajak,grandtotal)values('$no','$tgl','$kodepel','$kodeuser','$subtotal','$disc','$pajak','$grandtotal')";
$query4=mysqli_query($conn,$sql4);

$sql5="delete from tempjualdetil";
$query5=mysqli_query($conn,$sql5);

$myObj[]=array(
	'status'=>'sukses'
);
echo json_encode($myObj);
exit;
?>