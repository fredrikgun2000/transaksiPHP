<?php
session_start();
include "connectionconnection.php";

$nama=$_POST['nama'];
$password=md5($_POST['password']);
$sql = "SELECT * from tbuser where nama='$nama' and pass='$password'";
$query = mysqli_query($conn,$sql) or die($sql);
$num = mysqli_num_rows($query);

// $result = mysqli_fetch_array($query);
// $nama = $result['nama'];
// $status = $result['status'];

if ($num > 0) {
	$result = mysqli_fetch_array($query);
	$nama = $result['nama'];
	$status = $result['status'];
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = $status;
	$_SESSION['login'] = True;

	header("location:home.php");
}else{
?>
<script type="text/javascript">
	alert("maaf, tidak memiliki akses login");
	location.href="loginpage.php";
</script>
<?php
}
?>