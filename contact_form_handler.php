<?php 
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	if(empty($name) OR empty($email) OR empty($message))
	{
		die('Пожалуйста, заполните все поля!');
	}
	elseif (mb_strlen($name) > 250 OR mb_strlen($email) > 250)
	{
		die('Слишком длинное имя или email');
	}
	elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
	{
		die('Введите правильный email');
	}
	else
	{
		$filler = "======================";
		$fh = fopen('requests.txt', 'a');
		$date = date('F d, Y, H:i');
		$line = $date."\r\n"."Имя: ".$name."\r\n"."Email: ".$email."\r\n".$message."\""."\r\n".$filler."\r\n";
		fwrite($fh, $line);	
		fclose($fh);
		header('Location: index.php');
	}
?>