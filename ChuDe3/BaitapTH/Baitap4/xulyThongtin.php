<html>

<head>
    <title>Trang kết quả</title>
    <style>
 
    </style>
</head>

<body>
    <?php
    $ten = isset($_POST['ten']) ? trim($_POST['ten']) : 0;
    $diachi = isset($_POST['diachi']) ? trim($_POST['diachi']) : 0;
    $sodt = isset($_POST['sodt']) ? trim($_POST['sodt']) : 0;
    $gioitinh = isset($_POST['gioitinh']) ? trim($_POST['gioitinh']) : 0;

    
  <form name="myform">
    <h2>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h2>
       Họ tên: <?php echo $name ?><br>
       Địa chỉ: <?php echo $address ?><br>
       Số điện thoại: <?php echo $phone ?><br>
       Giới tính: <?php echo $sex ?><br>
       Quốc tịch: <?php echo $nationality ?><br>
       Môn học: <?php echo $chk1 . $chk2 . $chk3 . $chk4 ?><br>
       Ghi chú: <?php echo $note ?><br>
        
        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
  </form>

</body>

</html>