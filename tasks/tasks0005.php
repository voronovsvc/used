<?php
	
//	"ѕеревернуть" массив наоборот не пользу€сь встроенной функцией
	$random = array (15,28,32,16,19);
	for ($i = count($random) - 1; $i > -1; $i--) {
		
		$rand[] = $random[$i];
		
	}
	
	echo '<pre>';
	print_r ($rand);
	echo '</pre>';