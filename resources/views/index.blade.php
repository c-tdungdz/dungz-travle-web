<!DOCTYPE html>
<html>
<head>
	<title> Admin</title>
</head>
<body>
<center>
	<form method="POST" action="{{ route('postdata') }}">
		@csrf
	<h1> Trang thêm điểm đến </h1> <br> </br> 
		Tên địa điểm <input type="input" name="ten"> <br> </br>
		 Vị trí <input type="input" name="vitri"> <br></br> 
		 Hình ảnh <input type="input" name="hinhanh"> <br></br> 
		 Thông tin <input type="input" name="thongtin"> <br></br> 
		 Đánh giá <input type="input" name="danhgia"> <br></br>
		 <input type="submit" value="thêm"> <br></br> 
	</form>
</center>
</body>
</html>
<?php
 
?>