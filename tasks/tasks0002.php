<?php
	
//	����� ���������� ����� � �������
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
	
//	�������
	$size = count ($array) - 1; // ���������� ���������� ��������
	$min = reset($array);
	while ($size > $i++) {
		
		if (next($array) < $min) {
			$min = current($array);
		}
	}
	
	
	print "<i>���������� ����� �����:</i> " . $min;