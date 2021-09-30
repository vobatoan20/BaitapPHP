
<html>
<head>
  <title>Trang Nhập Thông Tin</title>
  <style type="text/css">
    #title{
      font-size: large;
      font-weight: bold;
    }
  </style>
</head>
<body>  

<form name="NhapTT" method="post" action="xulyThongtin.php">  
  <fieldset>
    <legend id="title">Enter your information</legend>
      Họ tên: 
        <input type="text" name="ten">
      <br><br>

      Địa chỉ: 
        <input type="text" name="diachi">
      <br><br>

      Số điện thoại: 
        <input type="text" name="sodienthoai">
      <br><br>

      Giới tính:
        <input type="radio" name="gioitinh" value="Nữ" checked/>Nữ
        <input type="radio" name="gioitinh" value="Nam"/>Nam
      <br><br>

      Quốc tịch:
        <select name="quoctich">
          <option value="Việt Nam" selected> Việt Nam </option>
          <option value="Mỹ" > Mỹ </option>
        </select>
      <br><br>

      Các môn đã học:
        <input type="checkbox" name="chk1" value="php" /> PHP & MySQL
        <input type="checkbox" name="chk2" value="c#" /> C#
        <input type="checkbox" name="chk3" value="xml" /> XML
        <input type="checkbox" name="chk4" value="python" /> Python
      <br><br> 

      Ghi chú: <textarea name="comment" rows="5" cols="40"></textarea>
      <br>
  
        <button type="submit"> Gửi </button> 
        <button type="reset"> Hủy </button> 

   </fieldset>
</form>

</body>
</html>