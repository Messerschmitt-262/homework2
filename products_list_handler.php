<?php
	$fh = fopen('products_export.csv', 'r');
	$keys = fgetcsv($fh, 10000);
	while(($row = fgetcsv($fh, 10000)) !== FALSE)
	{
		$result[] =	array_combine($keys, $row);
	}
	fclose($fh);
	foreach($result as $index => $item)
		{
			if($item['author'] == 'Alan Barnes')
			{
				$result[$index]['author'] = 'Алексей Рындин';
			}
			
		}
	$fh = fopen('products_export.csv', 'w');
	fputcsv($fh, $keys);
	foreach($result as $item)
	{
		fputcsv($fh, $item);
	}
	fclose($fh);
	echo '<pre>';
	var_dump($result);
	echo '<pre>';
?>