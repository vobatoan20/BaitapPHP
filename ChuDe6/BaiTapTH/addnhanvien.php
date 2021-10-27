<!DOCTYPE html>
<?php
require("connect.php");
$lnv_SQL = "SELECT * FROM loainhanvien";
$pb_SQL = "SELECT * FROM phongban";
$result = mysqli_query($dbc, $lnv_SQL);
$result1 = mysqli_query($dbc, $pb_SQL);
function f_FormatDate($strDate){
     $arr=explode("/",$strDate);
     rsort($arr);
     return implode("-",$arr);
}
if(isset($_POST['sm']))
{

	$ma=$_POST['ma'];
    $ho=$_POST['ho'];
    $ten=$_POST['ten'];
    $ns=f_FormatDate($_POST['ns']);
    $gt=$_POST['gt'];
    $dc=$_POST['dc'];
    $anh=$_POST['anh'];
 	$dc=$_POST['dc'];
    $lnv=$_POST['lnv'];
    $pb=$_POST['pb'];
	$strSQL="INSERT INTO `nhanvien`(`MaNV`, `Ho`, `Ten`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Anh`, `MaLoaiNV`, `MaPhong`) VALUES ('$ma','$ho','$ten','$ns','$gt','$dc','$anh','$lnv','$pb')";
     $r = mysqli_query($dbc, $strSQL);
	header("location: nhanvien.php");
}


?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1 style='color: blue;' align='center'>THÊM NHÂN VIÊN</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Mã nhân viên </td>
				<td><input type="text" name="ma" required></td>
			</tr>
			<tr>
				<td>Họ</td>
				<td><input type="text" name="ho" required></td>
			</tr>
			<tr>
				<td>Tên</td>
				<td><input type="text" name="ten" required></td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td><input type="date" name="ns" required></td>
			</tr>
			<tr>
				<td>Giới tính</td>
                <td>
                 	<input type="radio" name="gt" value="1"  checked>
                    <label >
                              Nam
                    </label>
               
                    <input  type="radio" name="gt" value="0" >
                    <label >
                              Nữ
                        </label>
                </td>
            </tr>

			<tr>
				<td>Địa chỉ </td>
				<td><input type="text" name="dc" required></td>
			</tr>
			<tr>
				<td>Ảnh </td>
				<td><input type="text" name="anh" required></td>
			</tr>
			<tr>
				<td>Loại nhân viên</td>
				<td>
					<select  name="lnv" >
                         <?php 
                         while ($row = mysqli_fetch_row($result)){
                              $m0=$row[0];
                              $m1=$row[1];
                              echo "<option value='$m0'>$m1</option>";
                         } ?>
                    </select>
				</td>
			</tr>
			<tr>
				<td>Phòng ban</td>
				<td>
					<select  name="pb" >
                    	<?php 
                         while ($row = mysqli_fetch_row($result1)){
                              $m0=$row[0];
                              $m1=$row[1];
                              echo "<option value='$m0'>$m1</option>";
                         	} 
                     	?>
                    </select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sm" value="Thêm"></center></td>
			</tr>
		</table>
	</form>
</body>
</html>