<?php
	
//	�������, ���������� ������ ��������� ������� ����������� ���������� ������� �� ��������� ���������
	
	function specified_size($size) {
			
		$i = 0;
		while ($i++ < $size) {
			$array[] = rand (1, 100);
		}
		return $array;
	}
	
	
	echo '�������, ���������� ������ ��������� ���...<pre>';
	print_r (specified_size(10));
	echo '</pre>';
	
	
	/**
	������ ������ �� � ����!
	����� �������� � ���� �������� ������� �������, 
	$array = array ();
	��� ���� ��� �������? ��� ���� ��� �� ����� ����� �������
	��������� � ���� ��������?
	
	**/