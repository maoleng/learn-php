<?php 

$ten = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];
$ngay_sinh = $_POST['ngay_sinh'];
$dia_chi = $_POST['dia_chi'];
$so_thich = $_POST['so_thich'];


echo "Tên của bạn là " . $ten;
echo '<br>' . "Giới tính của bạn là: " . $gioi_tinh;
echo '<br>' . "Email của bạn là: " . $email;
echo "<br>" . "Mật khẩu của bạn là: " . $mat_khau; 
echo "<br>" . "Ngày sinh là: " . $ngay_sinh;
echo "<br>" . "Địa chỉ là: " . $dia_chi;
echo "<br>" . "Sở thích của bạn là: " . $so_thich;


 ?>