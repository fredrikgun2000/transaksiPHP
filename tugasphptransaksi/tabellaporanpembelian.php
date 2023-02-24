
<?php
include "connectionconnection.php";
error_reporting(E_ALL ^ E_NOTICE);
$tanggal1=$_POST['tanggal1'];
$tanggal2=$_POST['tanggal2'];
$nobeli=$_POST['nobeli'];
$supplier=$_POST['supplier'];
$user=$_POST['user'];

$querys='';
	if (!empty($tanggal1) AND !empty($tanggal2)) {
		if ($querys=='') {
			$querys=$querys." tgl BETWEEN '$tanggal1' AND '$tanggal2'";
		}else{
			$querys=$querys." AND tgl BETWEEN '$tanggal1' AND '$tanggal2'";
		}
	}

	if ($nobeli!='') {
		if ($querys=='') {
			$querys=$querys." tbbeli.no='$nobeli'";
		}else{
			$querys=$querys." AND tbbeli.no='$nobeli'";
		}
	}

	if ($supplier!='undefined') {
		if ($querys=='') {
			$querys=$querys." tbbeli.kodesup='$supplier'";
		}else{
			$querys=$querys." AND tbbeli.kodesup='$supplier'";
		}
	}

	if ($user!='undefined') {
		if ($querys=='') {
			$querys=$querys." tbbeli.kodeuser='$user'";
		}else{
			$querys=$querys." AND tbbeli.kodeuser='$user'";
		}
	}

	if ($querys=='') {
		$sql='select *,tbsupplier.nama as namasup,tbuser.nama as namauser from tbbeli inner join tbsupplier on tbbeli.kodesup=tbsupplier.kodesup INNER JOIN tbuser ON tbbeli.kodeuser=tbuser.kodeuser INNER JOIN tbbelidetil ON tbbeli.no = tbbelidetil.no INNER JOIN tbbarang on tbbelidetil.kodebarang=tbbarang.kodebarang ';
	}else{
		$sql='select *,tbsupplier.nama as namasup,tbuser.nama as namauser from tbbeli inner join tbsupplier on tbbeli.kodesup=tbsupplier.kodesup INNER JOIN tbuser ON tbbeli.kodeuser=tbuser.kodeuser INNER JOIN tbbelidetil ON tbbeli.no = tbbelidetil.no INNER JOIN tbbarang on tbbelidetil.kodebarang=tbbarang.kodebarang where'.$querys;
	}
$query=mysqli_query($conn, $sql);
$num=mysqli_num_rows($query);
$api=[];
for ($i=1; $i<=$num; $i++) { 
			$result = mysqli_fetch_array($query);
			$api[]=[
				'no'=>$result['no'],
				'tgl'=>$result['tgl'],
				'supplier'=>$result['namasup'],
				'user'=>$result['namauser'],
				'subtotal'=>$result['subtotal'],
				'disc'=>$result['disc'],
				'pajak'=>$result['pajak'],
				'grandtotal'=>$result['grandtotal'],
				'namabarang'=>$result['nama'],
				'jlh'=>$result['jlh'],
				'harga'=>$result['harga'],
				'total'=>$result['total'],
			];
}
header('Content-Type: application/json');
echo json_encode($api);
exit;
?>