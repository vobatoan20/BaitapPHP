<html>
<head>
    <title>Thanh Toán Tiền Điện</title>
    <style type="text/css">
        table{
            background-color: #00FF40;
            border-radius: 15px;
        }
        tbody{
            background: #FFFF00; 
        }
        h3{
            font-family: verdana;
            color: #FF0000;
            font-size: medium;
        }
    </style>
</head>

<body>

<?php 
$chisocu = isset($_POST['chisocu']) ? trim($_POST['chisocu']) : 0;
$chisomoi = isset($_POST['chisomoi']) ? trim($_POST['chisomoi']) : 0;

if(isset($_POST['tinh']))
    if(is_numeric($chisocu) && is_numeric($chisomoi))
        if($chisomoi > $chisocu)
            $tienthanhtoan = ($chisomoi - $chisocu) * 2000;
        else
            $tienthanhtoan="";
    else {
        echo "<font color='red' size='10px'> Hãy nhập số </font>";
        $tienthanhtoan="";
    }
else $tienthanhtoan=0;
?>

<form align='center' action="" method="post">
<table>

    <thead>
        <th colspan="3" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
    </thead>

    <tr>
        <td>Tên chủ hộ:</td>
        <td><input type="text" name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>"/></td>
    </tr>

    <tr>
        <td>Chỉ số cũ:</td>
        <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/></td>
        <td>(Kw)</td>
    </tr>

    <tr>
        <td>Chỉ số mới:</td>
        <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/></td>
        <td>(Kw)</td>
    </tr>

    <tr>
        <td>Đơn giá:</td>
        <td><input type="text" name="dongia" value=2000></td>
        <td>(VNĐ)</td>
    </tr>

    <tr>
        <td>Số tiền thanh toán:</td>
        <td><input type="text" name="thanhtoan" disabled="disabled" value="<?php  echo $tienthanhtoan;?> "/></td>
        <td>(VNĐ)</td>
    </tr>

    <tfoot>
     <td colspan="3" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tfoot>

</table>
</form>

</body>

</html>