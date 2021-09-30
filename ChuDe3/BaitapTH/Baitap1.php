<html>
<head>
    <title>Tính Diện Tích HCN</title>
    <style type="text/css">
        body{
            background-color: #00FFFF;
        }
        table{
            border: 1px solid red;
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
$dai = isset($_POST['dai']) ? trim($_POST['dai']) : 0;
$rong = isset($_POST['rong']) ? trim($_POST['rong']) : 0;

if(isset($_POST['tinh']))
    if(is_numeric($dai) && is_numeric($rong))
        $dientich = $dai * $rong;
    else {
        echo "<font color='red' size='10px'> Hãy nhập số </font>";
        $dientich="";
    }
else $dientich=0;
?>

<form align='center' action="" method="post">
<table>

    <thead>
        <th colspan="2" align="center"><h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3></th>
    </thead>

    <tr>
        <td>Chiều dài:</td>
        <td><input type="text" name="dai" value="<?php  echo $dai;?> "/></td>
    </tr>
    <tr>
        <td>Chiều rộng:</td>
        <td><input type="text" name="rong" value="<?php  echo $rong;?> "/></td>
    </tr>

    <tr>
        <td>Diện tích:</td>
        <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
    </tr>

    <tfoot>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tfoot>

</table>
</form>

</body>

</html>