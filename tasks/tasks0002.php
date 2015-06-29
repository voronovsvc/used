<?php
	
//	Ќайти наименьшее число в массиве
	$array = array (
		5 => 12,
		3 => 3,
		1 => 14,
		2 => 55,
		4 => 18,
		0 => 32,
	);
	
	echo "<pre>";
	print_r ($array);
	echo "</pre>";
	
//	решение
	$size = count ($array) - 1; // регулируем количество итераций
	$min = reset($array);
	while ($size > $i++) {
		
		if (next($array) < $min) {
			$min = current($array);
		}
	}
	
	
	print "<i>Ќаименьшее число равно:</i> " . $min;