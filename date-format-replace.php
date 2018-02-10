<?php 
	$source_string = 'Дата 28-02-2018 является последним днём в месяце, а дата 07.02.2018 не является';
	$search_pattern = "~(\d{2})[-\.](\d{2})[-\.](\d{4})~";
	$replaced_string = "$3/$2/$1";
	$changed_string = preg_replace($search_pattern, $replaced_string, $source_string);
	echo '<pre>';
	var_dump($changed_string);
	echo '</pre>';
?>