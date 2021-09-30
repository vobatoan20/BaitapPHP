<html>
<head>
    <title>Phép Tính</title>
    <style type="text/css">
        
    </style>
</head>

<body>

<?php

$sothunhat = isset($_POST['sothunhat']) ? trim($_POST['sothunhat']) : 0;
$sothuhai = isset($_POST['sothuhai']) ? trim($_POST['sothuhai']) : 0;
$radPT = isset($_POST['radPT']) ? trim($_POST['radPT']) : 0;


 if (is_numeric($sothunhat) && is_numeric($sothuhai)) {
        switch ($radPT) {
            case 'Cộng':
                $ketqua = $sothunhat + $sothuhai;
                break;
            case 'Trừ':
                $ketqua = $sothunhat - $sothuhai;
                break;
            case 'Nhân':
                $ketqua = $sothunhat * $sothuhai;
                break;
            case 'Chia':
                $ketqua = $sothunhat / $sothuhai;
                break;
        }
    } else {
        echo "Vui lòng nhập vào số!";
        $ketqua = "";
    }
?>

<form align='center' action="ketquapheptinh.php" method="post">
<table>

    <thead>
        <th colspan="2" align="center"><h3>KẾT QUẢ PHÉP TÍNH</h3></th>
    </thead>

    <tr>
        <td>Phép tính được chọn</td>
        <td><?php echo $radPT ?></td>
    </tr>
    <tr>
        <td align="right">Số thứ nhất:</td>
        <td><input type="text" name="sothunhat" size="26" value="<?php echo $sothunhat; ?>"/></td>
    <tr>
        <td align="right">Số thứ hai:</td>
        <td><input type="text" name="sothuhai" size="26" value="<?php echo $sothuhai; ?>"/></td>
    </tr>
    <tr>
        <td>Kết quả:</td>
        <td><input type="text" name="ketqua" value="<?php echo $ketqua; ?>"/></td>
    </tr>

</table>
<a href="javascript:window.history.back(-1);">Trở về trang trước</a>

    
</form>

</body>

</html>