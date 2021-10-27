<!DOCTYPE html>
<?php
require("connect.php");
if(isset($_POST['sm']))
{

	$ma=$_POST['ma'];
	$ten=$_POST['ten'];
	$strSQL = "INSERT INTO `loainhanvien`(`maLoaiNV`, `tenLoaiNV`) VALUES ('$ma','$ten')";
	$result = mysqli_query($dbc,$strSQL);
	header("location: loainv.php");
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1 style='color: blue;' align='center'>THÊM LOẠI NHÂN VIÊN</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Mã loại nhân viên </td>
				<td><input type="text" name="ma" required></td>
			</tr>
			<tr>
				<td>Tên loại nhân viên </td>
				<td><input type="text" name="ten" required></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sm" value="Thêm"></center></td>
			</tr>
		</table>
	</form>
</body>
</html>