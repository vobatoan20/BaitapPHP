<html>
<head>
    <title>Phép Tính</title>
    <style type="text/css">
        
    </style>
</head>

<body>
<form name="Pheptinh" action="ketquapheptinh.php" method="post">
<table>

    <thead>
        <th colspan="2" align="center"><h3>PHÉP TÍNH TRÊN HAI SỐ</h3></th>
    </thead>

    <tr>
        <td>Chọn phép tính:</td>
        <td>
            <input type="radio" name="radPT" value="Cộng"/>Cộng
            <input type="radio" name="radPT" value="Trừ"/>Trừ
            <input type="radio" name="radPT" value="Nhân"/>Nhân
            <input type="radio" name="radPT" value="Chia"/>Chia
        </td>
    </tr>
    <tr>
        <td align="right">Số thứ nhất:</td>
        <td><input type="text" name="sothunhat" size=26 required/></td>
    </tr>

    <tr>
        <td align="right">Số thứ hai:</td>
        <td><input type="text" name="sothuhai" size=26 required/></td>
    </tr>

    <tr>
     <td colspan="2" align="center"><button type="submit">Tính</button></td>
    </tr>

</table>
    
</form>

</body>

</html>