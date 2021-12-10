<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo '<h1>Hello world</h1>';

		$a = 55;
		if ($a < 50){
			echo 'số ' . $a . ' số nhỏ hơn 50';
		}else{
			echo 'số  ' . $a . ' số lớn hơn 50' ;
		}

		echo '<br>'. 'in ra các số từ 1 đến 100 bằng php' . '<br>';
		$i;
		for ($i = 1; $i <= 100; $i++ ){ 
			echo $i . '<br>';
		}

	 ?>
</body>
</html>