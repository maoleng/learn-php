<!-- Tạo 2 file:

file Form: tên, giới tính, email, mật khẩu, ngày sinh, địa chỉ, sở thích
file Xử lý: in ra thông tin đã điền -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="gray">
	<form method="post" action="buoi_2_process.php">
		Tên
		<input type="text" name="ten"><br>
		Giới tính
		<input type="radio" name="gioi_tinh" value = "Nam" required="">Nam
		<input type="radio" name="gioi_tinh" value = "Nữ">Nữ<br>
		Email
		<input type="email" name = "email"><br>
		Mật khẩu
		<input type="password" name="mat_khau"><br>
		Ngày sinh
		<input type="date" name="ngay_sinh"><br>
		Địa chỉ
		<input type="text" name="dia_chi"><br>
		Sở thích<br>
		<input type="checkbox" name="so_thich" value = "Bóng bay">Bóng bay<br>
		<input type="checkbox" name="so_thich" value = "Đấm nhau">Đấm nhau<br>
		<input type="checkbox" name="so_thich" value = "Nhảy dây">Nhảy dây<br>
		<button onclick="dangKy()">Đăng ký</button>
	</form>

</body>
</html>