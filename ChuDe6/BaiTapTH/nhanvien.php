<!DOCTYPE html>
<?php
require("connect.php");
$strSQL = "SELECT * FROM nhanvien";
$result = mysqli_query($dbc,$strSQL);
if(isset($_POST['tk']))
{
	if(isset($_POST['tnv']))
	{
		$tnv = $_POST['tnv'];
		$strSQL = "SELECT * FROM nhanvien Where Ten like '%$tnv%'";
		$result = mysqli_query($dbc,$strSQL);
	}
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Thông Tin Nhân Viên</title>
</head>
<body>
	<p>
		<a href="phong.php"> Phòng </a>
		<span> | </span>
		<a href="loainv.php"> Loại NV </a>

	</p>
	<h1 style='color: blue;' align='center'>THÔNG TIN NHÂN VIÊN</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Tên Nhân Viên</td>
				<td>
					<input type="text" name="tnv">
				</td>
				<td>
					<input type="submit" name="tk" value="Tìm kiếm">
				</td>
			</tr>
		</table>
	</form><br>
	<p>
		<a href="addnhanvien.php" style="margin-left: 50px"> Thêm </a>
	</p>
<?php
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{
	echo "<table align='center' width='800' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse;'>
			<tr style='background-color: #0084ab;' align='center'>
				<td><b> Mã nhân viên </b></td>
				<td><b> Họ </b></td>
				<td><b> Tên </b></td>
				<td><b> Ngày sinh </b></td>
				<td><b> Giới tính </b></td>
				<td><b> Địa chỉ </b></td>
				<td><b> Ảnh </b></td>
				<td><b> Loại nhân viên </b></td>
				<td><b> Phòng ban </b></td>
			</tr>";
	$stt=1;
	while($row = mysqli_fetch_array($result))
	{
		if($stt%2!=0)
		{
			echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
			echo "<td>$row[8]</td>";
		}
		else
		{
			echo "<tr style='background-color: #ffb1007a;'>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
			echo "<td>$row[8]</td>";
		}
			$stt+=1;
	}
	echo '</table>';
}
mysqli_close($dbc);
?>
</body>
</html>