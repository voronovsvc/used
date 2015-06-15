<?php
	
	// ПОЛИГОН
	
	$scripts = "0 =>'/js/script1.js', '/js/script2.js', '/js/script3.js', '/js/script4.js'";
	
	$arr_scripts = array ($scripts);
 	
	
		
	$i = 0;
	while ($i < count ($arr_scripts)) {
		
		$js[$i] = "<script src=\"" . $arr_scripts[$i] . "\"></script>\r";
		$i++;
	
	}	
		
		
	echo "<pre>";
	print_r ($arr_scripts);
	echo "<pre>";
		
		
		
		
		