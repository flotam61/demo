<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	<div class="header">
		<a href="index.html">Главная</a>
		<a href="puzzle.html">Загадки</a>
		<a href="guess.html">Угадайка</a>
		<a href="generator.php">Генератор паролей</a>
	</div>


<?php
$str = 'abcdefghijklmnopqstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$minPass = 10;
$maxPass = 15;
$length = rand($minPass,$maxPass);
$pass = '';
$num = strlen($str);
for($i=0;$i<$length;$i++){
    $char = $str[rand(0,$num)];
    $pass .= (rand(0,1) == 0 ? strtolower($char) : strtoupper($char));
}
echo "Ваш случайный пароль:  " . $pass;?>

</div>
<div class="footer">
	Copyright &copy; Maxim Talanin
<div>


</body>
</html>