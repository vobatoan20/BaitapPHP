<!DOCTYPE html>
<?php
require("connect.php");

if(isset($_POST['sm']))
{

	$ma=$_POST['ma'];
	$ten=$_POST['ten'];
	$strSQL = "INSERT INTO `phongban`(`maPhong`, `tenPhong`) VALUES ('$ma','$ten')";
	$result = mysqli_query($dbc,$strSQL);
	header("location: phong.php");
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1 style='color: blue;' align='center'>THÊM PHÒNG BAN</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Mã phòng ban </td>
				<td><input type="text" name="ma" required></td>
			</tr>
			<tr>
				<td>Tên phòng ban </td>
				<td><input type="text" name="ten" required></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sm" value="Thêm"></center></td>
			</tr>
		</table>
	</form>
</body>
</html>