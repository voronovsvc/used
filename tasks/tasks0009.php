<?php
	
//	���������� ����������� ����� � �������� �������
	function get_min($array) {
		
		$size = count ($array) - 1; // ���������� �������� �����
		$min = reset ($array);		// �������� ������� 
		while ($i++ < $size) {
			if (next($array) < $min) {
				$min = current ($array);
				
			}
		}
		return $min;
	}
	
	$arr = array (150,2,4,1,75,11,100);
	
	echo '���������� ����������� ����� � �������� �����...<pre>';
	print_r ($arr);
	echo '</pre>';
	echo "����������� ����� � �������: " . get_min($arr);