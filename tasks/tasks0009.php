<?php
	
//	возвращает минимальное число в заданном массиве
	function get_min($array) {
		
		$size = count ($array) - 1; // количество итераций цикла
		$min = reset ($array);		// сбросили счетчик 
		while ($i++ < $size) {
			if (next($array) < $min) {
				$min = current ($array);
				
			}
		}
		return $min;
	}
	
	$arr = array (150,2,4,1,75,11,100);
	
	echo '¬озвращает минимальное число в заданном масси...<pre>';
	print_r ($arr);
	echo '</pre>';
	echo "ћинимальное число в массиве: " . get_min($arr);