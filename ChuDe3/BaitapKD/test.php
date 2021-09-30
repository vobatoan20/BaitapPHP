<html>
<head>
    <title>Phép Tính</title>
    <style type="text/css">
        
    </style>
</head>

<body>
<?php

$so = isset($_POST['so']) ? trim($_POST['so']) : 0;

?>


<form align='center' action="" method="post">
<table>

    <thead>
        <th colspan="2" align="center"><h3>PHÉP TÍNH</h3></th>
    </thead>

    <tr>
        <td>Nhập số tự nhiên trong khoảng[10,1000]:</td>
        <td><input type="text" name="sothunhat" value="<?php  echo $so;?> "/></td>
    </tr>

    <tr>
     <td colspan="2" align="center"><input type="submit" value="Xử lý" name="xuly" /></td>
    </tr>
    <tr>
        <td><textarea name="ketqua" rows="3" cols="40"><?php if(isset($_POST['ketqua'])) echo $_POST['ketqua']; ?></textarea></td>
    </tr>
</table>
    
</form>

</body>

</html>